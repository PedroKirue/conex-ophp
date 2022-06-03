<?php
$hostname = "localhost";
$bancodedados = "bancodedados";
$usuario = "root";
$senha = "";
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno){
    echo "falha na conecxão: (" .$mysqli->conect_errno . ")" . $mysqli->conect_errno;
}