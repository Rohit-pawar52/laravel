<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

Class UserController extends Controller{
    public function index(){
        $users = User::all();
        // dd($users);
        return view('hello');
    }
}