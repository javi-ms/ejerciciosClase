<?php 
	/*Segun la cantidad de cajas que haya en pantalla habra ese numero de verbos o no
*necesitare un array en el que se guarden los verbos
*ese array tengo que mostrarlo en las cajas 
*/
/**
*ser/estar-be-was/were-been
*golpear-beat-beat-beaten
*llegar a ser-become-became-become
*empezar-begin-began-begun
*romper-break-broke-broken
*traer-bring-brought-brought
*construir-build-built-built
*quemar-burn-burnt-burnt
*comprar-buy-bought-bought
*coger-catch-caught-caught
*escoger-choose-chose-chosen
*veni-come-came-come
*costar-cost-cost-cost
*cortar-cut-cut-cut
*hacer-do-did-done
*/

$verbos = array(
//indice verbo en español que contiene un array con el verbo en ingles
	"ser/estar" => array("Infinitivo" => "be", "Pasado simple" => "was/were", "Pasado Participio" => "been"),
	"golpear" => array("Infinitivo" => "beat", "Pasado simple" => "beat", "Pasado Participio" => "beaten"),
	"llegar a ser" => array("Infinitivo" => "become", "Pasado simple"  => "became", "Pasado Participio" => "become"),
	"empezar" => array("Infinitivo" => "begin" ,"Pasado simple" => "began" ,"Pasado Participio" => "begun"),
	"traer" => array("Infinitivo" => "break" ,"Pasado simple" => "broke" ,"Pasado Participio" => "broken"),
	"construir" => array("Infinitivo" => "build" ,"Pasado simple" => "built" ,"Pasado Participio" => "built"),
	"quemar" => array("Infinitivo" => "burn" ,"Pasado simple" => "burnt" ,"Pasado Participio" => "burnt"),
	"comprar" => array("Infinitivo" => "buy" ,"Pasado simple" => "bought" ,"Pasado Participio" => "bought"),
	"coger" => array("Infinitivo" => "catch" ,"Pasado simple" => "caught" ,"Pasado Participio" => "caught"),
	"coger" => array("Infinitivo" => "catch" ,"Pasado simple" => "caught" ,"Pasado Participio" => "caught"),
	"escoger" => array("Infinitivo" => "choose" ,"Pasado simple" => "chose" ,"Pasado Participio" => "chosen"),
	"venir" => array("Infinitivo" => "come" ,"Pasado simple" => "came" ,"Pasado Participio" => "come"),
	"costar" => array("Infinitivo" => "burn" ,"Pasado simple" => "burnt" ,"Pasado Participio" => "burnt"),
	"cortar" => array("Infinitivo" => "cut" ,"Pasado simple" => "cut" ,"Pasado Participio" => "cut"),
	"hacer" => array("Infinitivo" => "burn" ,"Pasado simple" => "burnt" ,"Pasado Participio" => "burnt");

	)

 ?>