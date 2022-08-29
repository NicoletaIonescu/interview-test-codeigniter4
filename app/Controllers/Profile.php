<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Profile extends Controller
{
    public function index()
    {
        return view('profile');
    }
}