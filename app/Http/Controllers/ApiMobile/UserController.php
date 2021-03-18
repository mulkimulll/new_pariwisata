<?php

namespace App\Http\Controllers\ApiMobile;

use Laravel\Passport\TokenRepository;
use Laravel\Passport\RefreshTokenRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

use App\Helpers\Helper;

class UserController extends Controller
{
    public $successStatus = 200;

    public function send_tokenid(Request $request)
    {
        $token = $request->token;
        $id_user = $request->id_user;

        $i = DB::insert("INSERT INTO token_user (token,id_user) values (?,?) ",[$token, $id_user]);

        $notif = Helper::send_notif($id_user, "");
    }

    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('nApp')->accessToken;
            $success['id_user'] =  Auth::user()->id;
            $success['name'] =  Auth::user()->name;
            $success['email'] =  Auth::user()->email;
            $update_device_token = User::where('id', Auth::user()->id)->update(['device_token'=>request('device_token')]);
        
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     'c_password' => 'required|same:password',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['error'=>$validator->errors()], 401);            
        // }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('nApp')->accessToken;
        $success['name'] =  $user->name;

        return response()->json(['success'=>$success], $this->successStatus);
    }

    public function logout(Request $request)
    {
        $remove_token = User::where('id', $request->user_id)->update(['device_token'=>'']);
        if($remove_token) {
            return response()->json(['success'=>"Berhasil logout"], $this->successStatus);
        }

        DB::delete('DELETE FROM token_user WHERE id_user = ?', [$request->user_id]);
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }
}
