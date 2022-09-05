<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use DateTime;
use Firebase\FirebaseLib;

class Firebase extends Controller
{
    public function index()
    {
        $firebase = new FirebaseLib(getenv('FIREBASE_URL'), getenv('FIREBASE_TOKEN'));

        // Storing an array
        $test = [
            'foo' => 'bar',
            'i_love' => 'lamp',
            'id' => 42
        ];
        $dateTime = new DateTime();
        $firebase->set(getenv('FIREBASE_PATH') . '/' . $dateTime->format('c'), $test);

        // Storing a string
        $firebase->set(getenv('FIREBASE_PATH') . '/name/contact001', 'John Doe');

        // Reading the stored string
        $name = $firebase->get(getenv('FIREBASE_PATH') . '/name/contact001');
        return view('firebase', ['name' =>$name]);
    }
}