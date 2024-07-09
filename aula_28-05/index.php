<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        echo"<h2>1. Constantes:</h2>
        <h3>Para definir uma constante utilizamos o comando define().</h3>";
        define("HORAS", 24);
        echo HORAS;
        echo"<br>";
        
        echo"<h2>2. Constantes Pré-definidas: </h2>
            <h3>A linguagem PHP disponibiliza um conjunto de constantes pré-definidas.</h3>";

        function funcConsts() {
            echo "ARQUIVO: ".__FILE__."<br>";
            echo "DIRETÓRIO: ".__DIR__."<br>";
            echo "LINHA: ".__LINE__."<br>";
            echo "FUNÇÃO: ".__FUNCTION__."<br>";
           }
        funcConsts();

        echo "<br>";
        class veiculo {
            private $marca;
            function __construct() {
            echo "CLASSE: ".__CLASS__."<br>";
            }
           function setMarca($marca) { $this->marca = $marca;
            echo "MÉTODO: ".__METHOD__."<br>";
           } }
           $obj = new veiculo();
            $obj->setMarca("Wolksvagem");
           

        echo"<h2>3. Variaveis Superglobais (pré-definidas) </h2>";
            
            $vars_pre = get_defined_vars();
            print_r($vars_pre);
        
        echo"<h2>Função sem paramêtro</h2>";
        
        function soma(){
            $x = 9; 
            $y = 10;
            $s = $x + $y ;
            echo "Soma é igual a $s <br>";
        }
        soma();

        echo"<h2>Função com paramêtro</h2>";
        
        function soma3($par1, $par2){
            $par1;
            $par2;
            $d = $par1 + $par2 ;
            return $d;
        }
        soma3(9, 40);
        echo"<br>";
        function mult($par1, $par2, $p3){
            $s = $par1 + $par2 * $p3;
            echo "O resultado é igual a $s <br>";
        }
        mult(9, 60, 8);
        echo"<br>";
        
        function nome_funcao($par1, $par2) {
            $s = $par1 + $par2;
            $sb = $s - ($par2 / 4);
            $m = $sb * $par1;
            $d = $m / $par2;
        return "Dado de Retorno: $d";
        }

        $retorno = nome_funcao(12, 80);
        echo $retorno."<br><br>";

        function e2($par1){
            $s = $par1 ^ $par1;
            return $s;
        }
        $ele = e2(soma3(10, 2));
        echo "Soma $ele";

    ?> 
    </pre>
</body>
</html>