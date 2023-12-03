<?php

class Proccess
{

    function admin_log_proccess()
    {

        session_start();



        if (isset($_POST["submitted"])) {

            $name = $_POST["name"];
            $password = $_POST["password"];

            $errors = [];

            if (strlen($name) <= 3) {
                $errors[] = 'A név túl rövid!';
            }


            if (count($errors) === 0) {
                $_SESSION["success"] = 'Sikeres küldés!';
            } else {
                $_SESSION["errors"] = $errors;
            }
        }
    }
}
