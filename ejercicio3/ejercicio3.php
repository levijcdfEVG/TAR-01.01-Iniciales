<!--  Levi Josué Candeias de Figueiredo  -->
<?php
$n = 1;
$maximo = 100; 
include 'factorial.php' 
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
                        <?php echo "TABLA DE FACTORIALES DEL $n AL $maximo"; ?>
                    </th>
                </tr>
               <?php	
				    echo "<tr><td>$n</td><td>$maximo</td></tr>";
					
					factorialNumero($n,$maximo);
				?>
                <tr>
                    <td colspan="2">Levi Josué Candeias de Figueiredo</td>
                </tr>
            </table>
        </div>
    </body>
</html>