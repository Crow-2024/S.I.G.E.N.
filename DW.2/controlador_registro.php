<?php
 // Verifica si el formulario ha sido enviado y si el campo "registro" no está vacío.
    if(!empty($_POST["registro"])){
        // Verifica si alguno de los campos del formulario está vacío.
        if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["email"]) || empty($_POST["contraseña"]) || empty($_POST["peso"]) || empty($_POST["altura"]) || empty($_POST["edad"]) || empty($_POST["telefono"]) || empty($_POST["direccion"])){
            echo "Uno de los campos esta vacío";
        } else {
            // Si todos los campos están completos, los valores de cada campo se asignan a variables.
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $email=$_POST["email"];
            $contraseña=$_POST["contraseña"];
            $peso=$_POST["peso"];
            $altura=$_POST["altura"];
            $edad=$_POST["edad"];
            $telefono=$_POST["telefono"];
            $direccion=$_POST["direccion"];

            // Realiza una consulta SQL para insertar los datos en la tabla 'usuario'.
            $sql=$conexion->query(" insert into usuario(nombre, apellido, email, contraseña, peso, altura, edad, telefono, direccion)values('$nombre', '$apellido', '$email', '$contraseña', '$peso', '$altura', '$edad', '$telefono', '$direccion') ");
               // Verifica si la consulta SQL se ejecutó correctamente (si la inserción fue exitosa).
            if ($sql == 1){
                // Si la inserción fue exitosa, muestra un mensaje indicando que el usuario fue registrado.
                echo "usuario registrado correctamente";
            } else {
                // Si hubo un error en la inserción, muestra un mensaje de error.
                echo "Error al registrar usuario";
            }
        }
    }

?>