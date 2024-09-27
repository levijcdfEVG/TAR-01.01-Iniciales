<?php 
    // Función que calcula el factorial de los números en el rango de $enterMin a $enterMax
    function factorialNumero($enterMin, $enterMax){
        // Itera desde el número mínimo hasta el número máximo
        for($numero = $enterMin; $numero <= $enterMax; $numero++) {
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
