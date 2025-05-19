<?php

$htmlFile = '..\html\sorteo.html';
if (file_exists($htmlFile)) {

    include $htmlFile;
} else {

    echo("No cargaron el archivo 😢");

}
?>