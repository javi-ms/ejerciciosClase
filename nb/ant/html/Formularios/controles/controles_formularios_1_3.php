<?php
/**
 * Controles en formularios 1-3 - controles_formularios_1_3.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2015 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2015-10-27
 * @link      http://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Dibuja cuadrado 2 (Resultado). Controles en formularios (1). 
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
<h1>Dibuja cuadrado 2 (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$ancho  = recoge("ancho");
$grosor = recoge("grosor");

print "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n" 
    . "  width=\"" . ($ancho + $grosor) ."px\" height=\"" . ($ancho + $grosor) ."px\">\n";
print "  <rect fill=\"white\" stroke=\"black\" stroke-width=\"$grosor\" "
. "x=\"" . ($grosor/2) . "\" y=\"" . ($grosor/2) . "\" width=\"$ancho\" height=\"$ancho\" />\n";
print "</svg>\n";

?>

<p><a href="controles_formularios_1_3.html">Volver al formulario.</a></p>

<footer>
  <p class="ultmod">
    Última modificación de esta página: 
    <time datetime="2015-10-27">27 de octubre de 2015</time></p>

  <p class="licencia">
    Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
    <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
    El programa PHP que genera esta página está bajo
    <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a></p>
</footer>
</body>
</html>
