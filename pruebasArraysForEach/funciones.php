<?php 
    // Función para visualizar los elementos de un array usando un bucle for
    function visualizarArray($array){
        // Itera a través del array utilizando un bucle for
        for ($i = 0; $i < count($array); $i++) { 
            echo "$array[$i] <br/>"; // Muestra el elemento actual seguido de un salto de línea
        }
    }
    
    // Función para visualizar los elementos de un array usando foreach
    function visualizarArrayForEach($array){
        // Itera a través del array utilizando un bucle foreach
        foreach ($array as $color) {
            echo $color . "<br>"; // Muestra cada color seguido de un salto de línea
        }
    }

    // Función para calcular el factorial de un número
    function calcularFactorial($numero) {
        $factorial = 1; // Inicializa la variable factorial en 1
    
        // Si el número es 0, el factorial es 1
        if ($numero == 0) {
            return 1;
        }
        
        // Calcula el factorial multiplicando los números desde 1 hasta el número dado
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i; // Multiplica para obtener el factorial
        }
    
        return $factorial; // Devuelve el resultado del factorial
    }
    
?>
