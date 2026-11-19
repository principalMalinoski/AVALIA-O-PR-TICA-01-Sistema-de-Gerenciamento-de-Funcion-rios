<?php
require_once "conexão.php"

if $_SERVER["REQUEST_METHOD"] = {["POST"]};

$nome = $_POST["nome"];
    echo "Olá", $nome;
$idade = $_POST["email"];
    echo "Meu email ", $email;
$email = $_POST["email"];
    echo "Meu salario", $salario;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <link rel="stylesheet" href="funcionario.css">
</head>
<body>
    <form action="" method="$_POST">
        <input type="text" name="nome">
        <input type="text" id="id">
        <input type="text" name="email">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>