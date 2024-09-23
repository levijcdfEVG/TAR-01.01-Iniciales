  <?php 
    function factorialNumero($n,$maximo){
		for($numero = $n; $numero <= $maximo; $numero++) {
            $factorial = 1;  
            for($i = $numero; $i > 1; $i--) {
                $factorial *= $i;
            }
			echo "<tr><td>$numero</td><td>$factorial</td></tr>";
		}
	}
?>