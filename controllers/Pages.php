<?php

include(__DIR__."/traits/Utilities.php");

class Pages {

    use Utilities;

    function index() {

        $this->view('index');
        
    }

    function kulfold() {

        $this->view('kulfold');
    }

    function gazdasag() {

        $this->view('gazdasag');
    }

    function tudomany() {

        $this->view('tudomany');
    }

    function admin() {
        $this->view('admin');

        
    }
}