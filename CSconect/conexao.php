<?php
$hostname = "localhost";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha);
if($mysqli->connect_errno){
    echo "falha na conecxão: (" .$mysqli->conect_errno . ")" . $mysqli->conect_errno;
}else{
    echo "Conectado";
}
