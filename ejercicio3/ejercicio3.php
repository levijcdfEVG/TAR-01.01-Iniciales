<!--  Levi Josué Candeias de Figueiredo  -->
<?php
$n = 1; // Inicializa el número inicial para el cálculo de factoriales
$maximo = 100; // Define el número máximo para el cálculo
include 'factorial.php'; // Incluye el archivo que contiene la función para calcular factoriales
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicios Iniciales PHP</title>
        <meta charset="utf-8" />
        <link href="../css/reset.css" rel="stylesheet" />
        <link href="../css/table.css" rel="stylesheet" />
        <link href="../css/mainPage.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Tabla de Factoriales</h1>
        <div class="tableContainer">
            <table>
                <tr>
                     <th colspan="2" id="tableTitle">
                        <?php echo "TABLA DE FACTORIALES DEL $n AL $maximo"; // Muestra el título de la tabla ?>
                    </th>
                </tr>
               <?php	
				    // Muestra la cabecera inicial de la tabla
					echo "<tr><td>$n</td><td>$maximo</td></tr>";
					
					factorialNumero($n, $maximo); // Llama a la función para calcular y mostrar los factoriales
				?>
                <tr>
                    <td colspan="2">Levi Josué Candeias de Figueiredo</td>
                </tr>
            </table>
        </div>
    </body>
</html>
