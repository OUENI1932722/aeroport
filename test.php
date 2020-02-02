<?php
/**
 * Created by PhpStorm.
 * User: oueni1932722
 * Date: 2020-01-31
 * Time: 15:16
 */ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
<?php
$nom = "anonyme";
$prenom = "personne";
$sexe;
if (isset($_POST["prenom"]) && isset($_POST["nom"]))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
}
if (isset($_POST["sexe"]))
{
    if ($_POST["sexe"] === "H")
        $sexe = "M.";
    elseif ($_POST["sexe"] === "F")
        $sexe = "Mme.";
}
    echo("Bonjour $sexe$prenom $nom !");
?>
</body>

</html>