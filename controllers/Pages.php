<?php

namespace controllers;

session_start();

use controllers\traits\Utilities;
use controllers\classes\Validation;
use controllers\classes\Session; 

class Pages
{


    public $session;

    use Utilities;

    function __construct()
    {
        $this->session = new Session;
    }

    function index()
    {

        $this->view('index');
    }

    function kulfold()
    {

        $this->view('kulfold');
    }

    function gazdasag()
    {

        $this->view('gazdasag');
    }

    function tudomany()
    {

        $this->view('tudomany');
    }

    function admin()
    {
        $this->view('admin');
    }

    function adminProcess()
    {

        $errors = [];

        $errors =  Validation::adderror(
            Validation::lenght(
                $_POST["name"],
                2,
                30,
                'A név 4 és 30 karakter között kell legyen!'
            ),
            $errors
        );
        if(count($errors) > 0 ) {
            $this->session->setFlash('errors', $errors);
            header("location:" . $_SERVER["HTTP_REFERER"]);
        } else {
            header("location:/admin/article");
        }
    }

    function adminArticle()
    {

        $this->view('admin_article');
    }


}
