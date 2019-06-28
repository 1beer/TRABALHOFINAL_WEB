
<html>
    <style>
    .jumbotron
        {   
            width: 700px;
            background-color: red;
            height: 700px;
        }

        .elementExample1
        {
            float: right;
            background-color: red;
        }
        .elementExampl
        {
            background-color: lightblue;
            height: 790px;
        }
        .ALGO
        {
            margin-left: 10px;
            background-color: gray;
        }
    </style>
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
     <div class="imagemtop">
            <img src="dbz.jpg" height="400" width="1910"></div>
        <div class="padmin"><center> <p> </p></center></div>
       
    <body>
      <div class="elementExample1 elementExample_first">
          <h1> AVISOS CADASTRADOS </h1>
            <div class="jumbotron">
                 <?php
session_start();
include_once("conexao.php");
    
        
        //selecioanndo dados da tabela aviso
    $result_usuarios = "SELECT * FROM aviso";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);


while($row_usuario = mysqli_fetch_assoc($resultado_usuarios))
      {
          echo  $row_usuario['id'] . "<br>";
     echo  $row_usuario['aviso'] . "<br>";
     echo  $row_usuario['data'] . "<br>";
    echo  $row_usuario['horacadastrada'] . "<br>";
     echo  $row_usuario['usuario'] . "<br>";
      }
    ?>  
   </div>   

        
  </div>
    </body>
  <div class="elementExampl">
    <h1> NOTICIAS CADASTRADAS </h1>
      <div class="jumbotron1">
    <?php
                    //selecioanndo dados da tabela aviso
    $result_usuarios1 = "SELECT * FROM noticias";
$resultado_usuarios1 = mysqli_query($conn, $result_usuarios1);
while($row_usuario = mysqli_fetch_assoc($resultado_usuarios1))
      {
     echo  $row_usuario['id'] . "<br>";
     echo  $row_usuario['titulon'] . "<br>";
     echo  $row_usuario['notician'] . "<br>";
     echo  $row_usuario['datan'] . "<br>";
     echo  $row_usuario['horan'] . "<br>";
     echo  $row_usuario['usuarion'] . "<br>";
      }
  ?>
      </div>
    </div>
    
     <div class="ALGO">
    <h1> CADASTRAR EMPRESAS  </h1>
      <div class="jumbotron1">
    <?php
      //selecioanndo dados da tabela emrpesa
    $result_usuarios2 = "SELECT * FROM empresa";
$resultado_usuarios2 = mysqli_query($conn, $result_usuarios2);
while($row_usuario = mysqli_fetch_assoc($resultado_usuarios2))
      {
     echo  $row_usuario['id'] . "<br>";
     echo  $row_usuario['nomeempresa'] . "<br>";
     echo  $row_usuario['telefoneempresa'] . "<br>";
     echo  $row_usuario['usuarioempresa'] . "<br>";
     echo  $row_usuario['logotipoempresa'] . "<br>";
      }
  ?>
      </div>
    </div>
</html>



    
        

