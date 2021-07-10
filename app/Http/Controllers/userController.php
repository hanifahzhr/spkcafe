<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    //     $this->middleware('admin');
    // }
    public function user() {
        return view ('WEB.user.user');
    }

    public function create() {
        return view ('WEB.user.create');
    }
    public function update() {
        return view ('WEB.user.edit');
    }
}
