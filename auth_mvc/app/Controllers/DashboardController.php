<?php
namespace App\Controllers;

use App\Helper\Helper;

class DashboardController
{
    public function index()
    {
        Helper::view('dashboard');
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();

        Helper::redirect('login');
        exit();
    }
}
