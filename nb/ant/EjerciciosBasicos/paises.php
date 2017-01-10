<?php
/**
*Recorrer los continentes
*
*
*/
		$banderaEspania = "<img src=\"	imagenes/esp.jpg\"/>";
        $banderaAlemania = "<img src=\"imagenes/alemania.jpg\"/>";
        $banderaInglaterra = "<img src=\"imagenes/ru.jpg\"/>";
		
        $banderaChina = "<img src=\"imagenes/cn.jpg\"/>";
        $banderaJapon = "<img src=\"imagenes/ja.jpg\"/>";
        $banderaIndia = "<img src=\"imagenes/in.jpg\"/>";
		
        $banderaSudafrica = "<img src=\"imagenes/surAf.jpg\"/>";
        $banderaMarruecos = "<img src=\"imagenes/marruecos.jpg\"/>";
        $banderaGhana = "<img src=\"imagenes/gh.jpg\"/>";
		
        $banderaEEUU = "<img src=\"imagenes/eeuu.jpg\"/>";
        $banderaCanada = "<img src=\"imagenes/cana.jpg\"/>";
        $banderaArgentina = "<img src=\"imagenes/arg.jpg\"/>";
		
        $banderaNuevaZelanda = "<img src=\"imagenes/nzl.jpg\"/>";
        $banderaAustralia = "<img src=\"imagenes/au.jpg\"/>";
        $banderaPapuaNuevaGuinea = "<img src=\"imagenes/papua.jpg\"/>";

		$continentes=array(

			"Europa"=>array(
							"España"=>array("Madrid",$banderaEspania),
							"Alemania"=> array("Berlin",$banderaAlemania),
							"Inglaterra"=> array("Londres",$banderaInglaterra),
							),	
			"Africa"=>array(
							"Marruecos"=>array("Rabat",$banderaMarruecos),
							"Sudafrica"=> array("Johannesburgo",$banderaSudafrica),
							"Ghana"=> array("Acra",$banderaGhana),
							),
			"Asia"=> array(
							"China"=> array("Pekin",$banderaChina),
							"Japon"=> array("Tokyo",$banderaJapon),
							"India"=> array("Nueva Delhi",$banderaIndia),
							),
			"America"=>array(
							"Estados Unidos"=> array("Washington D.C.",$banderaEEUU),
							"Canada"=> array("Ottawa",$banderaCanada),
							"Argentina"=> array("Buenos Aires",$banderaArgentina),
					),
			"Oceania"=>array(
							"Nueva Zelanda"=> array("Wellington",$banderaNuevaZelanda),
							"Australia"=> array("Camberra",$banderaAustralia),
							"Papua Nueva Guinea"=> array("Puerto Moresby",$banderaPapuaNuevaGuinea),
							),
			);
		   
				foreach ($continentes as $key => $value) {
					echo "<table id=\"continente\"><tr><td colspan=\"3\">$key</td></tr><tr><th>Pais</th><th>Capital</th><th>Bandera</th></tr>";
					foreach ($value as $key => $pais) {
						echo "<tr><td >$key</td>";
						foreach ($pais as $elemento) {
							echo "<td class=\"celda\">$elemento</td>";
						}
						echo "</tr>";
					}
					echo "</table>";
				}
			   
		/*
	echo "<table border=\1\>";
	foreach($continente as $rcontinente => $cont){
		echo "<tr><td>$rcontinente</td>";
		foreach ($cont as $key => $value) {
			echo "<td>$value</td>";
		}
	}
	echo "</table>";*/
	
	
	echo "<br/><a href=\"vercodigo.php?src=paises.php\">ver codigo</a>"


?>