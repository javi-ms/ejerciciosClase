<?php
session_start();

if (isset($_SESSION["javier"])) {
    print "<p>Su nombre es $_SESSION[javier].</p>\n";
} else {
    print "<p>No sé su nombre.</p>\n";
}

unset($_SESSION["nombre"]);

if (isset($_SESSION["nombre"])) {
    print "<p>Su nombre es $_SESSION[nombre].</p>\n";
} else {
    print "<p>No sé su nombre.</p>\n";
}
?>