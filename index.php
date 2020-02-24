<?php
session_start();
$cookie_name = "Langue";
$cookie_value = $_POST["Langue"];
$cookie_expires = time() + 604800; //en secondes
setcookie($cookie_name, $cookie_value, $cookie_expires);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Eyavabohmb Airport</title>
    <link rel="stylesheet" href="style.css"/>
</head>

<body style="background-image: url(airplanes-background.jpg); background-size: cover">
    <?php
    include 'header.php';
        ?>
<div id="corps">
            <?php
            include 'menu.php';
            ?>
    <section>
        <div>test</div>
    </section>
</div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>