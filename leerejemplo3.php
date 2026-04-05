<?php
$xml = simplexml_load_file("colores.xml");

foreach ($xml->color as $color) {
    echo "El color " . $color->nombre . " tiene el código hexadecimal " . $color->codigo_hexadecimal . "<br>";
}
?>