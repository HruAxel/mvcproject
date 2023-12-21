
<?php

$url = $_SERVER["REQUEST_URI"];

if($url === '/admin/log') {
    echo '<script src="/views/scripts/admin_log_script.js"></script>';
} elseif($url === '/admin/article') {
    echo '<script src="/views/scripts/admin_page_script.js"></script>';
} else {
    echo '<script src="/views/scripts/user_script.js"></script>';
}


