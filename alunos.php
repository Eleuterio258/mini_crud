<?php
require 'classe/Crud.php';
$alunos = Crud::ShowAll();

?>
<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Curso Crud</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Cadastrar</a></li>
      </ul>
    </div>
  </nav>
  <div class="row container">
    <div class="col s12">
      <h5 class="light">Alunos Cadastrados</h5>

      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Editar Aluno</th>
            <th>Apagar Aluno</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($alunos as $aluno) {?>
            <tr>
              <td><?php echo $aluno->nome ?></td>
              <td><?php echo $aluno->email ?></td>
              <td><?php echo $aluno->numero ?></td>
              <td><a href='EditarAluno.php?id=<?php echo $aluno->id; ?>' class='btn btn-small'>Editar</td>
              <td><a href='#' class='btn btn-small red'>Apagar</td>
            </tr>
          <?php }?>
        </tbody>
      </table>


    </div>

  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>