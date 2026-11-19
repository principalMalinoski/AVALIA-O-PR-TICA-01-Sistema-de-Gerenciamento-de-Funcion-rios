<?php
require_once "conexão.php"

if $_SERVER["REQUEST_METHOD"] = {["POST"]};


$this->$nome = $_POST["nome"];
    echo "Olá", $nome;
$this->$idade = $_POST["idade"];
    echo "Minha idade é", $idade;
$this->$email = $_POST["email"];
    echo "Meu email", $email;
$this->$salario = $_POST["salario"];
    echo "Meu Salario", $salario;
$this->$funcao = $_POST["funcao"];
    echo "Minha funcao", $funcao;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario Comum</title>
    <link rel="stylesheet" href="funcionarioComum.css">
</head>
<body>
    <form action="" method="$_POST">
        <input type="text" name="nome">
        <input type="text" id="id">
        <input type="text" name="email">
        <input type="chracters" name="salario">
        <input type="text" name="funcao">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>



