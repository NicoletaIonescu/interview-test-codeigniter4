<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        if(! session()->get('logged_in')) {
            echo view('welcome');
        } else {
            $data['welcome_message'] = "Welcome, " . $session->get('user_name');
            echo view("dashboard", $data);
        }
    }
}