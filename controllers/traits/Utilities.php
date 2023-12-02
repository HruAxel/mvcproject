<?php

trait Utilities {

    function view($file) {
        include(__DIR__."/../../views/$file.php");
    }

}