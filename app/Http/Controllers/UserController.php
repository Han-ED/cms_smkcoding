<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function ManageUser(){
        $users = User::orderBy('created_at', 'desc')->paginate(5);
        return view('ManageUser', [
            'users' => $users,
        ]);
    }
}
