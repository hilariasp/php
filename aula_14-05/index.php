<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array-Laços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ARRAY-LAÇOS</h1>
    <h2>IMPRESSÃO UM POR UM</h2>
    <pre>
        <?php
        $A1= array("Antônio", "Luís", "José", "João");
        echo "<br>- $A1[0] <br>"; 
        echo "- $A1[1] <br>";
        echo "- $A1[2] <br>";
        echo "- $A1[3] <br>";
        ?>
    </pre>
    <h2> ARRAY COM FOR</h2>
    <pre>
        <?php
        for($x=0; $x<(4); $x++){
            echo"<br> posição $x o valor é $A1[$x]; <br>";
        }
        ?>
    </pre>
    <h2> ARRAY COM FOREACH</h2>
    <pre>
        <?php
        foreach ($A1 as $chave => $valor) {
            echo "<br> $chave: $valor; <br>";
        }
        ?>
    </pre>
    <h2>ARRAY: DEFINIÇÃO EXPLÍCITA (com chave)</h2>
    <pre>
    <?php
        $A2= array("Maria" => 25, "João" => 44, "José" => 12, "Neusa" => 73);
        foreach ($A2 as $chave => $valor) {
            echo"<br> $chave tem $valor anos; <br>";
        }
        ?>
    </pre>
    <h2>Exemplo print</h2>
    <h3>print_r - mostra o que tem armazenado no array</h3>
    <pre>
        <?php
            print_r($A2);
        ?>
    </pre>
    <h2>ARRAY MULTIDIMENCIONAL: DEFINIÇÃO EXPLÍCITA</h2>
    <pre>
    <?php
        $A3= array("Maria" => array ("Endereço" => "Rua Chile 1845", "Bairro" => "Rebouças", "Cidade" => "Guanambi"), 
        "João" => array ("Endereço" => "Rua Chile 1905", "Bairro" => "Rebouças", "Cidade" => "Guanambi"),
        "Zeca" => array ("Endereço" => "Rua Chile 19", "Bairro" => "Potosi", "Cidade" => "Guanambi"), 
        "Neusa" => array ("Endereço" => "Rua Silva Jardim 89", "Bairro" => "Centro", "Cidade" => "Guanambi"));
        echo"<br>";
        print_r($A3);
        echo"<br>";
        print_r($A3["Maria"]["Endereço"]);
        echo"<br>";
        print_r($A3["Maria"]["Bairro"]);
        echo"<br>";
        print_r($A3["Maria"]["Cidade"]);
        echo"<br><br>";
        print_r($A3["João"]["Bairro"]);
        echo"<br>";
        print_r($A3["Zeca"]["Cidade"]);
        echo"<br>";
        ?>
    </pre>
    <h2>IMPRESSÃO COM FOREACH</h2>
    <pre>
    <?php
        foreach ($A3 as $chave => $valor) {
            echo"<br>Nome: $chave <br>";
            foreach ($valor as $key => $value) {
                echo"$key: $value; <br>";
            }
        }
        ?>
    </pre>
</body>
</html>