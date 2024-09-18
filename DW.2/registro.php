<?php
// Crea una nueva conexión a la base de datos MySQL utilizando la clase 'mysqli'.
// Parámetros: ('servidor', 'usuario', 'contraseña', 'nombre_base_de_datos').
$conexion=new mysqli('localhost', 'root', '', 'db_crow');

 // Establece el conjunto de caracteres que utilizará la conexión, en este caso UTF-8.
// Esto es importante para manejar correctamente caracteres especiales o acentos.
$conexion->set_charset('utf8');

// Incluye el archivo "controlador_registro.php" en este script.
// El archivo controlador_registro.php contiene el código de registro del usuario.
// Este comando inserta el contenido de "controlador_registro.php" en el punto donde se encuentra la instrucción.
include("controlador_registro.php");
?>