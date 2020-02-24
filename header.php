<?php
if ($_SERVER['REQUEST_URI'] == '/aeroport/login.php') { }
else
{
    if (isset($_SESSION["userName"])) {
    } elseif (isset($_POST["user"]) && isset($_POST["password"])) {
        $xml = simplexml_load_file("user.xml") or die();
        foreach ($xml->children() as $user) {
            if (($user->Username) == $_POST["user"]) {
                if (($user->Password) == ($_POST["password"])) {
                    $prenom = (string)$user->Prenom;
                    $nom = (string)$user->Nom;
                    include 'sessionMaker.php';
                }
            }
        }
        if (!isset($_SESSION["userName"]))
        {
            header('Location: login.php');
            exit();
        }
    }
    echo("
<header>
    <h1 style='text-align: center;'>Eyavabohmb Airport - We're the <span style='text-decoration-line: underline; font-style: italic; font-weight: bolder;''>bomb</span> amongst the competition!</h1>
</header>");
    echo("<nav><div id='hello'><span>Bonjour, </span><a href='page.php'>" . $_SESSION["userName"] . " " . $_SESSION["userLastName"] . "</a>!</div>
<a href='login.php' class='lien'>Déconnexion</a>
<a href='page.php' class='lien'>page</a>
<a href='page.php' class='lien'>page</a>
    </nav>");
}

