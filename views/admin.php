<?php

?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <?php include(__DIR__ . "/includes/meta.php") ?>
</head>

<body>

  <?php include(__DIR__ . "/includes/navbar.php") ?>

  <div class="form_area">
        <form action="../feladat/process/admin_log_process.php" method="post">

            <h2>Üdvözöljük, a továbbiakhoz jelentkezzen be!</h2>

            <?php
            if (isset($_SESSION["errors"])) {
                foreach ($_SESSION["errors"] as $err)
                    print "<li class=\"error\">{$err}</li>";

                unset($_SESSION["errors"]);
            }
            ?>
            <?php
            if (isset($_SESSION["success"])) {
                print "<li class=\"success\">{$_SESSION["success"]}</li>";

                unset($_SESSION["errors"]);
            }
            ?>

            <input type="text" name="name" id="name" placeholder="Név">

            <input type="password" name="password" id="password" placeholder="Jelszó">

            <button type="submit" name="submitted" value="ok" id="btn">Bejelentkezés</button>
        </form>
    </div>
    <div class="welcome">
        <h3>Szép napot! Jelentkezz be, és kezdőthet is a cikk írás!</h3>
    </div>


  <?php include(__DIR__ . "/includes/footer.php") ?>
</body>

</html>

<!-- A VIDEÓ 23:51 PERCÉNÉL TARTOTTAM! -->