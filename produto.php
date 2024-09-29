<?php include ('inc/header.php') ?>
  <div class="container mt-5">
    <?php
        include ('conexao.php');

        $id = base64_decode($_GET['id']);


        $query = mysqli_query($conexao, "select * from tabela_catatau where id = $id");

        if(!$query) {
            die('<p>Consulta Inválida: ' . @mysqli_error($conexao) . '</p>');
        }

        $dados = mysqli_fetch_array($query);
        echo ("<div class='col d-flex justify-content-center'>");
        echo ("<div class=\"card mx-auto shadow shadow-5 m-3 p-3\">");
        if (empty($dados['imagem'])) {
            $imagem = 'SemImagem.png';
        } else {
            $imagem = $dados['imagem'];
        }
        echo ("<div class='card-body'>");
        echo ("<img class='card-img-top rounded' src='imagens/$imagem' width='500px' height='400px'>");
        echo ("<h1 class='card-title'> Imóvel " . $dados['id'] . "</h1>");
        echo ("<p class='card-text'><b> Endereço: </b>" . $dados['endereco'] . "</p>");
        echo ("<p class='card-text'><b> ID: </b>" . $dados['id'] . "</p>");
        echo ("<p class='card-text'><b> Descrição: </b>" . $dados['descricao'] . "</p>");
        echo ("<p class='card-text'><b> Proprietário: </b>" . $dados['prop'] . "</p>");
        $Ndata = date_create($dados['cadastramento']);
        echo ("<p class='card-text'><b> Data: </b>" . date_format($Ndata, "d/m/Y") . "</p>");
        echo ("<h3> <b>Preço: </b>" . "R$ " . number_format($dados['preco'], 2, ",",".") . "</h3>");
        echo ("<a href='javascript:history.back()'><button type='button' class='btn btn-warning mt-3 fw-bold'>VOLTAR</button></a>");
        echo ("</div>");
        echo ("</div>");
        echo ("</div>");

        mysqli_close($conexao);

    ?>

  </div>
  </body>
  </html>