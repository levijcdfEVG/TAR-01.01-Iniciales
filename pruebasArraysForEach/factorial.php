<!DOCTYPE html>
<html>
    <head>
        <title>Tabla</title>
        <meta charset="utf-8" />
        <link href="../css/reset.css" rel="stylesheet" />
        <link href="../css/table.css" rel="stylesheet" />
        <link href="../css/mainPage.css" rel="stylesheet" />
        <link href="../css/form.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Tabla de Factoriales</h1>
        <table>
        <?php
            require 'funciones.php'; // Incluye el archivo que contiene la función calcularFactorial
            
            // Calcula el factorial de los números del 0 al 9 y los almacena en un array
            for ($i = 0; $i < 10; $i++) { 
                $array[$i] = calcularFactorial($i); // Almacena el resultado del factorial en el array
            }

            // Recorre el array y muestra el índice y el valor del factorial
            foreach ($array as $i => $valor) {
                echo $i . " " . $valor . "<br/>"; // Muestra el número y su factorial
            }
        ?>
        </table>    
        </div>
    </body>
</html>
