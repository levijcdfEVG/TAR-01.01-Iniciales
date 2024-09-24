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
        <h1>Tabla de Factoriales del 0 al 10</h1>
        <table>
        <?php
            require 'algoritmo.php';
             // Imprimir el array para comprobar los resultados
            for ($i=0; $i < 9; $i++) { 
                echo "<tr><td>$i</td><td>$arrayPruebas[$i]</td></tr>";
            }
        ?>
        </table>    
        </div>
    </body>
</html>