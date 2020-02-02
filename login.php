<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Eyavabohmb Airport</title>
    <link rel="stylesheet" href="style.css"/>
</head>

<body style="background-image: url(airplanes-background.jpg); background-size: cover">
<header style="display: flex; flex-wrap: nowrap;">
    <h2>Eyavabohmb Airport - We're the <span style="text-decoration-line: underline; font-style: italic; font-weight: bolder;">bomb</span> amongst the competition!</h2>
</header>
<div id="corps">
    <div id="formulaireConnection">
    <h1>Connexion</h1>
    <form method="POST" action="index.php">
        <table id="formConnection">
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
<footer>
    <div>Fait par: Nicolas Ouellet-Duval</div>
    <div>Contactez-nous: oueni1932722@etu.cegepjonquiere.qc.ca</div>
</footer>
</body>

</html>