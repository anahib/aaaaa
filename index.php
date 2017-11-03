<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gestion de Alumnos</title>
    <link rel="shortcut icon" type="image/x-icon" href="taller.png">
    
    <!-- Estilos -->
    <link href="css/bootstrap.css" rel="stylesheet">
   
</head>
<body>

<div class="principal">
        <div id="bloque_izquierdo" class="col-sm-8">
        <img style ="width:900px;height:600px"src="taller.png" alt="imagen">
        
        </div> 

        <div id="bloque_derecho" class="col-sm-4">
        <header><h2>Gestion de Alumnos</h2></header>
            <h3>Menu de Opciones:</h3>
                <ul>
                    <li> <h3><a href="alumno_nuevo.php">Agregar nuevo alumno</a></h3></li>
                    <li> <h3><a href="alumno_gestion.php">Mostrar listado de alumnos</a></h3></li>
                </ul>
        </div>
</div>



    <div class="contenedor-principal">
        <div class="container">
            <?php
            //incluir todo el codigo del autor nuevo
                // include 'autor_nuevo.php';
            ?>
        </div>
    </div>
    
</body>
</html>
