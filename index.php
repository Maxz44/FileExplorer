<?php
/**
 * Script qui permet la navigation dans le repertoire courrant
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Index</title>
    </head>
    <body>
        <h1>Index of <?=__DIR__?></h1>
        <ul>
<?php
//changement de répertoire
if (isset($_GET['dirName'])) {
    $dir = $_GET['dirName'];
} else {
    $dir = '.';
}
//scan du repertoire
$tab = scandir($dir);

//affichage de chaque élément
foreach ($tab as $value) {
    //lien récursif vers même fonction si est un répertoire
    if (is_dir($value)) {
        echo "\t\t\t<div class='folder'>\n";
        echo "\t\t\t\t".'<li><a href="index.php?dirName=' . $value . '">' . $value . '</a></li>' . "\n";
    } else {
        echo "\t\t\t<div class='file'>\n";
        echo "\t\t\t\t".'<li><a href="' . $value . '">' . $value . '</a></li>' . "\n";
    }
    echo "\t\t\t</div>";
}
 ?>
    </ul>
    </body>
</html>
