<link href="css/bootstrap.css" rel="stylesheet">
<title>Modificar Alumno</title>
<link rel="shortcut icon" type="image/x-icon" href="taller.png">

<?php
    require_once "controladores/alumnoController.php";
    $alumnos = new alumnoController();
    $resultado=$alumnos->buscarAlumnos();
    
?>
<div class="col-sm-6">
    <h2 >Datos de alumno </h2>
    <form id="myForm" method="POST">
    <input type="hidden" name="id_modificar" value="<?php echo $resultado["id_alumno"]?>">
        <div class="input-group">
            <label>Apellido del alumno:</label>
        
            <input type="text" class="form-control" name="nomAlumno" placeholder="Nombre" value="<?php echo $resultado["nombre"] ?>">
        </div>
        <br>
        <div class="input-group">
            <label>Nombre del autor:</label>
            <input type="text" class="form-control" name="apelAlumno" placeholder="Apellido"  value="<?php echo $resultado["apellido"] ?>">
        </div>
        <br>

        <div class="input-group col-sm-6">
            <label>DNI del alumno:</label>
            <input type="text" class="form-control" name="dniAlumno" placeholder="DNI"  value="">
        </div>
      
        <br>
        <div class="btn-group">
            <!-- Enviar El Formulario -->
            <button class="btn btn-success" type="submit" >Guardar</button>
        </div>
    </form>
</div>

<?php
    $alumnos = $alumnos->actualizarAlumno();
?>