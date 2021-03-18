<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use DB;

class AyopariwisataEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $r = DB::select("SELECT * from boking")[0];

        return $this->from('no-reply@mksolusi.id')
                   ->view('emailku')
                   ->with(
                    [
                        'nama' => $r->nama_user,
                        'website' => 'https://ayo.mksolusi.id/login',
                    ]);
    }
}
