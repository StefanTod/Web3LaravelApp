<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User as User;
use App\Role;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    //
    
    public function UserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $role = Role::find($id);
        return view('/profile',compact('user'),compact('role'));
    }
}
