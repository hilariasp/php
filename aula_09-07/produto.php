<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height: 630px;
            display: grid;
            grid-template-areas: "header""article""footer";
            grid-template-rows: 120px auto 90px;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }
        
        article{
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: center;

        }

        header{
            grid-area: header;
            background-color: #3f5d60;
            display: flex;
            
        }

        header > img{
            height: 100%;
        }

        nav{
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            font-size: 20px;
        }

        article{
            grid-area: article;
            background-color: #cad2c5;
        }
        
        footer{
            grid-area: footer;
            background-color: #84a98c;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .produtos{
            width: 60%;
            padding: 12px;
            background-color: #8fa98c;
            border: 1px solid #84a98c;
            border-radius: 8px;
        }

    </style>
</head>

<body>
    <header>
        <img src="img01.png" alt="img">
        <nav>
            <a href="produto.php"> Cadastro Produto</a>
            <a href="recebe-produto.php"> Lista Produto</a>
        </nav>
        <img src="img01.png" alt="img">
    </header>
    <article>
        <div class="produtos">
            <h1 style="text-align: center;">Cadastro de Produtos</h1>
            <form action="recebe-produto.php" method="get">
            <br>
            <label for="nome">Produto</label><br>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" required><br><br>
            <label for="marca">Marca</label><br>
            <select name="marca" id="marca" required>
                <option value="">Selecione</option>
                <option value="adidas">adidas</option>
                <option value="nike">nike</option>
                <option value="gucci">gucci</option>
                <option value="chanel">chanel</option>
                <option value="hermes">hermes</option>
            </select> <br><br>
            <label for="tamanho">Tamanho</label><br>
            <select name="tamanho" id="tamanho" required>
                <option value="">Selecione</option>
                <option value="pp">PP</option>
                <option value="p">P</option>
                <option value="m">M</option>
                <option value="g">G</option>
                <option value="gg">GG</option>
            </select> <br> <br>
            <label for="precov">Preço de venda</label><br>
            <input type="number" name="precov" id="precov" min="0" max="10000" placeholder="Digite o preço de venda" required><br><br>
            <label for="precoc">Preço de compra</label><br>
            <input type="number" name="precoc" id="precoc" min="0" max="10000" placeholder="Digite o preço de compra" required><br><br>
            <label for="cor">Cor</label><br>
            <input type="text" name="cor" id="cor" placeholder="Digite a cor" required><br><br>
            <label for="genero">Gênero</label><br>
            <select name="genero" id="genero" required>
                <option value="">Selecione</option>
                <option value="pp">Feminino</option>
                <option value="p">Masculino</option>
            </select> <br> <br>
            <label for="modelo">Modelo</label><br>
            <input type="text" name="modelo" id="modelo" placeholder="Digite o modelo" required><br><br>
            <label for="data">Data da compra</label><br>
            <input type="date" name="data" id="data" placeholder="Selecione a data da compra" required><br><br>
            <button type="submit">Concluído</button>
        </form>
        </div>
    </article>
    <footer>
        ©2024 HILÁRIA. DIREITOS RESERVADOS.
    </footer>
    </div>
</body>

</html>