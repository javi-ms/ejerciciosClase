<?php
	/* Dado un mes y un año, mostrar el calendario del mes. Marcar el día actual en verde y los
festivos en rojo.*/

    $week = 1;
     for($i=1;$i<=date('t');$i++) {
     	//cambiar Y para el año y m para el mes
        $day_week = date('N', strtotime(date('Y-m').'-'.$i));
        $calendar[$week][$day_week] = $i;
        if ($day_week == 7) { $week++; };
    }
    echo "<a href=\"vercodigo.php?src=5.php\">ver codigo</a><br/>"; 
    echo "<a href=\"indexT2.php\">volver</a><br/>";
        echo "<hr>";
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <table border="1">
        <thead>
            <tr>
                <td>Lunes</td>
                <td>Martes</td>   
                <td>Miércoles</td>   
                <td>Jueves</td>   
                <td>Viernes</td>   
                <td>Sábado</td>   
                <td>Domingo</td>   
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calendar as $days) : ?>
                <tr>
                    <?php for ($i=1;$i<=7;$i++) : ?>
                        <td>
                            <?php echo isset($days[$i]) ? $days[$i] : ''; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endforeach ?>
        </tbody>
        </table> 
    </body>
</html>


