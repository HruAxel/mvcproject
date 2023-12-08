<?php

class Session {

    function setFlash($kulcs, $ertek) {
        $_SESSION["_flash"][$kulcs] = $ertek;
    }
}