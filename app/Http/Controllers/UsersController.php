<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User as User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Image;


class UsersController extends Controller
{
    //
    
    public function UserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $role = Role::find($id);
        return view('/profile',compact('user'),compact('role'));
    }
    public function update_avatar(Request $request){

        //handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save( public_path('/images/avatars/') . $filename);
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
            return back();
        }
    }
}
