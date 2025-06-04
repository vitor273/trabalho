<?php
$generos = ['o','i','u','y'];
$json = json_encode($generos, JSON_PRETTY_PRINT);
file_put_contents("genero.json", $json);
?>
