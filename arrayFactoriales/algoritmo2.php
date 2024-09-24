<?php 
    function calcularFactorial($numero) {
        $factorial = 1; // Inicializamos el factorial en 1 para cada número
        if ($numero == 0) {
            return $factorial;
        }
        for ($i = 1; $i <= $numero; $i++) { 
            $factorial *= $i; // Calculamos el factorial
        }
        return $factorial;
    }
?>