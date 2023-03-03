<?php

namespace app\models;

/**
 * Base Model of app.
 */
class BaseModel extends Core
{
    public $id = 3;

    public function __construct()
    {
    }

    public function render($path, $params = []){
        ob_start();
        include($path);
        $var=ob_get_contents(); 
        ob_end_clean();
        echo  $var;
    }

    public function test(){
        echo "test";
    }
}