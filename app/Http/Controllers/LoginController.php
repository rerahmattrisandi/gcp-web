<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index()
    {
        return view('auth.login');
    }

    public function authenticated(LoginRequest $request)
    {

        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials)) {
            if(auth()->check()) {
                $this->redirectTo = route('dashboard');
            }
            return redirect()->to($this->redirectTo)->with('error', 'Pastikan Email atau Password Anda Sesuai');
        }
    }
}
