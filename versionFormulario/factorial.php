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
                      require 'algoritmo.php'; // Incluye el archivo que contiene la función factorialNumero
                      
                      // Obtiene los valores de los parámetros enterMin y enterMax desde la URL
                      $enterMin = $_GET['enterMin'];
                      $enterMax = $_GET['enterMax'];
                      
                      // Muestra el título de la tabla con el rango de factoriales
                      echo '<th colspan="2" id="tableTitle">TABLA DE FACTORIALES DEL ' . $enterMin . ' AL ' . $enterMax . '</th>';
                    ?>  
                </tr>
                <tr>
                    <td>NÚMERO</td>
                    <td>FACTORIAL</td>
                </tr>
                    <?php	
                        // Muestra el número mínimo y máximo en una fila de la tabla
                        echo "<tr><td>$enterMin</td><td>$enterMax</td></tr>";
                        
                        // Llama a la función factorialNumero para calcular y mostrar los factoriales en el rango
                        factorialNumero($enterMin, $enterMax);
                    ?>
                <tr>
                    <td colspan="2">Levi Josué Candeias de Figueiredo</td> <!-- Pie de página con el nombre del autor -->
                </tr>
            </table>
        </div>
    </body>
</html>
