<?php

namespace App\Services;

class Page 
{
    public static function component($component_name){
        require_once  'views/components/' . $component_name . '.php';
    }

}


?>