<!--  Levi Josué Candeias de Figueiredo  -->
<?php 
	// Función que calcula y muestra los factoriales del número $n al 10
	function factorialNumero($n){
		// Itera desde $n hasta 10
		for($numero = $n; $numero <= 10; $numero++) {
            $factorial = 1;  
            // Calcula el factorial del número actual
            for($i = $numero; $i > 1; $i--) {
                $factorial *= $i;
            }
			// Muestra el número y su factorial en una fila de la tabla
			echo "<tr><td>$numero</td><td>$factorial</td></tr>";
        }
	}
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
                    <th colspan="2" id="tableTitle">TABLA DE FACTORIALES DEL 1 AL 10</th>
                </tr>
                <tr>
                    <td>NÚMERO</td>
                    <td>FACTORIAL</td>
                </tr>
				<?php 
					$n = 1;
					// Llama a la función para generar la tabla de factoriales
					factorialNumero($n);
				?>
                <tr>
                    <td colspan="2">Levi Josué Candeias de Figueiredo</td>
                </tr>
            </table>
        </div>
    </body>
</html>
