<?php
// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "perfil";

$connect = mysqli_connect($servername,$username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;    