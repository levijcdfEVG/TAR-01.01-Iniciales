<?php 
    // Función que calcula los factoriales desde $n hasta $maximo
    function factorialNumero($n, $maximo){
        // Itera desde el número inicial $n hasta $maximo
		for($numero = $n; $numero <= $maximo; $numero++) {
            $factorial = 1;  // Inicializa el factorial en 1 para cada número
            // Calcula el factorial del número actual
            for($i = $numero; $i > 1; $i--) {
                $factorial *= $i; // Multiplica para obtener el factorial
            }
            // Muestra el número y su factorial en una fila de la tabla
			echo "<tr><td>$numero</td><td>$factorial</td></tr>";
		}
	}
?>
