<?php include ('inc/header.php') ?>

        <?php 
            include('conexao.php');
            
            $codigo = $_POST['codigo'];

            $sqldeletar = "delete from tabela_catatau where id = $codigo";

            $resultado = @mysqli_query($conexao, $sqldeletar);
            if (!$resultado) {
                die('Consulta Inválida: ' . @mysqli_error($conexao));
            } else {
              echo ("<div class='container mt-5 ms-2'>");
              echo ("<h1 class='fw-bold'>Registro Concluído</h1>");
              echo ("<a href='pgs/imoveis.php'><button class='btn btn-danger fw-bold mt-3' type='button'>VOLTAR</button></a>");
              echo ("</div>");
            }

            mysqli_close($conexao);
        ?>
        </body>
</html>