<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function showviewLogin()
    {
        return view('auth.login', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'nik' => ['required', 'numeric'],
            'password' => ['required'],
        ]);

        $user = User::where([
            'nik' => $request->nik,
            'password' => $request->password
        ])->first();

        $checkStatus = User::where('nik', $request->nik)->first();


        if ($checkStatus == null) {
            return back()->with('errors', 'Akun anda Tidak Ada!!');
        }

        $oldpassword = $checkStatus->password;

        if ($checkStatus->password == null) {
            return back()->with('errors', 'Akun anda sudah terdaftar!
            silahkan menunggu kode verifikasi
            dikirimkan ke nomor anda');
        }

        $passHashed = Hash::make($checkStatus->password);
        if ($checkStatus->password == $request->password) {
            $checkStatus->update([
                'password' => $passHashed
            ]);
        }

        if (Auth::attempt(['nik' => $request->nik, 'password' => $request->password])) {
            $request->session()->regenerate();
            $checkStatus->update([
                'password' => $oldpassword
            ]);
            return redirect()->intended('dashboard');
        }

        // if ($checkStatus->password == $request->password) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('dashboard');
        // }

        // if ($user) {
        //     Auth::login($user);
        //     // return redirect()->route('dashboard');
        //     $request->session()->regenerate();
        //     return redirect()->intended('dashboard');
        // }

        return back()->with('errors', 'Login failed!');
    }


    public function showRegister()
    {
        return view('auth.register', [
            'title' => 'register',
            'active' => 'register',
        ]);
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'nm_user' => 'required',
            'nik' => 'required|unique:users,nik',
            'tgl_lahir' => 'required',
            'no_hp' => 'required'
        ]);

        $user = new User();
        $user->id_user = Str::random(8);
        $user->nm_user = $request->nm_user;
        $user->nik = $request->nik;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->no_hp = $request->no_hp;
        // $user->password = bcrypt('123');

        $user->save();

        return redirect('/afterRegister')->with('success', 'New User has been added!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
