<?php 

// Conexão com banco de dados.
// English version: Connection on the MySql.

	$servername = "185.27.134.10";
	$username = "epiz_24630339";
	$password = "dwsmumttVrC8";
	$dbname = "epiz_24630339_erecycle";
	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn, 'utf8');
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
