<?php
if (isset($_POST['submit']))
{
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cpf,rg,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cpf','$rg','$estado','$endereco')");
}
$mensagem = "Cadastro efetuado com sucesso!";
?>