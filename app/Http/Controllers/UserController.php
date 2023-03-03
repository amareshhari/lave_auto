<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function index(){
        $users = User::get();
        return view('users.index',compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(){
        
    }

    public function edit(User $user){
        return view('users.edit',compact('user'));
    }

    public function update(User $user){

    }

    public function show(User $user){
        return view('users.show',compact('user'));
    }
}
