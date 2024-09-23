<?php 
    $arrayPruebas = array(); // Inicializar el array vacío

    // Recorremos del 0 al 10 para calcular los factoriales
    for ($i = 0; $i <= 10; $i++) { 
        $factorial = 1; // Inicializamos el factorial en 1 para cada número
        for ($j = 1; $j <= $i; $j++) { 
            $factorial *= $j; // Calculamos el factorial
        }
        $arrayPruebas[$i] = $factorial; // Guardamos el factorial en la posición correspondiente
    }
?>