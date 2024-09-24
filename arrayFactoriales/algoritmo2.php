<?php 
    function calcularFactorial($numero){
        $arrayPruebas = array(); // Inicializar el array vacío
        
        $factorial = 1; // Inicializamos el factorial en 1 para cada número
        for ($i = 1; $i < $numero; $i++) { 
            $factorial *= $i; // Calculamos el factorial
            
        }
       
        print_r($arrayPruebas);
        return $arrayPruebas;
    }
?>