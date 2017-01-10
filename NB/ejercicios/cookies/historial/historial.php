<?php
session_start();
if(isset($_GET['im'])){
header("Content-type:image/jpeg");
$im='/9j/4AAQSkZJRgABAQEACgAKAAD/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJ R0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9 jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wAARCAAKAAo DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIE AwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKS o0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp 6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBA QEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcR MiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2 hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX 2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwDt6KKKAP/Z';
echo base64_decode($im);
if(isset($_SESSION['en_historial']))
if(in_array($_GET['im'],$_SESSION['en_historial']))
exit;
$_SESSION['en_historial'][]=$_GET['im'];
exit;
}
if(isset($_GET['ver_en_historial'])){
$html='';
if(count($_SESSION['en_historial'])==0){
echo 'document.getElementById("lista").innerHTML="Ninguno figura en el historial"';
exit;
}
foreach($_SESSION['en_historial'] as $v)
$html.=$v.'<br />';
echo 'document.getElementById("lista").innerHTML="'.$html.'"';
exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>test</title>
<style>
a:link,a:active,a:hover{
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:9px;
color:#FF0000;
background:url(no_visitada.jpg);
}
</style>
<script>
function rpc(url){
oldsc=document.getElementById("old_sc");
if(oldsc)
document.getElementsByTagName('body')[0].removeChild(oldsc);
sc=document.createElement('script');
sc.id="old_sc";
sc.src=url+'&'+Math.random();
document.getElementsByTagName('body')[0].appendChild(sc);
}
function addCss(cssCode,i) {
control=document.getElementById(i)
if(control)
document.getElementsByTagName("head")[0].removeChild(control)
var styleElement = document.createElement("style");
styleElement.type = "text/css";
if (styleElement.styleSheet) {
styleElement.styleSheet.cssText = cssCode;
} else {
styleElement.appendChild(document.createTextNode(cssCode))
}
styleElement.id =i;
document.getElementsByTagName("head")[0].appendChild(styleElement);
}
window.onload=function(){
enlaces=document.getElementsByTagName('a');
for(i=0;i<enlaces.length;i++){
cssCode='a#'+enlaces[i].id+':visited{font-family:Verdana, Arial, Helvetica, sans-serif;font-size:9px;color:#FF0000;background:url(<?php echo basename($_SERVER['PHP_SELF']) ?>?im='+enlaces[i].href+');}';
addCss(cssCode,'tt'+i)
}
}
</script>
</head>

<body>
<p><a id="uno" href="http://www.google.es">Google</a><br />
<a id="dos" href="http://www.yahoo.com">Yahoo</a><br />
<a id="tres" href="http://www.php-hispano.net">php-hispano</a><br />
<a id="cuatro" href="http://www.neocreativo.es">neocreativo</a></p>
<a href="javascript:rpc('?ver_en_historial')">ver cuáles figuran en tu historial</a>
<div id="lista"></div>
</body>
</html>