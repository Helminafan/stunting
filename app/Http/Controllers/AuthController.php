<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }
    public function gantiPassword(Request $request, string $id)
    {
        // if (!Hash::check($request->oldPassword, auth()->user()->password)) {
        //     return back();
        // }
        // $request->validate([
        //     "oldPassword" => "required",
        //     "newPassword"         => "required",
        //     "reenter_password" => "required|same:passwordBaru",
        // ]);
        $data = User::find($id);
        $data->password = Hash::make($request->newPassword);
        $data->update();
        return redirect()->route('user.home');
    }
    public function gantiTelp(Request $request, string $id)
    {
        
        $data = User::find($id);
        $data->password = $request->email;
        $data->password = $request->telp;
        $data->update();
        return redirect()->route('user.home');
    }
}
