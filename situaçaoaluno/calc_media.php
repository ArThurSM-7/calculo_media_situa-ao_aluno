<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    $media = ($nota1 + $nota2) / 2;

    if ($media < 4) {
        $situacao = "Reprovado";
    } elseif ($media >= 4 && $media < 6) {
        $situacao = "Exame final";
    } else {
        $situacao = "Aprovado";
    }

    echo "<h2>Resultado da Média</h2>";
    echo "<p>Aluno: " . $nome . "</p>";
    echo "<p>Média: " . number_format($media, 2) . "</p>";
    echo "<p>Situação: " . $situacao . "</p>";
}
?>
