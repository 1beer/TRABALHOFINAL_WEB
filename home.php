
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> ADMIN PAGE</title>
    <style>
    
    .padmin
        {
            color:RED;
            font-size: 40px;
            font-family: cursive;
        }
        .formulario
        {
            margin-left: 10px;
        }
    </style>
 </head>
    <body>
        <div class="imagemtop">
            <img src="dbz.jpg" height="400" width="1910"></div>
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DBZ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="listar.php">VISUALIZAR AVISOS CADASTRADOS <span class="sr-only">(Página atual)</span></a>
    </ul>
  </div>
</nav>
    </body>
   
</html>


<?php

//fazendo a conexao com o bd

include_once("conexao.php");

//instanciando variaveis avisos
$aviso =filter_input(INPUT_POST, 'aviso', FILTER_SANITIZE_STRING);
$data =filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$horacadastro =filter_input(INPUT_POST, 'horacadastrada', FILTER_SANITIZE_STRING);
$usuario =filter_input(INPUT_POST, 'usuario', $usuario = FILTER_SANITIZE_STRING);



//instanciando variaveis noticias
$titulon =filter_input(INPUT_POST, '$titulon', $titulon = FILTER_SANITIZE_STRING);
$notician =filter_input(INPUT_POST, '$notician', $notician = FILTER_SANITIZE_STRING);
$datan =filter_input(INPUT_POST, '$datan', $datan = FILTER_SANITIZE_STRING);
$horan =filter_input(INPUT_POST, '$horan', $horan = FILTER_SANITIZE_STRING);
$usuarion=filter_input(INPUT_POST, '$usuarion', $usuarion = FILTER_SANITIZE_STRING);

//instanciando variaveis empresa
$nomeempresa =filter_input(INPUT_POST, '$nomeempresa', $nomeempresa = FILTER_SANITIZE_STRING);
$telefoneempresa =filter_input(INPUT_POST, '$telefoneempresa', $telefoneempresa = FILTER_SANITIZE_STRING);
$usuarioempresa =filter_input(INPUT_POST, '$usuarioempresa', $usuarioempresa = FILTER_SANITIZE_STRING);
$logotipoempresa =filter_input(INPUT_POST, '$logotipoempresa', $logotipoempresa = FILTER_SANITIZE_STRING);

//apenas teste
//echo "Aviso: $aviso <br>";
//echo "Data: $data <br>";
//echo "HoraCadastrado: $horacadastro <br>";
//echo "Usuario: $usuario <br>";


//bd aviso
$result_usuario = "INSERT INTO   aviso (aviso, data, horacadastrada, usuario) VALUES('$aviso', '$data', '$horacadastro', '$usuario')";
$resulto_usuario= mysqli_query($conn, $result_usuario);

//bd noticias
$result_usuario1 = "INSERT INTO   noticias (titulon, notician, datan, horan,usuarion) VALUES('$titulon', '$notician','$datan','$horan','$usuarion')";
$resulto_usuario1= mysqli_query($conn, $result_usuario1);

//bd empresa
$result_usuario = "INSERT INTO   empresa (nomeempresa, telefoneempresa, usuarioempresa, logotipoempresa) VALUES('$nomeempresa', '$telefoneempresa', '$usuarioempresa', '$logotipoempresa')";
$resulto_usuario= mysqli_query($conn, $result_usuario);

