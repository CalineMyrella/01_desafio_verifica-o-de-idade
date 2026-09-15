<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verficação de idade</title>
</head>
<body>

<h2>Verficação de idade</h2>

<form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required>

        <label type="number">Ano Nascimento: </label>
        <input type="number" name="ano" required>

       <button type="submit">Cadastrar</button>
</form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Receber os valores
    $nome = $_POST['nome'];
    $ano = $_POST['ano'];

    // Calcula a idade do usuário
    $anoAtual = date("Y");
    $idade = $anoAtual - $ano;

    // Verifica se o usuário é maior de idade
    if ($idade >= 18) {
        echo "<p>Acesso permitido, $nome!</p>";

        // Abre/Cria o arquivo de log
        $arquivo = fopen('log_acessos.txt', 'a');

        // Cria uma linha com os dados do acesso
        $linha = $nome . ';' . $idade . "\n";

        // Escreve os dados no arquivo
        fwrite($arquivo, $linha);

        // Fecha o arquivo
        fclose($arquivo);

        echo "<script>alert('Acesso permitido!')</script>";

    } else {
        echo "<script>alert('Acesso negado!')</script>";
       
    }
}  
?>
 
</body>
</html>