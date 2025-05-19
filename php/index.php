<?php

$htmlFile = '..\html\index.html';
if (file_exists($htmlFile)) {

    include $htmlFile;
} else {

    echo("No cargaron el archivo 😢");

}
?>