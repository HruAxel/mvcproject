<?php

$url = $_SERVER["REQUEST_URI"];

if ($url === '/admin/log') {
    print '<div class="nav_bar">
    <nav>
        <h2>Morning News - Admin</h2>
        <a href="#" id="nav_btn">Belépés</a>
    </nav>
</div>';
} elseif ($url === '/admin/article') {
    print '<div class="nav_bar">
        <nav>
            <h2>Morning News - Admin</h2>
            <a href="../feladat/admin_edit_page.php" class="nav_btn1">Cikkek</a>
            <h1 style="text-align: center;">Kedves <?php print $_SESSION["user"]["name"] ?> jelenleg be vagy lépve.</h1>
            <a href="/admin/log" class="nav_btn">Kilépés</a>
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
