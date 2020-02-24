<?php
include 'sessionDeleter.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Eyavabohmb Airport</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<?php
include 'header.php';
?>
<body style="background-image: url(airplanes-background.jpg); background-size: cover">
<header style="display: flex; flex-wrap: nowrap;">
    <h1>Eyavabohmb Airport - We're the <span style="text-decoration-line: underline; font-style: italic; font-weight: bolder;">bomb</span> amongst the competition!</h1>
</header>
<div id="corps" style="height: 80%">
    <div id="formulaireConnection">
    <h1>Connexion</h1>
        <form method="POST" action="index.php">
        <table id="formConnection">
            <div id="boutonsLangue">
                <label for="EN">Anglais</label><input type="radio" name="Langue" value="NomEN" id="EN">
                <label for="FR">Français</label><input type="radio" name="Langue" value="NomFR" id="FR">
            </div>
            <tr>
                <td><label for="user">Username: </label></td><td><input type="text" id="user" name="user" placeholder="Username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td><td><input type="password" id="password" name="password" placeholder="Password" required></td>
            </tr>
            <tr>
                <td><input type="button" id="register" name="register" value="Register"></td><td><input type="submit" id="login" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
    </div>
</div>
<?php
include 'footer.php';
?>
</body>

</html>