<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function showProfile()
    {
        return view('profile.index');
    }


    public function showProfileEdit()
    {
        $user = User::where('nik', auth()->user()->nik)->first();
        return view('profile.edit', [
            'user' => $user
        ]);
    }

    public function showAlamatEdit()
    {
        $user = User::where('nik', auth()->user()->nik)->first();
        return view('profile.alamat', [
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->has('foto_diri')) {
            $request->validate([
                'nm_user' => 'required',
                'nik' => 'required|numeric',
                'no_hp' => 'required|numeric',
                'jns_kelamin' => 'required',
                'tgl_lahir' => 'required|date',
                'foto_diri' => 'image|file|max:1024'
            ]);

            if ($user->foto_diri != null) {
                File::delete('img/foto_diri/' . $user->foto_diri);
            }

            $user->nm_user = $request->nm_user;
            $user->nik = $request->nik;
            $user->no_hp = $request->no_hp;
            $user->jns_kelamin = $request->jns_kelamin;
            $user->tgl_lahir = $request->tgl_lahir;

            $foto_diri = $request->foto_diri;
            $namafile = time() . '.' . $foto_diri->getClientOriginalExtension();
            $foto_diri->move('img/foto_diri/', $namafile);

            $user->foto_diri = $namafile;
        } else {
            $request->validate([
                'nm_user' => 'required',
                'nik' => 'required|numeric',
                'no_hp' => 'required|numeric',
                'jns_kelamin' => 'required',
                'tgl_lahir' => 'required|date'
            ]);

            $user->nm_user = $request->nm_user;
            $user->nik = $request->nik;
            $user->no_hp = $request->no_hp;
            $user->jns_kelamin = $request->jns_kelamin;
            $user->tgl_lahir = $request->tgl_lahir;
        }

        $user->update();
        return redirect('profile_edit')->with('success', 'Profile Telah Diperbarui!');
    }

    public function updateAlamat(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'jalan' => 'required',
        ]);

        $user->prop = $request->provinsi;
        $user->kab = $request->kabupaten;
        $user->kec = $request->kecamatan;
        $user->desa = $request->desa;
        $user->jalan = $request->jalan;

        $user->update();

        return redirect('alamat_edit')->with('success', 'Alamat Berhasil Diperbarui');
    }
}
