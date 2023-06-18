<?php

namespace App\Controllers;

class Admin extends BaseController
{
    // public function __construct(){

    // }
    public function index()
    {
        return view('admin/page/dashboard');
    }
}

