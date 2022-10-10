<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de asignaturas - Pedro Espigares</title>
    <style type="text/css">
        form{
            background-color: #F9F9F9;
            padding: 2%;
            margin-left: 550px;
            margin-right: 550px;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            border-radius: 15px;
        }

        input[type=text]{
            width: 250px;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Consulta de asignaturas - Pedro Espigares</h1></br>

    <!-- Formulario para sacar el código elegido por el usuario -->

    <form action="" method="GET" style="text-align:center;">
        <label style="display: inline-block;">Buscar por código: </label>
        <input type="text" name="busquedaCodigo"/>
        <input type="submit" value="Enviar"/>
    </form>


    <?php
        include("datosCentro.php");


        // Busqueda de código de asignatura dentro del array de datos

        if(isset($_GET["busquedaCodigo"])){
            foreach($datos as $asignatura){
                if($asignatura["codigo"] == $_GET["busquedaCodigo"]){
                    $asignaturaElegida = $asignatura;
                }
            }
        }


        if(isset($asignaturaElegida)){
            $profesorado = $asignaturaElegida["profesores"];
            $profesoradoTitular = $profesorado["titulares"];
            $profesoradoEnPracticas = $profesorado["practicas"];
        }

        // Guardo en un array aparte los codigos de las asignaturas

        $codigosAsignaturas = array();
        foreach($datos as $asignatura){
            array_push($codigosAsignaturas, $asignatura["codigo"]);
        }

        // Meto en la variable $posicion la posicion actual del codigo de la asignatura elegida dentro del array de codigos de asignaturas

        if(isset($asignaturaElegida))
            $posicion = array_search($asignaturaElegida["codigo"],$codigosAsignaturas);

    ?>


    <!-- Formulario para el display de la info de la asignatura y profesores;  -->

    <br/><br/>
    <form action="" method="GET" style="text-align:center;">
        <label>Código: </label>
        <input type="text" name="codigo"

        <?php
        if(isset($asignaturaElegida["codigo"])){
            echo "value="."'".$asignaturaElegida["codigo"]."'";
        }
        ?> disabled/> 

        <br/><br/>

        <label>Nombre: </label>
        <input type="text" name="nombre"

        <?php
        if(isset($asignaturaElegida["nombre"])){
        echo "value="."'".$asignaturaElegida["nombre"]."'";
        }
        ?> disabled/>

        <br/><br/>

        <label>Duración: </label>
        <input type="text" name="duracion"

        <?php
        if(isset($asignaturaElegida["duracion"])){
            echo "value="."'".$asignaturaElegida["duracion"]."h"."'";
        }
        ?> disabled/>

        <br/><br/>
        
        <label>Tipo: </label>

        <?php

        // Comprueba el tipo de la asignatura y representa los radio con el atributo checked en el que corresponda

        if(isset($asignaturaElegida["tipo"])){
            if($asignaturaElegida["tipo"] == "troncal"){
                echo '<input type="radio" name="tipo" value="troncal" checked disabled/>';
                echo '<label>Troncal</label>';
                echo '<input type="radio" name="tipo" value="obligatoria" disabled/>';
                echo '<label>Obligatoria</label>';
                echo '<input type="radio" name="tipo" value="optativa" disabled/>';
                echo '<label>Optativa</label>';
            }
            elseif($asignaturaElegida["tipo"] == "obligatoria"){
                echo '<input type="radio" name="tipo" value="troncal" disabled/>';
                echo '<label>Troncal</label>';
                echo '<input type="radio" name="tipo" value="obligatoria" checked disabled/>';
                echo '<label>Obligatoria</label>';
                echo '<input type="radio" name="tipo" value="optativa" disabled/>';
                echo '<label>Optativa</label>';
            }
            elseif($asignaturaElegida["tipo"] == "optativa"){
                echo '<input type="radio" name="tipo" value="troncal" disabled/>';
                echo '<label>Troncal</label>';
                echo '<input type="radio" name="tipo" value="obligatoria" disabled/>';
                echo '<label>Obligatoria</label>';
                echo '<input type="radio" name="tipo" value="optativa" checked disabled/>';
                echo '<label>Optativa</label>';
            }
        }
        else{
            echo '<input type="radio" name="tipo" value="troncal" disabled/>';
            echo '<label>Troncal</label>';
            echo '<input type="radio" name="tipo" value="obligatoria" disabled/>';
            echo '<label>Obligatoria</label>';
            echo '<input type="radio" name="tipo" value="optativa" disabled/>';
            echo '<label>Optativa</label>';
        }
        ?>
        
        <br/><br/>
        <label>Profesores Titulares:</label>
        <label style="margin-left:50px;">Profesores de Prácticas:</label><br/>
        <select name="prof_titulares" multiple="multiple" size="5">
            <?php
                foreach($profesoradoTitular as $datosProfesorado){
                    echo "<option>".$datosProfesorado["nombre"]." ".$datosProfesorado["apellidos"]."</option>";
                }
            ?>
        </select>
        
        <select name="prof_practicas" multiple="multiple" size="5" style="margin-left:50px;">
            <?php
                foreach($profesoradoEnPracticas as $datosProfesorado){
                    echo "<option>".$datosProfesorado["nombre"]." ".$datosProfesorado["apellidos"]."</option>";
                }
            ?>
        </select>
        </br></br>

        <!-- Utilizo enlaces e inputs tipo button para que la URL sea la misma pero que cambie el valor busquedaCodigo al siguiente
            o anterior del actual -->

        <a <?php
        if(isset($asignaturaElegida)){
            if($posicion != 0)
                echo 'href=./index.php?busquedaCodigo='.$codigosAsignaturas[$posicion - 1];
            else
                echo 'href=./index.php?busquedaCodigo='.$codigosAsignaturas[0];
        }
        ?>>
            <input type="button" value="<-- Anterior">
        </a>
        &nbsp;
        <a <?php
        if(isset($asignaturaElegida)){
            if($posicion != count($datos) - 1)
                echo 'href=./index.php?busquedaCodigo='.$codigosAsignaturas[$posicion + 1];
            else
                echo 'href=./index.php?busquedaCodigo='.$codigosAsignaturas[count($datos) - 1];
        }
        ?>>
            <input type="button" value="Siguiente -->">
        </a>
    </form>
</body>
</html>