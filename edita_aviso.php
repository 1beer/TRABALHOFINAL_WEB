<?php

//fazendo a conexao com o bd

include_once("conexao.php");

$aviso =filter_input(INPUT_POST, 'aviso', FILTER_SANITIZE_STRING);
$data =filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$horacadastro =filter_input(INPUT_POST, 'horacadastrada', FILTER_SANITIZE_STRING);
$usuario =filter_input(INPUT_POST, 'usuario', $usuario = FILTER_SANITIZE_STRING);

//echo "Aviso: $aviso <br>";
//echo "Data: $data <br>";
//echo "HoraCadastrado: $horacadastro <br>";
//echo "Usuario: $usuario <br>";


$result_usuario = "UPDATE INTO aviso SET aviso='$aviso', data='$data', horacadastrada = '$horacadastro', usuario = '$usuario'(aviso, data, horacadastrada, usuario) VALUES('$aviso', '$data', '$horacadastro', '$usuario')";
$resulto_usuario= mysqli_query($conn, $result_usuario);
