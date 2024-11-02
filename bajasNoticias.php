<?php
    $conexion_bajas = mysqli_connect("localhost", "root", "", "panelinformativo") or die("Problemas con la conexión");
    $registros = mysqli_query($conexion_bajas, "select id_noticias from noticias where id_noticias='$_REQUEST[id_noticias]'") or die("Problemas en el select." . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion_bajas, "delete from noticias where id_noticias='$_REQUEST[id_noticias]'") or die("Problemas en el select:" . mysqli_error($conexion_bajas));
        echo "La baja de la noticia se realizo con éxito.";
        echo "<hr>";
        echo "<a href='gestionNoticias.html'><u>Volver a Gestión de Noticias.</u></a><br><br>";
        echo "<a href='panel.php'><u>Redirigir al Panel Informativo.</u></a>";
    } else {
        echo "No existe una noticia con ese codigo.";
        echo "<br>";
        echo "<a href='gestionNoticias.html'><u>Volver a Gestión de Noticias.</u></a><br><br>";
    }
mysqli_close($conexion_bajas);