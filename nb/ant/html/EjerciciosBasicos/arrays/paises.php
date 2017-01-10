<?php
/**
*Recorrer los continentes
*
*
*/
		$banderaEspania = "<img src=\"banderas/esp.jpg\"/>";
        $banderaAlemania = "<img src=\"banderas/alemania.jpg\"/>";
        $banderaInglaterra = "<img src=\"banderas/ru.jpg\"/>";
		
        $banderaChina = "<img src=\"banderas/cn.jpg\"/>";
        $banderaJapon = "<img src=\"banderas/ja.jpg\"/>";
        $banderaIndia = "<img src=\"banderas/in.jpg\"/>";
		
        $banderaSudafrica = "<img src=\"banderas/surAf.jpg\"/>";
        $banderaMarruecos = "<img src=\"banderas/marruecos.jpg\"/>";
        $banderaGhana = "<img src=\"banderas/gh.jpg\"/>";
		
        $banderaEEUU = "<img src=\"banderas/eeuu.jpg\"/>";
        $banderaCanada = "<img src=\"banderas/cana.jpg\"/>";
        $banderaArgentina = "<img src=\"banderas/arg.jpg\"/>";
		
        $banderaNuevaZelanda = "<img src=\"banderas/nzl.jpg\"/>";
        $banderaAustralia = "<img src=\"banderas/au.jpg\"/>";
        $banderaPapuaNuevaGuinea = "<img src=\"banderas/papua.jpg\"/>";

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
					echo "<table id=\"continente\"><tr><td class=\"continente\" colspan=\"3\">$key</td></tr><tr><th>Pais</th><th>Capital</th><th>Bandera</th></tr>";
					foreach ($value as $key => $pais) {
						echo "<tr><td class=\"celda\">$key</td>";
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