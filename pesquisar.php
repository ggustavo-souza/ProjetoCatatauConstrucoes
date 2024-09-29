<?php include ('inc/header.php') ?>
  <div class="container mt-5">
<?php 

    include ('conexao.php');

    $pesquisar = $_POST['barra'];
    echo ("<div class='row d-flex justify-content-center text-center'>");
    echo ('<h3><u>Resultados para "' . $pesquisar . '"</u></h3>');
    echo ("</div>");
    $dados = "SELECT * FROM tabela_catatau WHERE endereco LIKE '%$pesquisar%' LIMIT 5";
    $resultado = mysqli_query($conexao, $dados);
    if ($pesquisar != ""){
        if($resultado->num_rows > 0)
        {
            while($dados = mysqli_fetch_array($resultado)){
                $id = base64_encode($dados['id']);
                echo ("<div class='row d-flex justify-content-center'>");
                echo ("<a href='produto.php?id=$id' style='text-decoration: none;'>");
                echo ("<div class='card shadow shadow-4 m-3 col-4'>");
                echo ("<div class='card-body p-2'>");
                echo ("<h2>Imóvel: " . $dados['id'] . "</h2><br>");
                if (empty($dados['imagem'])) {
                    $imagem = 'SemImagem.png';
                } else {
                    $imagem = $dados['imagem'];
                }
                echo ("<img src='imagens/$imagem' class='card-img-top mb-3'>");
                echo ("</div>");
                echo ("</a>");
                echo ("</div>");
                echo ("</div>");

            }
        } else {
            echo ("<h1>Nada foi encontrado!</h1>");
            echo ("<a href='pgs/imoveis.php'><button class='btn btn-danger fw-bold mt-3' type='button'>VOLTAR</button></a>");
        }
    } else {
        echo ("<h1>Você não pesquisou nada!</h1>");
        echo ("<a href='pgs/imoveis.php'><button class='btn btn-danger fw-bold mt-3' type='button'>VOLTAR</button></a>");
    }
    mysqli_close($conexao);
?>
</div>
</body>
</html>