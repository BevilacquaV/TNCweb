<?php
$host="localhost";
$db="tnc_db";
$us="root";
$pas="";

function connetti()
{
	global $us;
	global $pas;
	global $db;
	global $host;
	$con=@mysql_connect($host,$us,$pas) or die("Connessione fallita");
	@mysql_select_db($db,$con) or die("Impossibile selezionare il database");
	return $con;
}

function esegui_query($query,$con)
{
	$ris=@mysql_query($query,$con) or die("Query fallita");
	return $ris;
}

function chiudi_connessione($ris,$con)
{
	if(!is_bool($ris))
	{
		mysql_free_result($ris);
	}
	mysql_close($con);
}
?>
