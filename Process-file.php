<?php

$directory = './file';
$tmp_file = $_FILES["file"]["tmp_name"];
$name = basename($_FILES["file"]["name"]);

if (move_uploaded_file($tmp_file, "$directory/$name")) {
    echo "Archivo subido con éxito.";
} else {
    echo "Error al subir el archivo.";
}
