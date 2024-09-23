<?php 
    function factorialNumero($enterMin, $enterMax){
        $arrayFactorial = array();
        
        for($numero = $enterMin; $numero <= $enterMax; $numero++) {
            $factorial = 1;  
            for($i = $numero; $i > 1; $i--) {
                $factorial *= $i;
            }
            $arrayFactorial[$numero] = $factorial;
        }

        return $arrayFactorial;
    }
?>
