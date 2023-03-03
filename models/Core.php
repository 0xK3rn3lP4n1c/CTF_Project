<?php

namespace app\models;

/**
 * Base Model of app.
 */
class Core
{
    public $type = 3;
    
    public function getType(){
        return $this->type;
    }
}
