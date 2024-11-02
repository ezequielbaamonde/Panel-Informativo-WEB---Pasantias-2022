<?php
    $conexion_altas=mysqli_connect("localhost","root","","panelinformativo") or die("Problemas con la conexión");

    mysqli_query($conexion_altas,"insert into noticias(curso, descripcion) values ('$_REQUEST[curso]' , '$_REQUEST[descripcion]')") or die("Problemas en el select".mysqli_error($conexion));

    mysqli_close($conexion_altas);
    echo "<br><br>La noticia se subió correctamente";
    echo "<hr>";
    echo "<a href='gestionNoticias.html'><u>Volver a Gestión de Noticias.</u></a><br><br>";
    echo "<a href='panel.php'><u>Redirigir al Panel Informativo</u></a>";
    //Impresión

?>