<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\SessionModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing_page');
    }

    public function landing_page(): string
    {
        return view('landing_page');
    }
    
    
}
