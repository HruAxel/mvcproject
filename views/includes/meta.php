<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php 
$url = $_SERVER["REQUEST_URI"];

if($url === "/kezdolap") {
    echo '<title>Kezdőlap</title>';
}

if($url === "/kulfold") {
    echo '<title>Külföld</title>';
}

if($url === "/gazdasag") {
    echo '<title>Gazdaság</title>';
}

if($url === "/tudomany") {
    echo '<title>Tudomány</title>';
}
if($url === "/admin/log") {
    echo '<title>Admin Bejelentkezés</title>';
}
?>

<?php 

    if($url === "/admin/log") {
        echo '<link href="/views/styles/admin_log.css" rel="stylesheet">';
    }
    elseif($url === "/admin/article") {
        echo '<link href="/views/styles/admin_page.css" rel="stylesheet">';
    }
    else {
        echo '<link href="/views/styles/user_page.css" rel="stylesheet">';
    }
?>

<script src="/views/scripts/jquery-3.7.0.js"></script>

<style>
        @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz@1,6..96&family=Cinzel+Decorative&family=MedievalSharp&family=MonteCarlo&family=Playfair+Display&family=Poppins:wght@100&display=swap');
</style>
