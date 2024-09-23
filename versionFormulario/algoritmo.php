<?php 
    function factorialNumero($enterMin, $enterMax){
        for($numero = $enterMin; $numero <= $enterMax; $numero++) {
            $factorial = 1;  
            for($i = $numero; $i > 1; $i--) {
            $factorial *= $i;
            }
            echo "<tr><td>$numero</td><td>$factorial</td></tr>";
        }
    }
?>
