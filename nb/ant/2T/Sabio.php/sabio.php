// FUNCIÓN DE CONEXIÓN CON LA BASE DE DATOS MYSQL
function conectaDb()
<?php{
    function conectaDb(){
    try {
        $db = new PDO(192.168.12.129, 2daw1516_masoja, usuario);
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $db->exec("set names utf8mb4");
        return($db);
    } catch(PDOException $e) {
        cabecera("Error grave", MENU_PRINCIPAL);
        print "  <p>Error: No puede conectarse con la base de datos.</p>\n\n";
        print "  <p>Error: " . $e->getMessage() . "</p>\n";
        pie();
        exit();
    }
?}