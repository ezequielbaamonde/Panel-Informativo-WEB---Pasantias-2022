<?php
    session_start();

    $nombre = $_POST['usuario'];
    $password = $_POST['contraseña'];

    // CONEXION A LA BD
    
    $conn= mysqli_connect("localhost", "root", "", "panelinformativo");
    

    // añadiría un limit 1 a la consulta pues solo esperamos un registro
    $consulta = mysqli_query ($conn, "SELECT * FROM administrador WHERE usuario = '$nombre' AND contraseña = '$password'");  

    // esto válida si la consulta se ejecuto correctamente o no
    // pero en ningún caso válida si devolvió algún registro
    if(!$consulta){ 
        echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error " . 
        mysqli_error($mysqli);
        // si la consulta falla es bueno evitar que el código se siga ejecutando
        exit;
    } 

    // validemos pues si se obtuvieron resultados 
    // Obtenemos los resultados con mysqli_fetch_assoc
    // si no hay resultados devolverá NULL que al convertir a boleano para ser evaluado en el if será FALSE
    if($usuario = mysqli_fetch_assoc($consulta)) {
        // echo "El usuario y la contaseña son correctas";
        //redireccionar a FORMULARIO 
        header("Location: gestionNoticias.html");
    } else {
        echo "<script>alert('Usuario incorrecto o no existe')</script>";
        echo "<a href='sigin.html'><u>Reintentar</u></a>";
        // header("Location: sigin.html");
        // echo "<script>alert('Reintentar')</script>";
        // die();
    }

?>