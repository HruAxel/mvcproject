<?php

namespace controllers\classes;

class Validation {
    public static function lenght($data, $min, $max, $msg) {

        $lenght = strlen( trim($data));

        if($lenght < $min || $lenght > $max ) {
            return $msg;
        } 
    }

    static function adderror($err, $errArray) {
        if($err) {
            $errArray[] = $err;
        } 
        return $errArray;
    }
}