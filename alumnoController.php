<?php

    require_once "modelos/alumnos.php";
    
    class alumnoController{

        public function ListarAlumnos(){
            $respuesta = alumnos::buscar();
            if($respuesta!=NULL){
                return $respuesta;
            }else{
                echo "<script language='javascript'>alert('No existen autores')</script>";
            }
        }

        public function guardarAlumno(){
            if(isset($_POST["nomAlumno"]) && isset($_POST["apelAlumno"]) && isset($_POST["dniAlumno"])){
                
                $nombre = $_POST["nomAlumno"]; 
                $apellido = $_POST["apelAlumno"]; 
                $dni = $_POST["dniAlumno"];
                $datos = array("nombre"=>$nombre, "apellido"=>$apellido, "dni"=>$dni);
              //  var_dump($datos);die();
               
                $res = alumnos::agregar($datos);
                if($res>=0){
                    if($res==0){
                            //ya existe
                        echo "<script language='javascript'>alert('El alumno ya existe, no se puede ingresar un autor ya existente.');</script>";
                        echo "<script language='javascript'>window.location='index.php'</script>";
                    }
                    else{
                        //=1
                        echo "<script language='javascript'>alert('El alumno se añadió correctamente.')</script>";
                        echo "<script language='javascript'>window.location='index.php'</script>";
                    }
                }else{
                    // = -1
                    echo "<script language='javascript'>alert('Error al añadir alumno, intente nuevamente...')</script>";
                    echo "<script language='javascript'>window.location='index.php'</script>";
                }
            }

        }

        public function buscarAlumnos(){
            if(isset($_POST["id_a"])){
                $id = $_POST["id_a"];
                $res = Alumnos::buscarX($id);
                $array = $res->fetch_assoc();
                if($res==NULL){
                    echo "<script language='javascript'>alert('No existe')</script>";
                    echo "<script language='javascript'>window.location='index.php'</script>";
                }else{
                    return $array;
                }
            }
        }
        public function eliminar(){
            if(isset($_POST['id_a'])){
                $idAlumno = $_POST['id_a'];
              
                $res = alumnos::eliminar($idAlumno);
                if($res>0){
                    echo "<script language='javascript'>alert('Se elimino correctamente el autor, se redireccionará a la página principal')</script>";
                    echo "<script language='javascript'>window.location='index.php'</script>";
                }else{
                    echo "<script language='javascript'>alert('No se pudo eliminar el autor, intente nuevamente')</script>";
                    echo "<script language='javascript'>window.location='index.php'</script>";
                }
            }
        }

        public function actualizarAlumno(){
            if(isset($_POST["id_modificar"])){
               
             
                $id = $_POST["id_modificar"];
                $nombre = $_POST["nomAlumno"]; 
                $apellido = $_POST["apelAlumno"]; 
                $dni = $_POST["dniAlumno"]; 
             
                $alumnoNuevo = array("id"=> $id,"nombre"=>$nombre, "apellido"=>$apellido, "dni"=>$dni);
                
                $res = alumnos::actualizar($alumnoNuevo);
                echo $res;
            }
        }

        public function actualizarAlumnoX($datos){
                $res = alumnos::actualizar($datos);
                echo $res;
        }
    }

?>