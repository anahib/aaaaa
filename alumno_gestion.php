
<title>Listado de Alumnos</title>
<link rel="shortcut icon" type="image/x-icon" href="taller.png">
<?php
    require_once "controladores/alumnoController.php";
    //crea una instancia
    $alumnos = new alumnoController();
    $resultado = $alumnos->ListarAlumnos();
    
?>
<!-- agrega el estilo de bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<div>
    <table class ="table table-striped table table-condensed ">
        <thead>
            <tr>
            <!-- tr son los nombres de las columnas -->
                <th>Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>

            </tr>
        </thead>
        <tbody>
            <header> <h2>Alumnos</h2></header>
        <?php
        //recorre el array para traer la info de la bd
            while($array=$resultado ->fetch_assoc()){ ?>
              
               <tr>             
                   <td><?php echo $array["nombre"]; ?></td>
                   <td><?php echo $array["apellido"]; ?></td>
                   <td><?php echo $array["dni"]; ?></td>
                   <form method ="POST">
                
                    <td>
                        <input type="hidden" name="id_a" id="id_a" value="<?php echo $array["id_alumno"]; ?>">
                        <input type="button" value="Modificar" class="btn btn-warning"  onclick="this.form.action='alumno_update.php'; this.form.submit()"> 
                        <!-- onclick permite enviar el formulario, es un evento -->
                        <input type="button" value="Eliminar" class="btn btn-danger"  onclick="this.form.submit()">
                    </td>
                   </form>
             
            <?php } ?>
            </tr>
            <!-- </tr>
            <tr class="danger">
                <td>Ponce</td>
                <td>Maximiliano</td>
            </tr>
            <tr class ="success">
                <td>Gomez</td>
                <td>Maria</td>
            </tr> -->
        </tbody>
    </table>
</div>

<?php
$resultado = $alumnos->eliminar();
?>
