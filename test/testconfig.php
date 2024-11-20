<?php
//include carga el recurso y si hay fallas no dice nada
//require cargar el recurso pero si hay fallas emite
//                 mensajes

//include_once cargar solo una vez#
//require_once
//http://sistemalogin.test/test/testconfig.php
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';

echo $_urlBase;

echo get_UrlBase('pagina.php');

?>