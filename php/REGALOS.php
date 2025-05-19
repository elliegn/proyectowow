<?php

$htmlFile = '..\html\REGALOS.html';
if (file_exists($htmlFile)) {

    include $htmlFile;
} else {

    echo("No cargaron el archivo 😢");

}
?>