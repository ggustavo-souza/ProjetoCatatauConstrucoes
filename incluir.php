<?php include ('inc/header.php') ?>
        <?php
            include ('conexao.php');

            $endereco = $_POST['1campo'];
            $descricao = $_POST['2campo'];
            $prop = $_POST['3campo'];
            $cadastramento = $_POST['4campo'];
            $destino = 'imagens/';
            $imagem = $destino . basename($_FILES['6campo']['name']);
            $img = '';
            $arquivotemp = $_FILES['6campo']['tmp_name'];

            if(move_uploaded_file($arquivotemp, $imagem)) {
              $img = basename($imagem);
            } else {
              echo ("<h2>Ocorreu um erro.</h2>");
            }
            
            $preco = $_POST['5campo'];

            $sqlinsert = "insert into tabela_catatau (endereco, descricao, prop, cadastramento, imagem, preco) values ('$endereco', '$descricao', '$prop', '$cadastramento', '$img', $preco)";

            $resultado = @mysqli_query($conexao, $sqlinsert);
            if (!$resultado) {
              die('Consulta Inválida: ' . @mysqli_error($conexao));
            } else {
              echo ("<div class='container mt-3 ms-2'>");
              echo ("<h1 class='fw-bold'>Registro Concluído</h1>");
              echo ("<a href='pgs/imoveis.php'><button class='btn btn-danger fw-bold mt-3' type='button'>VOLTAR</button></a>");
              echo ("</div>");
            }
            mysqli_close($conexao);
        ?>

    </body>
</html>
        
        