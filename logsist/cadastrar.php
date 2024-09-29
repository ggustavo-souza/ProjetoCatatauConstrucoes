<?php 

include("../inc/header.php");
include("../conexao.php");

$usuario_log = $_POST['user'];
$senha_log = $_POST['senha'];
$seletor = "select usuario from usuarios_catatau where usuario = '$usuario_log' ";
$select = mysqli_query($conexao, $seletor);
$array = mysqli_fetch_array($select);
$login_array = $array["usuario"];

if ($login_array == $usuario_log) {
    echo ("<h1>Este login já existe!</h1>");
    echo ("<a href='login.php'><button class='btn btn-danger fw-bold mt-3' type='button'>VOLTAR</button></a>");
} else {
    $inserir = "INSERT INTO usuarios_catatau (usuario, senha) VALUES ('$usuario_log', '$senha_log')";

    $inserir_usuario = @mysqli_query($conexao, $inserir );

    if(!$inserir_usuario) {
        die("Algo deu errado!" . @mysqli_error($conexao));
    } else {
        echo ("<div class='container mt-3 ms-2'>");
        echo ("<h1 class='fw-bold'>Registro Concluído</h1>");
        echo ("<a href='../homepage.php'><button class='btn btn-danger fw-bold mt-3' type='button'>VOLTAR</button></a>");
        echo ("</div>");
    }
}