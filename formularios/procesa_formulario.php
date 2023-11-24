<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
   
    // Realiza el procesamiento necesario aquí
    // Por ejemplo, puedes imprimir la información o guardarla en una base de datos
    echo "Nombre: " . $nombre . "<br>";

}

?>