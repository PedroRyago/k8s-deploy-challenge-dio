<?php
$servername = "ip:port";
$username = "root";
$password = "$(mysql-pass)";
$database = "meuBanco";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>