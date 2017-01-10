<?php 
/*nombre de la cookie: usuario
valor_ endgar allan poe
tiempo 1 Hora
*/
setcookie("user","Edgar Allan Poe",time()+3600);

//recuperar cookie
echo $_COOKIE['user'];
//fecha de expiracion de la cookie
setcookie("user","",time()-3600);
setcookie("pws","");
?>