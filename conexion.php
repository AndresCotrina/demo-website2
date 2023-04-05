<?php
	function conexion(){
	$host = "host=containers-us-west-144.railway.app";
	$port = "port=6706";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=1p4VbTw2tIiCK09Xt7NA";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>