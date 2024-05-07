<link rel="stylesheet" href="ex01.css">
<?php
echo"<p>foreach</p>";
$aluno = array("nome"=>"Hilário", "idade"=>17, "end"=>15, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1568 );
foreach ($aluno as $chave => $valor) {
    echo "$chave: "; 
    echo "$valor <br> ";
}

echo"<p>for</p> ";
$var = array(1=>"Fábio", 2=>"WQ", 3=>"Reinaldo", 4=> "Eber", 5=> "Romulo");
for($a=1; $a<5; $a++) {    
    echo "$var[$a] <br>";
    }

echo"<p>Atividade passada</p>";

echo"<br><p>Exemplo Aluno</p>";

$aluno = array("aluno", "idade", "endereço", "cidade", "cpf");
echo"foreach <br>";
foreach ($aluno as $key => $value) {
    echo "$key: "; 
    echo "$value <br> ";
}
echo"<br> for <br>";
for($a=0; $a<5; $a++) {    
    echo "$aluno[$a] <br>";
    }
echo "<br>";

$aluno1 = array("nome"=>"Hilário", "idade"=>17, "end"=>15, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1568 );
foreach ($aluno1 as $key => $value) {
    echo "$key: "; 
    echo "$value <br> ";
}

echo "<br>";

$aluno2 = array("nome"=>"Diamili", "idade"=>17, "end"=>18, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1780 );
foreach ($aluno2 as $key => $value) {
    echo "$key: "; 
    echo "$value <br> ";
}
echo"<br><p>Exemplo Professor</p>";
$professor1 = array("nome"=>"Fábio", "idade"=>47, "end"=>1590, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1345);
foreach ($professor1 as $key => $value) {
    echo "$key: "; 
    echo "$value <br> ";
}

echo "<br>";

$professor2 = array("nome"=>"Eber", "idade"=>35, "end"=>1350, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1545);
foreach ($professor2 as $key => $value) {
    echo "$key: "; 
    echo "$value <br> ";
}

echo "<br>";

$professor3 = array("nome"=>"WQ", "idade"=>55, "end"=>1534, "cidade"=> "Guanambi", "estado"=> "BA", "CPF"=> 1876);
foreach ($professor3 as $key => $value) {
    echo "$key: "; 
    echo "$value <br> ";
}

?>