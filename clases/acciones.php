<?php
    class acciones{

        function agregarNave($datos){
            $obj= new conectar();
			$conexion=$obj->conexion();
			$tildes = $conexion->query("SET NAMES 'utf8'");

            $crearNave = "INSERT INTO naves(nombre, actividad, pais, tipo, combustible, descripcion) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
            return mysqli_query($conexion,$crearNave);
        }
    }
