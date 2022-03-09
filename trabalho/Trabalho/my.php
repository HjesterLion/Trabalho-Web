<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$escolha = filter_input(INPUT_POST, 'escolha',FILTER_SANITIZE_STRING);
$texto = filter_input(INPUT_POST, 'texto',FILTER_SANITIZE_STRING);


$result_cliente = "INSERT INTO cliente (Nome,Sobrenome,Email,Assunto,Texto,Criado) VALUE ('$nome','$sobrenome','$email','$escolha','$texto',NOW())";
$resultado_cliente = mysqli_query($conn,$result_cliente);


if(mysqli_insert_id($conn)){
    header("Location: Formulario.html");
}else{
    header("Location: Formulario.html");
}
?>
