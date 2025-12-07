<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/profile';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // اعتبارسنجی فیلدهای فرم
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|min:6',
        ]);

        // تلاش برای ورود با name و password
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password], $request->remember)) {
            return redirect()->intended($this->redirectTo);
        }

        // اگر ورود ناموفق بود
        return back()->withErrors([
            'name' => 'نام کاربری یا رمز عبور نادرست است.',
        ])->withInput($request->only('name', 'remember'));
    }
}
