<?php
	/*
	*El ayuntamiento de Córdoba quiere almacenar la siguiente información sobre infracciones de 
	*tráfico por estacionamiento en zona azul: Matricula, FechaHoraDenuncia,Motivo, Multa.
	*
	*Las sanciones previstas son:
	*
	*Falta recibo: 100 €.
	*
	*  Excede tiempo: 30 €
	*
	*Diseñar una estructura para guardar esta información y mostrar un informe mensual con el detalle de las multas y el 
    *importe total.
    */
    //$hora=date_timestamp_get();

    //precio de las faltas
    $FRecibo=100;
    $ETiempo=30;
    /*
    //array dentro de un array
    $multa=array(
    	"multa 1"=>array('matricula' => 2356,"horaDenuncia"=>"12:25", "Motivo"=>"falta recibo", "Multa"=>$FRecibo),	
    	"multa 2"=>array('matricula' => 9587,"horaDenuncia"=>"14:00", "Motivo"=>"excede", "Multa"=>$ETiempo),	
    	"multa 3"=>array('matricula' => 6325,"horaDenuncia"=>"12:25", "Motivo"=>"falta recibo", "Multa"=>$FRecibo));
*/
    $mult=array(
    		array("multa"=>1, "matricula"=>2515, "hora"=>"12:34", "motivo"=>"se cae", "aPagar"=>$ETiempo),
    		array("multa"=>2, "matricula"=>2515, "hora"=>"13:34", "motivo"=>"se cae", "aPagar"=>$FRecibo)
		);
    $TPagar=0;
    foreach ($mult as $key => $value) {
    	//$value[*] va a sacar el valor que contiene el valor
    	echo "La multa ".$value["multa"].", tiene de matricula ". $value["matricula"].
    		 ", fue multadoa las : ".$value["hora"].", Tiene que pagar ".$value["aPagar"]."<br/>";
    	
        //almacena y suma el dato
    	$TPagar+=$value['aPagar'];
    }
        //muestra el resultado de la suma total
        echo "<br/>El total de la multa es: ".$TPagar."€";   
         


  		

?>

