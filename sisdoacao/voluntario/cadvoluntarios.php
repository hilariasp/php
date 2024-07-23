<?php
include_once('../estilo/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylevoluntario.css">
    <title>Document</title>
</head>

<body>
    <aside>

        <h2 class="titulo">Formulário de Voluntariado</h2>
        <div class="voltar">
            <a href="listavoluntarios.php">
                <div class="voltarlista"><i class="fas fa-arrow-left"></i>Voltar para a Lista</div>
            </a>
            <a href="../index.php">
                <div class="voltarinicial"><i class="fas fa-home"></i> Voltar para Tela Inicial</div>
            </a>
        </div>
        <div class="container_formulario">
            <form action="">
                <h3>
                    Informações Pessoais
                </h3>
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="nome">CPF</label>
                    <input type="number" id="cpf" name="cpf" required>
                </div>
                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>
                <div class="form-group">
                    <label for="genero">Gênero:</label>
                    <select id="genero" name="genero" required>
                        <option value="">Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <textarea id="endereco" name="endereco" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <h3>Informações de Emergência</h3>
                <div class="form-group">
                    <label for="telefone_emergencia">Telefone de Emergência:</label>
                    <input type="tel" id="telefone_emergencia" name="telefone_emergencia" required>
                </div>
                <div class="form-group">
                    <label for="relacao_emergencia">Relação com o Contato de Emergência:</label>
                    <input type="text" id="relacao_emergencia" name="relacao_emergencia" required>
                </div>
                <h3>Formação e Experiência</h3>
                <div class="form-group">
                    <label for="escolaridade">Nível de Escolaridade:</label>
                    <input type="text" id="escolaridade" name="escolaridade" required>
                </div>
                <div class="form-group">
                    <label for="experiencia_voluntariado">Experiência de Voluntariado Anterior:</label>
                    <textarea id="experiencia_voluntariado" name="experiencia_voluntariado" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="habilidades">Habilidades Específicas:</label>
                    <textarea id="habilidades" name="habilidades" rows="3"></textarea>
                </div>
                <h3>Disponibilidade</h3>
                <div class="form-group">
                    <label for="disponibilidade">Dias da semana e Horários Disponíveis:</label>
                    <textarea id="disponibilidade" name="disponibilidade" rows="3" required></textarea>
                </div>
                <h3>Áreas de Interesse</h3>
                <div class="form-group">
                    <label for="areas_interesse">Áreas de Interesse:</label>
                    <textarea id="areas_interesse" name="areas_interesse" rows="3" required></textarea>
                </div>
                <button type="submit" class="button">Concluido</button>
            </form>
        </div>
    </aside>
</body>

</html>
<?php 
include_once('../estilo/footer.php');
?>