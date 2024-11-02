<?php
    $conexion = mysqli_connect("localhost","root","","panelinformativo") or die("Problemas con la conexión");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Panel Informátivo Técnica 4</title>
    <link rel="icon" href="LogoEscuela.png">
</head>
<body>
    <div class="contenedor">
        <!-- Caja Superior -->
        <div class="header">
            <p id="fecha_actual"></p>
            <p id="titulo">Escuela de Educación Secundaria Técnica N°4</p>
            <!-- <img src="LogoEscuela.png"> -->
        </div>

        <!-- Video y cuerpo -->
        <div><h2 class="videotitulo">RADIO T4TV</h2></div>
        <iframe width="650" height="375" src="https://www.youtube.com/embed/6sMFEmw8duQ?&autoplay=1" title="Radio Técnica 4" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        

        <!-- Noticias TEC4 -->
        <div class="noticiasTec4">
            <center>
                <h1><u>Noticias Técnica 4</u></h1>
                <table border="1">
                    <tr>
                        <th height="50" width="110">NÚMERO</th>
                        <th height="50" width="110">DIRIGIDO A</th>
                        <th height="50" width="220">COMUNICADO</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM noticias";
                        $result = mysqli_query($conexion, $sql);
                        
                        while($mostrar = mysqli_fetch_array($result)){
                    ?>   
                    <tr>
                        <th height="50" width="110"><?php echo $mostrar['id_noticias']?></th>
                        <th height="50" width="110"><?php echo $mostrar['curso']?></th>
                        <th height="50" width="110"><?php echo $mostrar['descripcion']?></th>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </center>
          
        </div>
    
        <!-- HORA EN TIEMPO REAL JS -->
        <!-- REDES SOCIALES -->
        <div class="footer">
            <div class="footer_title">
                <center><p>Panel Informátivo</p></center>
                
            </div>

            <!-- Tiempo -->
            <ul>
                <li><p id="horas">00:</p></li>
                <li><p id="minutos">00:</p></li>
                <li><p id="segundos">00</p></li>

            </ul>
            
        </div>
        
        
    </div>
    <script src="hora.js"></script>
</body>
<!-- SCRIPT TIME -->

</html>
