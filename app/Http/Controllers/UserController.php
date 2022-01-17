<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile()
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        return view('profile', [
            "title" => "Profile"
        ], compact('user'));
    }

    public function editProfile(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        $name = $request->name;
        $email = $request->email;
        $alamat = $request->alamat;
        $npassword = request()->input('npassword');
        $cnpassword = request()->input('cnpassword');

        if ($npassword == $cnpassword) {
            if ($npassword && $cnpassword != null) {
                $user->update(['password' => Hash::make($npassword)]);
            }
        }
        $user->update(['name' => $name, 'alamat' => $alamat, 'email' => $email]);

        // DB::table('users')->where('id', $id)->update(['name' => $name, 'alamat' => $alamat, 'email' => $email]);
        // $user->update(['name' => $name, 'alamat' => $alamat, 'email' => $email, 'password' => Hash::make($npassword)]);
        return redirect('/profile')->with('success', 'Data berhasil di update');
    }

    public function editPassword()
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        $npassword = request()->input('npassword');
        $cnpassword = request()->input('cnpassword');

        if ($npassword == $cnpassword) {
            if ($npassword && $cnpassword != null) {
                $user->password = $npassword;
                $user->update(['password' => Hash::make($npassword)]);
                return redirect('/profile')->with('success', "Berhasil di update password");
            }
            return redirect('/profile')->with('failed', "Gagal update/kesalahan pada password");
        } else {
            return redirect('/profile')->with('failed', "Gagal update/kesalahan pada password");
        }
    }
}
