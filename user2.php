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
    </style>
 </head>
    <body>
        <div class="imagemtop">
            <img src="dbz.jpg" height="400" width="1910"></div>
       
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CADASTRAR AVISOS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      </li>
    </ul>
  </div>
</nav>
    </body>
     <h1> CADASTRAR NOTICIAS</h1>
    <div class="formulario">
    <form method="post" action="home.php">
        <label>titulo:</label>
        <input type="text" name="$titulon" placeholder="titulo">
        <label>noticia:</label>
        <input type="text" name="$notician" placeholder="noticia">
        <label>data:</label>
        <input type="text" name="$datan" placeholder="data">
         <label>hora:</label>
        <input type="text" name="$horan" placeholder="hora">
         <label>usuario:</label>
        <input type="text" name="$usuarion" placeholder="usuarionoticia">
        <input type="submit" value="Cadastraar">
    </form>
  </div> 
      
</html>

