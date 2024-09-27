<!--  Levi Josué Candeias de Figueiredo  -->
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
                    <th colspan="2" id="tableTitle">TABLA DE FACTORIALES DEL 1 AL 10</th>
                </tr>
                <tr>
                    <td>NÚMERO</td>
                    <td>FACTORIAL</td>
                </tr>
                <?php 
                    $numero = 1; // Inicializa el número en 1
					// Bucle while para calcular el factorial de 1 a 10
					while($numero <= 10){
						$factorial = $numero; // Comienza con el número actual
						$i = $numero; // Inicializa $i con el número actual
						// Bucle while para calcular el factorial
						while($i > 1){
							$factorial *= $i; // Multiplica para obtener el factorial
							$i--; // Decrementa $i
						}
						
						// Muestra el número y su factorial en una fila de la tabla
						echo "<tr><td>$numero</td><td>$factorial</td></tr>";
						$numero++; // Incrementa el número para la siguiente iteración
					}
               ?>
                <tr>
                    <td colspan="2">Levi Josué Candeias de Figueiredo</td>
                </tr>
            </table>
        </div>
    </body>
</html>
