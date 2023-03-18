<?php
//TODO:Controlador de Silla
//TODO: Requerimiento
require_once('../models/Silla.models.php');
//error_reporting(0);
$ClsSilla = new Silla;

switch($_GET['op']){
    //TODO: Obtener todos los registros
    case 'todos':
        $datos = array();
        $datos = $ClsSilla->todos();
        while($fila = mysqli_fetch_assoc($datos)){
            $todos[] = $fila;
        }
        echo json_encode($todos);
        break;
    case 'uno':
        $idSillas = $_POST['idSillas'];
        $datos = $ClsSilla->uno($idSillas);
        $uno = mysqli_fetch_assoc($datos);
        echo json_encode($uno);
        break;
    case 'insertar':
        $Material = $_POST['Material'];
        $Asiento = $_POST['Asiento'];
        $Tamaño = $_POST['Tamaño'];
        $Diseño = $_POST['Diseño'];
        $Numeropatas = $_POST['Numeropatas'];
        $Color = $_POST['Color'];
        $datos = $ClsSilla->insertar($Material, $Asiento, $Tamaño, $Diseño, $Numeropatas, $Color);
        echo json_encode($datos);
        break;
    case 'actualizar':
        $Material = $_POST['Material'];
        $Asiento = $_POST['Asiento'];
        $Tamaño = $_POST['Tamaño'];
        $Diseño = $_POST['Diseño'];
        $Numeropatas = $_POST['Numeropatas'];
        $Color = $_POST['Color'];
        $datos = $ClsSilla->insertar($Material, $Asiento, $Tamaño, $Diseño, $Numeropatas, $Color);
        echo json_encode($datos);
        break;
    case 'eliminar':
        $idSillas = $_POST['idSillas'];
        $datos = $ClsSilla->eliminar($idSillas);
        echo json_encode($datos);
        break;
}
?>