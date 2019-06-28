 <?php

session_start();
include_once("conexao.php");
$result_usuario ="SELECT * FROM aviso WHERE id='2'";
$resultado_usuario=mysqli_query($conn, $result_usuario);

$row_usuario= mysqli_fetch_assoc($resultado_usuario);
    
?>
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
        <div class="padmin"><center> <p><b>VOCÊ ESTÁ LOGADO COMO USUÁRIO ADMIN</b> </p></center></div>
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Destaques</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Preços</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Desativado</a>
      </li>
    </ul>
  </div>
</nav>
    </body>
    <h1> CADASTRAR AVISO</h1>
    <div class="formulario">
    <form method="post" action="edita_aviso.php">
        
        <label>Aviso:</label>
        <input type="text" name="aviso" placeholder="aviso" value="<?php echo $row_usuario['aviso'];?>">
        <label>Data:</label>
        <input type="text" name="data" placeholder="data" value="<?php echo $row_usuario['data'];?>" >
        <label>Hora:</label>
        <input type="text" name="horacadastrada" placeholder="horacadastrada" value="<?php echo $row_usuario['horacadastrada'];?>">
         <label>Usuário:</label>
        <input type="text" name="usuario" placeholder="usuario" value="<?php echo $row_usuario['usuario'];?>">
        
        <input type="submit" value="EDITAR DADOS">
        
    </form>
  </div>
    
</html>

