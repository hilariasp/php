<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>ATIVIDADE SALA</h1>
    <h2>EXERCÍCIO 1</h2>
    <pre>
    <?php
    $a1 = [
        'alunos' => [
            [
            'id' => 1,
            'nome' => 'Fabio',
            'idade' => 20,
            'endereco' => 'rua Hilário',
            'cidade' => 'Guanambi'
            ],
            [
            'id' => 2,
            'nome' => 'Hilário',
            'idade' => 17,
            'endereco' => 'rua Et Bilu',
            'cidade' => 'Guanambi'
            ],
            [
            'id' => 3,
            'nome' => 'Sarah',
            'idade' => 17,
            'endereco' => 'rua Taylor Silva',
            'cidade' => 'Guanambi'
            ]
        ]
        ];
    echo"<h3>a) Imprimir a array:</h3>";
    print_r($a1);
    echo"<h3>b) Imprimir o chave 2 com o valor nome:</h3>";
    print_r($a1['alunos'][2]['nome']);
    echo "<br>";
    echo"<h3>c) Imprimir o chave 2 com o valor endereco:</h3>";
    print_r($a1['alunos'][2]['endereco']);
    echo"<br>";
    ?>
    </pre>
    <h2>IMPRESSÃO NA TABELA</h2>
    <pre>
    <table class="table1">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Endereço</th>
    <th>Cidade</th>
  </tr>
  <tr>
    <td class="number"><?php print_r($a1['alunos'][0]['id']);?></td>
    <td><?php print_r($a1['alunos'][0]['nome']);?></td>
    <td class="number"><?php print_r($a1['alunos'][0]['idade']);?></td>
    <td><?php print_r($a1['alunos'][0]['endereco']);?></td>
    <td><?php print_r($a1['alunos'][0]['cidade']);?></td>
  </tr>
  <tr>
    <td class="number"><?php print_r($a1['alunos'][1]['id']);?></td>
    <td><?php print_r($a1['alunos'][1]['nome']);?></td>
    <td class="number"><?php print_r($a1['alunos'][1]['idade']);?></td>
    <td><?php print_r($a1['alunos'][1]['endereco']);?></td>
    <td><?php print_r($a1['alunos'][1]['cidade']);?></td>
  </tr>
  <tr>
    <td class="number"><?php print_r($a1['alunos'][2]['id']);?></td>
    <td><?php print_r($a1['alunos'][2]['nome']);?></td>
    <td class="number"><?php print_r($a1['alunos'][2]['idade']);?></td>
    <td><?php print_r($a1['alunos'][2]['endereco']);?></td>
    <td><?php print_r($a1['alunos'][2]['cidade']);?></td>
  </tr>
</table>
</pre>

<h2>IMPRESSÃO NA TABELA COM FOR</h2>
<pre>
    <table class="table1">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Endereço</th>
    <th>Cidade</th>
  </tr>
  <?php

$keys = [
    array_keys($a1['alunos'][0]),
    array_keys($a1['alunos'][1]),
    array_keys($a1['alunos'][2]),
  ];
  
  for($i = 0; $i < count($keys); $i++) {
      for($j = 0; $j < count($keys[$i]); $j++){
          echo "<td>";
          print ($a1['alunos'][$i][$keys[$i][$j]]);
          echo "</td>";
      }
      echo "</tr>";
    }
    ?>
</table>
<h3>Exemplo:</h3>
<table>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Endereço</th>
    <th>Cidade</th>
  </tr>
  <?php 
  for ($i=0; $i < count($a1['alunos']) ; $i++) { ?>
    <tr>
        <td> <?php print_r($a1['alunos'][$i]['id']); ?> </td>
        <td> <?php print_r($a1['alunos'][$i]['nome']); ?> </td>
        <td> <?php print_r($a1['alunos'][$i]['idade']); ?> </td>
        <td> <?php print_r($a1['alunos'][$i]['endereco']); ?> </td>
        <td> <?php print_r($a1['alunos'][$i]['cidade']); ?> </td>
    </tr>
<?php } ?>
</table>

</pre>
</body>
</html>