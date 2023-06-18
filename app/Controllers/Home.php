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
    public function pembuatan_ak1()
    {
        return view('page/pembuatan_ak1');
    }
}
