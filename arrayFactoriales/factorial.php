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
            require 'algoritmo2.php';
            for($i = 0; $i <= count($arrayPruebas)-1; $i++) { 
               echo "<tr><td>$i</td><td>$arrayPruebas[$i]</td></tr>";
            }
            // print_r($arrayPruebas); Esto sirve para ver todos los valores del array y no se suele utilzar en las aplicaciones que se van a utilizar por los usuarios
        ?>
        </table>    
        </div>
    </body>
</html>