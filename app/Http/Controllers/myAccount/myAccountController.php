<?php

namespace App\Http\Controllers\myAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class myAccountController extends Controller
{
    //
    public function index()
    {
        return view('myAccount.login');
    }

    public function create()
    {
        return view('myAccount.register');
    }
}
