

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <?php include(__DIR__ . "/includes/meta.php") ?>
</head>

<body>

  <?php include(__DIR__ . "/includes/navbar.php") ?>

  <div class="form_area">
        <form action="/admin/log" method="post">

            <h2>Üdvözöljük, a továbbiakhoz jelentkezzen be!</h2>

            <?php
            if (isset($_SESSION["_flash"]["errors"])) {
                foreach ($_SESSION["_flash"]["errors"] as $err)
                    print "<li class=\"error\">{$err}</li>";


            }
            ?>


            <input type="text" name="name" id="name" placeholder="Név">

            <input type="password" name="password" id="password" placeholder="Jelszó">

            <button  name="submitted" id="btn">Bejelentkezés</button>
        </form>
    </div>
    <div class="welcome">
        <h3>Szép napot! Jelentkezz be, és kezdőthet is a cikk írás!</h3>
    </div>


  <?php include(__DIR__ . "/includes/footer.php") ?>
</body>

</html>

<?php unset($_SESSION["_flash"]);?>