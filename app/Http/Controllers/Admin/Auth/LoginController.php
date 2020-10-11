<?php

namespace App\Http\Controllers\Admin\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
    protected $redirectTo = '/backpanel/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
//        session()->put('previousUrl', url()->previous());

        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        $user = User::where('email', $request->email)->first();

        if (!$user)
        {
          return redirect()->back()->with('error','User not found!');
        }

        if ($user->role_id === 1)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->to('backpanel/home');
            }else{
                return redirect()->back()->with('error','Credentials dose not match!');
            }
        }else{
            return redirect()->back()->with('error','User not access this!');
        }

    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    // override logout so cart contents remain:
    // https://github.com/Crinsane/LaravelShoppingcart/issues/253
    public function logout(Request $request)
    {

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/backpanel/login');

//        Auth::logout();
//        return redirect('/dashboard/login');
    }

    public function redirectTo()
    {
        return str_replace(url('/'), '', session()->get('previousUrl', '/'));
    }
}
