<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        return view('page/dashboard');
    }
    public function login()
    {
        return view('page/login');
    }
}
