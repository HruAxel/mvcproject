<?php

include(__DIR__."/controllers/Pages.php");

$page = new Pages;


$url = $_SERVER["REQUEST_URI"];

if($url === '/kezdolap') {
    $page->index();
}
if($url === '/kulfold') {
    $page->kulfold();
}
if($url === '/gazdasag') {
    $page->gazdasag();
}
if($url === '/tudomany') {
    $page->tudomany();
}

if($url === '/admin/log') {
    $page->admin();
}

