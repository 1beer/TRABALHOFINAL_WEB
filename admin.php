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
        <div class="padmin"></div>
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DBZ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
    </ul>
  </div>
</nav>
    </body>
    <h1> CADASTRAR AVISO</h1>
    <div class="formulario">
    <form method="post" action="home.php">
        
        <label>Aviso:</label>
        <input type="text" name="aviso" placeholder="aviso">
        <label>Data:</label>
        <input type="text" name="data" placeholder="data">
        <label>Hora:</label>
        <input type="text" name="horacadastrada" placeholder="horacadastrada">
         <label>Usuário:</label>
        <input type="text" name="usuario" placeholder="usuario">
        <input type="submit" value="Cadastrar">
    </form>
  </div>  
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

    <h1> CADASTRAR EMPRESA</h1>
    <div class="formulario">
    <form method="post" action="home.php">
        <label>nome:</label>
        <input type="text" name="$nomeempresa" placeholder="nome">
        <label>telefone:</label>
        <input type="text" name="$telefoneempresa" placeholder="telefone">
        <label>email:</label>
        <input type="text" name="$usuarioempresa" placeholder="email">
         <label>logotipo:</label>
        <input type="text" name="$logotipoempresa" placeholder="logotipo">
         <label>hora:</label>
        <input type="text" name="usuario" placeholder="usuario">
        <input type="submit" value="Cadastrar">
        
    </form>
  </div>
</html>

