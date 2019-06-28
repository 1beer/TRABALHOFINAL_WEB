<!DOCTYPE html>


<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>LOGIN PAGE</title>
    </head>

    
    <style>
      
    
    .formulario
        {
            margin-left: 700px;
            margin-top: 30px;
        }
        .imagem
        {
          background-color: red;
        }
        .jumbotron
        {
            height: 320px;
        }
        .paragrafo
        {
            margin-left: 625px;
            height: 40px;
            color: red;
        }
    </style>
<body>
    <div class="imagem">
    <img src="gokuimg.jpg" height="500" width="1920">
        </div>
    <br>
    
    <div class="alert alert-info" role="alert">  
    <div class="paragrafo">
<p><b>ESCOLHA O TIPO DE USUÁRIO PARA PODER LOGAR AO SISTEMA</b>  </p>
    </div>
    
   <div class="formulario">
       <form  method="POST">
           
    <table>
        <tr>
    
            <td>Tipo de Usuario</td>
            <td><select name="type">
                <option value="-1"> Tipo de usuario</option>
                 <option value="Admin"> Admin</option>
                 <option value="User1"> User1</option>
                <option value="User2"> User2</option>
                </select></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="username"></td>
        </tr>
              
        <tr>
            <td>Password</td>
            <td><input type="text" name="pwd" placeholder="password">
            </td>
        </tr>  
        <td>
        <button type="submit" name="submit" value="Login" class="btn btn-primary">Logar</button>
        </table>
        </form>
        </div> 
    </div>
    <br>
    <br>
   
    </body>
</html>

<?php

$con=mysqli_connect("localhost","root","","multilevel");
if(!$con)
{
    echo "unable to establish connection" .mysql_error();
}
    $db=mysqli_select_db($con,"multilevel");
if(!$db)
{
    echo 'Database not found'.mysql_error();
}

if(isset($_POST['submit']))
{
    $type=$_POST['type'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    
    $query="select * from login where username='$username' and password='$password' and type='$type'";
    
    $result = mysqli_query($con,$query);
    
    while($row=mysqli_fetch_array($result))
    {
        if($row['username']==$username && $row['password']==$password && $row['type'] == 'Admin')
        {
            header("Location: admin.php");
        }else
        {
        
           if($row['username']==$username && $row['password']==$password && $row['type'] == 'User1')
        {
            header("Location: user.php");
        }else
        {
             if($row['username']==$username && $row['password']==$password && $row['type'] == 'User2')
        {
            header("Location: user2.php");     
        }
    }
}
    }
}
?>
