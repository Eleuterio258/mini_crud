 <?php 
 require('classe/Crud.php');
 //$alunos = Crud::ShowAll();

 ?>

 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Curso Crud</a>
      <ul id="nav-mobile" class="right">
        <li><a href="alunos.php">Lista de Alunos</a></li>
        
      </ul>
    </div>
  </nav>

    <div class="row container">
    <form action="cadatro.php" method="post" class="col s12">
      <h5 class="light">Cadastro de Alunos</h5>

      <div class="row">
        <div class="input-field col s12">
          <input id="nome" name="nome" type="text" class="validate">
          <label for="name">Nome</label>   
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>   
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="tel" name="numero" type="tel" class="validate">
          <label for="tel">Telefone</label>   
        </div>
      </div>

      <div>
         <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
            <i class="material-icons right">send</i>
          </button>
      </div>

    </form>
  </div>

   


    

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>