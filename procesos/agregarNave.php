<?php
    require_once "../clases/conexion.php";
    require_once "../clases/acciones.php";

    $obj= new acciones();

    $datos=array(
        $_POST['nombre'],
        $_POST['actividad'],
        $_POST['pais'],
        $_POST['tipo'],
        $_POST['combustible'],
        $_POST['descripcion']
    );



echo $obj->agregarNave($datos);
?>