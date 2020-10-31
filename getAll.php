<?php
require 'classe/Crud.php';
$alunos = Crud::ShowAll();

foreach($alunos as $aluno):
echo json_encode(["cata"]);
endforeach;