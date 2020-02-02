<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Eyavabohmb Airport</title>
    <link rel="stylesheet" href="style.css"/>
</head>

<body style="background-image: url(airplanes-background.jpg); background-size: cover">
<header>
    <h2 style="text-align: center;">Eyavabohmb Airport - We're the <span style="text-decoration-line: underline; font-style: italic; font-weight: bolder;">bomb</span> amongst the competition!</h2>
</header>
<nav>
    <?php
        $user = $_POST["user"];
        echo("<div id='hello'><span>Bonjour, </span><a href='profile.php'>$user</a>!</div>
<a href='login.php' class='lien'>Déconnexion</a>
<a href='page.php' class='lien'>page</a>
<a href='page.php' class='lien'>page</a>")
        ?>
    </nav>
<div id="corps">
    <aside>
        <ul>
            <li><a href="page.php">Item 1</a></li>
            <li><a href="page.php">Item 2</a></li>
            <li><a href="page.php">Item 3</a></li>
        </ul>
    </aside>
    <section>
        <div>test</div>
    </section>
</div>
<footer>
        <div>Fait par: Nicolas Ouellet-Duval</div>
        <div>Contactez-nous: oueni1932722@etu.cegepjonquiere.qc.ca</div>
</footer>
</body>

</html>