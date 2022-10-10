<?php

// Cargar datos de array en un formulario es cambiando el valor value
// Select multilista es con multiple y size es para el numero


$datos = array(
    // Array con las asignaturas

    // Array DWES

    array(
        "codigo" => "DWES",
        "nombre" => "Desarrollo Web en Entorno Servidor",
        "duracion" => 168,
        "tipo" => "obligatoria",

        "profesores" => array(
            "titulares" => array(
                array(
                    "DNI" => "78589456L",
                    "nombre" => "Juan Carlos",
                    "apellidos" => "Jiménez Masegosa"
                ),
				array(
                    "DNI" => "78589456L",
                    "nombre" => "Juan Carlos",
                    "apellidos" => "Jiménez Masegosa"
                ),
                array(
                    "DNI" => "78509178J",
                    "nombre" => "Paqui",
                    "apellidos" => "Molina Álvarez"
                )
            ),
            "practicas" =>array(
                array(
                    "DNI" => "90876509K",
                    "nombre" => "Eleuterio",
                    "apellidos" => "Sánchez Gutiérrez"
                ),
                array(
                    "DNI" => "67345618I",
                    "nombre" => "Belén",
                    "apellidos" => "Callejón Prieto"
                )
            )
        )
    ),

    // Array DWEC

    array(
        "codigo" => "DWEC",
        "nombre" => "Desarrollo Web en Entorno Cliente",
        "duracion" => 126,
        "tipo" => "troncal",

        "profesores" => array(
            "titulares" => array(
                array(
                    "DNI" => "23224781Q",
                    "nombre" => "José",
                    "apellidos" => "Piñero Berbel"
                )
            ),
            "practicas" =>array(
                array(
                    "DNI" => "89756345K",
                    "nombre" => "Pablo",
                    "apellidos" => "González De la Sierra"
                )
            )
        )
    ),

    // Array DIW

    array(
        "codigo" => "DIW",
        "nombre" => "Diseño de Interfaces Web",
        "duracion" => 126,
        "tipo" => "obligatoria",

        "profesores" => array(
            "titulares" => array(
                array(
                    "DNI" => "78509178J",
                    "nombre" => "Paqui",
                    "apellidos" => "Molina Álvarez"
                ),
                array(
                    "DNI" => "56784512K",
                    "nombre" => "Pedro",
                    "apellidos" => "Pérez De Luque"
                )
            ),

            "practicas" => array(
                array(
                    "DNI" => "67345618I",
                    "nombre" => "Belén",
                    "apellidos" => "Callejón Prieto"
                )
            )
        )
    ),

    // Array DAW
    
    array(
        "codigo" => "DAW",
        "nombre" => "Despliegue de Aplicaciones Web",
        "duracion" => 126,
        "tipo" => "optativa",
        
        "profesores" => array(
            "titulares" => array(
                array(
                    "DNI" => "65890324Y",
                    "nombre" => "Alicia",
                    "apellidos" => "Bénitez Yañez"
                )
            ),

            "practicas" =>array(
                array(
                    "DNI" => "67345618I",
                    "nombre" => "Belén",
                    "apellidos" => "Callejón Prieto"
                ),
                array(
                    "DNI" => "56784512K",
                    "nombre" => "Pedro",
                    "apellidos" => "Pérez De Luque"
                )
            )
        )
        ),

        // Array EEIE

        array(
            "codigo" => "EEIE",
            "nombre" => "Empresa e Iniciativa Emprendedora",
            "duracion" => 84,
            "tipo" => "optativa",
            
            "profesores" => array(
                "titulares" => array(
                    array(
                        "DNI" => "89576324R",
                        "nombre" => "José Manuel",
                        "apellidos" => "Aranda Rodríguez"
                    )
                ),
    
                "practicas" =>array(
                    array(
                        "DNI" => "76589034L",
                        "nombre" => "María Dolores",
                        "apellidos" => "Carmona Delgado"
                    )
                )
            )
        )
)
?>