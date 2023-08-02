<?php
namespace App\Controllers;

use App\Models\User;
use App\Helper\Helper;

class LoginController
{
    public function index()
    {
        Helper::view('auth.login');
        // require('pages/auth/login.php');
    }

    public function login()
    {
        $user = new User();

        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        if ($user->login()) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->name;

            Helper::redirect('dashboard');
            exit();
        } else {
            echo 'user login failed';
        }
    }
}
