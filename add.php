<?php
if(isset($_POST['adicionar'])) {
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $matricula = $_POST['matricula'];
    $enviando = "INSERT INTO `store`.`alunos` (`nome`, `cidade`, `matricula`) VALUES ('{$nome}', '{$cidade}', '{$matricula}')";
    mysqli_query($conexao, $enviando);
}
?>