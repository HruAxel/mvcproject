<?php

spl_autoload_register( function($file) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    include("$file.php");
} );

use controllers\Pages;
use controllers\classes\Route;

$page = new Pages;




 Route::get('/kezdolap', function() use($page) {
    $page->index();
 });

 Route::get('/kulfold', function() use($page) {
    $page->kulfold();
 });

 Route::get('/gazdasag', function() use($page) {
    $page->gazdasag();
 });

 Route::get('/tudomany', function() use($page) {
    $page->tudomany();
 });

 Route::get('/admin/log', function() use($page) {
    $page->admin();
 });
 Route::post('/admin/log', function() use($page) {
    $page->adminProcess();
 });

 Route::get('/admin/article', function() use($page) {
    $page->adminArticle();
 });


 

// if($url === '/kezdolap') {
//     $page->index();
// }
// if($url === '/kulfold') {
//     $page->kulfold();
// }
// if($url === '/gazdasag') {
//     $page->gazdasag();
// }
// if($url === '/tudomany') {
//     $page->tudomany();
// }

// if($url === '/admin/log') {
//     $page->admin();
// }

