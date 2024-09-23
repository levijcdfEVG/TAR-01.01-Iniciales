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
        <div class="tableContainer">
            <table>
                <tr>
                    <?php
                      require 'algoritmo.php';
                      $enterMin = $_GET['enterMin'];
                      $enterMax = $_GET['enterMax'];
                      echo '<th colspan="2" id="tableTitle">TABLA DE FACTORIALES DEL ' . $enterMin . ' AL ' . $enterMax . '</th>';
                    ?>  
                </tr>
                <tr>
                    <td>NÚMERO</td>
                    <td>FACTORIAL</td>
                </tr>
                    <?php
                         // Imprimir el array para comprobar los resultados
                        for ($i=0; $i < 9; $i++) { 
                            echo "$arrayPruebas[$i] <br>";
                        }
                    ?>
                <tr>
                    <td colspan="2">Levi Josué Candeias de Figueiredo</td>
                </tr>
            </table>
        </div>
    </body>
</html>