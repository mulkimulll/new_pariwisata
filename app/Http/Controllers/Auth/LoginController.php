<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated(Request $request, $user)
    {
        if ( $user->isAdmin() ) {

            return redirect()->route('dashboard');
        } elseif ($user->isPartner1()) {

            return redirect()->route('dashboard');
        } elseif ($user->isPartner2()) {

            return redirect()->route('dashboard');
        } elseif ($user->isPartner3()) {

            return redirect()->route('dashboard');
        } 


        return redirect('/');
    }
    // protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    // Login Google SSO
    public function redirectToGoogle()

    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()

    {
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);

        // Return ke home setelah melakukan login
        return redirect('/');
    }



    // Login Facebook SSO
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    
    {
        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user);

        // Return ke home setelah melakukan login
        return redirect('/');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email','=', $data->email)->first();
        if(!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->save();
        }

        Auth::login($user);
    }

}