<?php
require_once('../Models/cls_jugador.model.php');
$Jugadores = new Clase_jugadores;
switch ($_GET["op"]) {
    case 'todos':
        $datos = array(); //defino un arreglo
        $datos = $Jugadores->todos(); //llamo al modelo de usuarios e invoco al procedimiento todos y almaceno en una variable
        while ($fila = mysqli_fetch_assoc($datos)) { //recorro el arreglo de datos
            $todos[] = $fila;
        }
        echo json_encode($todos); //devuelvo el arreglo en formato json
        break;
   /* case "uno":
        $NJugador = $_POST["NJugador"]; //defino una variable para almacenar el id del usuario, la variable se obtiene mediante POST
        $datos = array(); //defino un arreglo
        $datos = $Jugadores->uno($NJugador); //llamo al modelo de usuarios e invoco al procedimiento uno y almaceno en una variable
        $uno = mysqli_fetch_assoc($datos); //recorro el arreglo de datos
        echo json_encode($uno); //devuelvo el arreglo en formato json
        break; */
    case 'insertar':
        $Nombre = $_POST["Nombre"];
        $Apellido = $_POST["Apellido"];
        $NJugador = $_POST["NJugador"];
        $Edad = $_POST["Edad"];
        $Rol = $_POST["Rol"];
        $datos = array(); //defino un arreglo
        $datos = $Jugadores->insertar($Nombre, $Apellido, $NJugador, $Edad, $Rol); //llamo al modelo de usuarios e invoco al procedimiento insertar
        echo json_encode($datos); //devuelvo el arreglo en formato json
        break;
        case 'actualizar':
            $Nombre = $_POST["Nombre"];
            $Apellido = $_POST["Apellido"];
            $NJugador = $_POST["NJugador"];
            $Edad = $_POST["Edad"];
            $Rol = $_POST["Rol"];
    
            $datos = array(); //defino un arreglo
            $datos = $Jugadores->actualizar($Nombre, $Apellido, $NJugador, $Edad, $Rol); //llamo al modelo de usuarios e invoco al procedimiento actual
            echo json_encode($datos); //devuelvo el arreglo en formato json
            break;
        case 'eliminar':
            $Edad = $_POST["Edad"]; //defino una variable para almacenar el id del usuario, la variable se obtiene mediante POST
            $datos = array(); //defino un arreglo
            $datos = $Jugadores->eliminar($Edad); //llamo al modelo de usuarios e invoco al procedimiento uno y almaceno en una variable
            echo json_encode($uno); //devuelvo el arreglo en formato json
            break;
}
