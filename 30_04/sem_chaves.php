<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
echo"<p>Exemplo 1</p> <br>";
$var = array(1,2,4,5);
echo"$var[0] <br>";
echo"$var[1] <br>";
echo"$var[2] <br>";
echo"$var[3] <br>";
echo "<br>";

echo"<p>Exemplo 2</p> <br>";
$var2 = array("Fabio"=>30, "Eber"=>40, "WQ"=>60);
foreach ($var2 as $key2 => $value2) {
    echo "$key2: "; 
    echo "$value2 <br>";
}
echo "<br>";

echo"<p>Exemplo 3</p> <br>";
$var3 = array(0=>5, 6=>8, 9=>15);
foreach ($var3 as $key3 => $value3) {
    echo "$key3: "; 
    echo "$value3 <br> ";
}
echo "<br>";

echo"<p>Exemplo 4</p> <br>";
$var4 = array(0=>5, 6=>8, 9=>15);
echo"$var4[6] <br>";
$var4[0] = 4;
echo"$var4[0] <br>";
echo"$var4[9] <br>";
$var4[1] = 20;
echo"$var4[1]";

echo "<br>";

echo"<p>Exemplo Aluno</p> <br>";
$aluno = array("nome"=>"Hilária", "idade"=>17, "end"=>15, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1567 );
foreach ($aluno as $key5 => $value5) {
    echo "$key5: "; 
    echo "$value5 <br> ";
}

echo "<br>";

$aluno = array("nome"=>"Hilário", "idade"=>17, "end"=>15, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1568 );
foreach ($aluno as $key5 => $value5) {
    echo "$key5: "; 
    echo "$value5 <br> ";
}

echo "<br>";

$aluno = array("nome"=>"Diamili", "idade"=>17, "end"=>18, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1780 );
foreach ($aluno as $key5 => $value5) {
    echo "$key5: "; 
    echo "$value5 <br> ";
}


echo "<br>";

echo"<p>Exemplo Professor</p> <br>";
$professor = array("nome"=>"Fábio", "idade"=>47, "end"=>1590, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1345);
foreach ($professor as $key6 => $value6) {
    echo "$key6: "; 
    echo "$value6 <br> ";
}

echo "<br>";

$professor = array("nome"=>"Eber", "idade"=>35, "end"=>1350, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1545);
foreach ($professor as $key6 => $value6) {
    echo "$key6: "; 
    echo "$value6 <br> ";
}

echo "<br>";

$professor = array("nome"=>"WQ", "idade"=>55, "end"=>1534, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1980);
foreach ($professor as $key6 => $value6) {
    echo "$key6: "; 
    echo "$value6 <br> ";
}
?> 
</body>
</html>

