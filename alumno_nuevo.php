<link href="css/bootstrap.css" rel="stylesheet">
<title>Nuevo Alumno</title>
<link rel="shortcut icon" type="image/x-icon" href="taller.png">

<?php
    require_once "controladores/alumnoController.php";
    $alumnos = new alumnoController();
    $alumnos->guardarAlumno();
?>
<!-- Ingreso de datos del alumno -->
<div class="principal">

    <div id="bloque_izquierdo col-sm-9">
        <div class="col-sm-4">
            <h2 >Datos de Alumno </h2>
            <form id="myForm" method="POST">
                 <div class="input-group">
                    <label>Nombre del alumno:</label>        
                    <input type="text" class="form-control" name="nomAlumno" placeholder="Nombre" value="">
                 </div>
                 <br>

                <div class="input-group">
                    <label>Apellido del alumno:</label>
                    <input type="text" class="form-control" name="apelAlumno" placeholder="Apellido"  value="">
                </div>
                <br>
      
                <div class="input-group">
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
    </div>

    <div id="bloque_derecho col-sm-3">
        <img style ="width:250px;height:250px" src="perfil.png" alt="imagen de perfil">
    </div>

</div>

