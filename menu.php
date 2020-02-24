<?php
echo("    <aside>
        <ul>
");
$user = $_POST["user"];
$xml2 = simplexml_load_file("./menu.xml") or die();
if ((string)$_COOKIE[$cookie_name] == "NomFR") {
    foreach ($xml2->children() as $lien) {
        echo("<li><a href='$lien->Url'>$lien->NomFR</a></li>");
    }
}
else {
    foreach ($xml2->children() as $lien) {
        echo("<li><a href='$lien->Url'>$lien->NomEN</a></li>");
    }
}
echo("        </ul>
    </aside>
");
?>