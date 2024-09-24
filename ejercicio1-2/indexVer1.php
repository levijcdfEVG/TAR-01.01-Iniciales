<!--  Levi Josué Candeias de Figueiredo  -->
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
                    
                    for($numero = 1; $numero <= 10; $numero++) {
                        $factorial = 1;  
                        for($i = $numero; $i > 1; $i--) {
                            $factorial *= $i;
                        }
						echo "<tr><td>$numero</td><td>$factorial</td></tr>";
                    }
               ?>
                <tr>
                    <td colspan="2">Levi Josué Candeias de Figueiredo</td>
                </tr>
            </table>
        </div>
    </body>
</html>