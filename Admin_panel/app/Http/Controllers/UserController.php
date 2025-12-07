<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList(){
        $user = User::where('user_type' , 0)->get();
        return view('users-list', ['user' => $user]);
    }

    public function deleteUser($id){
        User::where('id', $id)->delete();
        return  back()->with('delUserSuccess', 'کاربر حذف گردید.');
    }
    public function updateUserPage($id){
        $user = User::where('id', $id)->first();
        return view('update-user', ['user' => $user]);
    }

    public function updateUser(Request $request, $id){
        $updateUser = User::where('id', $id)->first();
        $request->validate([
           'name'=>'required|string|min:3',
           'email'=>'required|email|unique:users,email,'.$updateUser->id,
            'avatar'=>'mimes:jpeg,jpg,png,gif'
        ]);

        $updateUser->name = $request->name;
        $updateUser->email = $request->email;
        $updateUser->avatar = $request->avatar;

        if ($request->hasFile('avatar')) {
            $imgThumbnail_path = $request->file('avatar')->store('user', 'public');
            $updateUser->avatar = $imgThumbnail_path;
        }

        $updateUser->save();
        return redirect()->route('userList')->with('userUpdateSuccess' , 'کاربر بروزرسانی شد.');
    }

    public function userProfile($id){
        $userProfile = User::where('id', $id)->first();
        return view('users-profile', ['userProfile' => $userProfile]);
    }


}
