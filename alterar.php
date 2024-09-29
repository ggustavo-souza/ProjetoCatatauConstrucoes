<?php include ('inc/header.php') ?>
<?php 

include("conexao.php");

$id = $_POST["id"];
$endereco = $_POST['endereco'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$valor = $_POST['valor'];

$sqlupdate =  "update tabela_catatau set endereco='$endereco', descricao='$descricao',cadastramento='$data',preco=$valor where id=$id";

$resultado = @mysqli_query($conexao, $sqlupdate);
if (!$resultado) {
    echo ("<h2>Consulta Inválida</h2>" . mysqli_error($conexao));
} else {
    echo ("<div class='container mt-5 ms-2'>");
    echo ("<h1 class='fw-bold'>Registro Concluído</h1>");
    echo ("<a href='imoveis.php'><button class='btn btn-danger fw-bold mt-3' type='button'>VOLTAR</button></a>");
    echo ("</div>");
}
mysqli_close($conexao);
?>
</body>
</html>