<?php
// Obtiene el email y la contraseña enviados desde un formulario mediante el método POST.
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

// Inicia una nueva sesión o reanuda la sesión existente.
session_start();
// Almacena el email en la sesión, lo que permite mantener la sesión iniciada para este usuario.
$_SESSION['email'] = $email;

// Establece la conexión a la base de datos MySQL usando la función mysqli_connect.
// Los parámetros son: ('servidor', 'usuario', 'contraseña', 'nombre_base_de_datos').
$conexion = mysqli_connect("localhost","root","","db_crow");

// Consulta SQL para verificar si existe un usuario con el email y la contraseña proporcionados.
$consulta = "SELECT * FROM usuario where  email = '$email' and contraseña = '$contraseña'";

// Ejecuta la consulta SQL en la base de datos y guarda el resultado.
$resultado = mysqli_query($conexion, $consulta);

// Obtiene el número de filas devueltas por la consulta.
// Si devuelve 1 o más filas, significa que existe un usuario con las credenciales proporcionadas.
$filas = mysqli_num_rows($resultado);

// Verifica si la consulta devolvió al menos una fila, lo que indica que las credenciales son válidas.
if($filas){
    // Si se encuentran coincidencias, redirige al usuario a la página "Inicio.html".
    header("location:Inicio.html");

}else{
    ?>
    <?php
    // Si las credenciales no son válidas, incluye la página "Inscribirse.html" y muestra un mensaje de error.
    include("Inscribirse.html");
    ?>
    <h1 class="bad">ERROR EN AUTENTIFICACION</h1>
    <?php
}
// Libera los resultados de la consulta para liberar memoria.
mysqli_free_result($resultado);

// Cierra la conexión con la base de datos.
mysqli_close($conexion);