<?php

$url = $_SERVER["REQUEST_URI"];

if($url === '/admin/log') {
    print '<div class="nav_bar">
    <nav>
        <h2>Morning News - Admin</h2>
        <a href="#" id="nav_btn">Belépés</a>
    </nav>
</div>';
} else {
    print '<div class="nav_bar">
    <nav>
        <a href="/kezdolap" class="item">Kezdőlap</a>
        <a href="/kulfold" class="item">Külföld</a>
        <a href="#">
            <h2 id="main_text">Morning News</h2>
        </a>
        <a href="/gazdasag" class="item">Gazdaság</a>
        <a href="/tudomany" class="item">Tudomány</a>
    </nav>
</div>';
}




