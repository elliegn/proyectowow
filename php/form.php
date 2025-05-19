<?php

$htmlFile = '..\html\form.html';
if (file_exists($htmlFile)) {

    include $htmlFile;
} else {

    echo("No cargaron el archivo 😢");

}
?>