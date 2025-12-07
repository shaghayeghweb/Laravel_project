<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function update(Request $request){
        $validation = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'password' => 'confirmed|nullable',
            'password_confirmation' => 'nullable'
        ]);

        $user = Auth::user();
        if (!empty($validation['password'])) {
            $validation['password'] = Hash::make($validation['password']);
        }else{
            unset($validation['password']);
        }

        $user->update($validation);

        return back()->with('success', 'اطلاعات با موفقیت ویرایش شد.');


    }

    public function add_address()
    {
        return view('add-new-address');
    }




}
