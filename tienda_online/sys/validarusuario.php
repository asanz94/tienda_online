<?php
/**
* @author Andreu Sanz Miedes y Aida Dahdah Castelló
* @author asanzm.sanz@gmail.com, aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/

$server = "localhost";
$user = "admine1l5nCM";
$pass = "JXUaKCHp9sEF";
$bd = "tiendaonline";
$nusuario= $_POST['nusuario'];

$conexion=mysql_connect ($servidor, $usuario, $clave) or die ('problema conectando porque :' . mysql_error());
mysql_select_db ($basedatos,$conexion);
$cadena ="select * from usuarios where nombre_usuario like '".$nusuario."'";
$results = mysql_query($cadena) or die('la consulta falla');
	
	if(mysql_num_rows($results) > 0) // existe
	{
	echo 'Nombre de usuario no disponible';
	}
	else
	{
	echo 'Nombre de usuario disponible';
	}

?>