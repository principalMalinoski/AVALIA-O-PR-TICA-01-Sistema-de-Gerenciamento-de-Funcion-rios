<?php
//Conexão
$pdo = new PDO (
    "mysql:host=localhost;dbname=empresa_db;charset=utf8mb4",
    "root",
    ""
);

//Cadastro
$sql = "INSERT INTO Funcionarios (nome,idade,email,salario,tipo)
            VALUES (:nome, :idade, :email, :salario, :tipo)";

$stmt = $pdo-> prepare($sql);
$stmt-> execute([
    ":nome" => "Gustavo",
    ":idade" => 17,
    ":email" => "gustavo@gmail.com",
    ":salario" => "2500",
    ":funcao" => "organizador",
]);

//Consultar

$sql = "SELECT * FROM Funcionarios";
$stmt = $pdo-> query($sql);

$Funcionarios = $stmt-> fetchAll(PDO::FETCH_ASSOC);

    foreach ($Funcionarios as $Funcionario) {
        echo $Funcionario ["nome"];
    }

//Atualizar

$sql = "UPDATE Funcionarios SET nome =:nome WHERE id= :id";

$stmt= $pdo-> prepare($sql);
$stmt-> execute([
    ":nome" => "Gustavo",
    ":id" => "1",
]);

//Excluir

$sql = "DELETE FROM Funcionarios where id= :id";

$stmt = $pdo-> prepare($sql);
$stmt-> execute([":id => 1"]);

?>