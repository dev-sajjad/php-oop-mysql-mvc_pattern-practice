<?php
namespace App\Middleware;

use App\Helper\Helper;

class Guest{
    public function handle() {
        if(isset($_SESSION['user_id'])) {
            Helper::redirect('dashboard');
            exit();
        }
    }

}
