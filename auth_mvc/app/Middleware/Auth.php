<?php
namespace App\Middleware;

use App\Helper\Helper;

class Auth
{
    public function handle()
    {
        if (!isset($_SESSION['user_id'])) {
           Helper::redirect('login');
           exit();
        }
    }
}
