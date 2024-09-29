<?php include ('../inc/header.php') ?>
        <div class="container grid">
            <form action="<?php echo PATH?>pesquisar.php" method="post" class="mt-5 row container">
              <div class="col-auto">
                <input class="form-control" id="barra" name="barra" type="text" value="Pesquisar pelo endereço.." onfocus="apagar()">
              </div>
              <div class="col-auto">
                <input type="submit" value="ENVIAR" class="btn btn-success fw-bold">
              </div>
            </form>
                <?php
                    include ('../conexao.php');
                    ini_set('default_charset', 'UTF-8');
                    $query = mysqli_query($conexao, "select * from tabela_catatau order by id");

                    function rowStart() {
                      echo ('<div class="mt-3 row text-center">');
                    }
                    function rowEnd() {
                      echo ("</div>");
                    }

                    if (!$query) {
                        die('Consulta Inválida: ' . @mysqli_error($conexao));
                    }
                    $cont = 0;
                    rowStart();
                    while ($dados = mysqli_fetch_array($query)) {
                        $id = base64_encode($dados['id']);
                        echo("<div class='col-4'>");
                        echo ("<a href='../produto.php?id=$id' style='text-decoration: none;'>");
                        echo ('<div class="card shadow shadow-4 m-3">');
                        if (empty($dados['imagem'])) {
                            $imagem = 'SemImagem.png';
                        } else {
                            $imagem = $dados['imagem'];
                        }
                        echo ("<img src='../imagens/$imagem' class='card-img-top' width='200px' height='300px'>");
                        echo ("<div class='card-body'>");
                        echo ("<h4>Imóvel " . $dados['id'] . "</h4>");
                        echo ("<p> <b>Endereço: </b> " . $dados['endereco'] . "</p>");
                        echo ("<p> <b>Descrição: </b> " . $dados['descricao'] . "</p>");
                        echo ("<p> <b>Proprietário: </b> " . $dados['prop'] . "</p>");
                        $Ndata = date_create($dados['cadastramento']);
                        echo ("<p> <b>Data: </b>" . date_format($Ndata, "d/m/Y") . "</p>" );
                        echo ("<p> <b>Preço: </b>" . "R$ " . number_format($dados['preco'], 2, ",",".") . "</p>");
                        echo ("</div>");
                        echo ("</div>");
                        echo ("</a>");
                        $cont++;
                        rowEnd();
                        
                        if ($cont==5) {
                          rowStart();
                          $cont == 0; 
                        }

                        $cont++;

                    }
                    
                ?>
        </div>
    </body>
</html>