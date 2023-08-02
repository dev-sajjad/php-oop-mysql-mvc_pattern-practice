<?php

namespace App\Helper;

class Helper
{
    public static function view($file_path)
    {
        $path = str_replace("\\", DIRECTORY_SEPARATOR, $file_path);
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);

        $file = APP_ROOT . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . $path . '.php';


        if(file_exists($file)) {
           return require_once($file);
        }
        echo "File not found";
    }

    public static function redirect($url) 
    {
        return header("Location: /$url");
    }
}
