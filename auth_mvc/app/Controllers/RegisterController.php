<?php
namespace App\Controllers;

use App\Models\User;
use App\Helper\Helper;

class RegisterController
{
    public function index()
    {
        Helper::view('auth.register');
    }

    public function register()
    {
        $user = new User();

        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];


        if ($user->register()) {
            Helper::redirect('login');
        } else {
            $user->error = 'Email already registered!';
        }
    }
}
