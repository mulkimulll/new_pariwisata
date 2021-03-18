<?php
namespace App\Helpers;
use DB;

class Helper
{
    public static function send_notif($id_user, $message_body)
    {
        $s = DB::select("SELECT token FROM token_user WHERE id_user=? ORDER BY id DESC", [$id_user]);
        
        if (!empty($s->token)) {
            $apiToken = 'AAAAjMWE1M4:APA91bHzse814q_QPU1-qMVXMerwcnQxLmBffI-IvxHStkqio8icPV9_Y8H-jHwhUvP8yQchTm0o8MyDLTbn9z1DImcDqx2ZI46JXjWmC4X0zObdqOgnihI4xzJPU1Lx9a9Bevl8H0aQ';
            $senderId = '604609238222';

            // Instantiate the client with the project api_token and sender_id.
            $client = new \Fcm\FcmClient($apiToken, $s->token);

            // Instantiate the push notification request object.
            $notification = new \Fcm\Push\Notification();

            // Enhance the notification object with our custom options.
            $notification
                ->addRecipient($deviceId)
                ->setTitle('Ayo Pariwisata')
                ->setBody($message_body);

            // Send the notification to the Firebase servers for further handling.
            $client->send($notification);
        }
    }
}