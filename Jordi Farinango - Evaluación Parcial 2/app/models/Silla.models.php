<?php
//TODO:Modelo de sillas
//Requerimientos
require_once('../../config/conexion.php');

class Silla{
    public function todos(){
        $connexion = new ClaseConexion();
        $connexion = $connexion->ProcedimientoConectar();
        $cadena ="select * from Sillas";
        $datos = mysqli_query($connexion,$cadena);
        return $datos;
    }
    public function uno($idSillas){
        $connexion = new ClaseConexion();
        $connexion = $connexion->ProcedimientoConectar();
        $cadena ="select * from Sillas where idSillas=$idSillas";
        $datos = mysqli_query($connexion,$cadena);
        return $datos;
    }
    public function insertar($Material, $Asiento, $Tamaño, $Diseño, $Numeropatas, $Color){
        $connexion = new ClaseConexion();
        $connexion = $connexion->ProcedimientoConectar();
        $cadena = "Insert into Sillas(Material, Asiento, Tamaño, Diseño, Numeropatas, Color) values('$Material', '$Asiento', '$Tamaño', '$Diseño', '$Numeropatas', '$Color')";
        if(mysqli_query($connexion, $cadena)){
            return 'ok';
        }else{
            return mysqli_error($connexion);
        }
    }
    public function actualizar($Material, $Asiento, $Tamaño, $Diseño, $Numeropatas, $Color){
        $connexion = new ClaseConexion();
        $connexion = $connexion->ProcedimientoConectar();
        $cadena = "update Sillas set Material='$Material', Asiento='$Asiento', Tamaño='$Tamaño', Diseño='$Diseño', Numeropatas='$Numeropatas' where idSillas=$idSillas";
        if(mysqli_query($connexion, $cadena)){
            return 'ok';
        }else{
            return mysqli_error($connexion);
        }
    }
    public function eliminar($idSillas){
        $connexion = new ClaseConexion();
        $connexion = $connexion->ProcedimientoConectar();
        $cadena = "delete from Sillas where idSillas=$idSillas";
        if(mysqli_query($connexion, $cadena)){
            return true;
        }else{
            return mysqli_error($connexion);
        }
    }

}

?>