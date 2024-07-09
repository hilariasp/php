<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .number{
            text-align: center;
        }  
      table{
            border-collapse: collapse;
            width: 70%;
            font-size: 17px;
        }
        th{
            border: 2px solid black;
            padding: 13px;
            background-color:#84a98c;
        }
        td{
            border: 2px solid black;
            padding: 13px;
            background-color: azure;
        }
    </style>

</head>
<body>

<table class="table1">
<tr>
    <th>Produto</th>
    <th>Marca</th>
    <th>Tamanho</th>
    <th>Preço de venda</th>
    <th>Preço de compra</th>
    <th>Cor</th>
    <th>Modelo</th>
    <th>Data de venda</th>
</tr>
<tr>
    <td><?php echo $_GET['nome'];?></td>
    <td><?php echo $_GET['marca'];?></td>
    <td class="number"><?php echo $_GET['tamanho'];?></td>
    <td class="number"><?php echo $_GET['precov'];?></td>
    <td class="number"><?php echo $_GET['precoc'];?></td>
    <td><?php echo $_GET['cor'];?></td>
    <td><?php echo $_GET['modelo'];?></td>
    <td class="number"><?php echo $_GET['data'];?></td>
  </tr>
</table>

</body>
</html>