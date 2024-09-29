<?php include ('inc/header.php') ?>

        <?php 
            include('conexao.php');
            
            $id = $_POST['id'];

            $sqlconsulta = "select * from tabela_catatau where id = $id";

            $resultado = @mysqli_query($conexao, $sqlconsulta);
            if (!$resultado) {
                echo ("<h2>Consulta Inválida</h2>" . mysqli_error($conexao));
            }
            else {  
                $num = mysqli_num_rows($resultado);
                if ($num==0){
                    echo "<h2>Código Inválido</h2>";
                    echo '<input class="btn btn-danger" type="button" onclick="window.location='."'pgs/imoveis.php'".';" value="Voltar"><br><br>';
                    exit;
                    }else{
                        $dados=mysqli_fetch_array($resultado);
                    }
            } 
            @mysqli_close($conexao);
        ?>

        <div class="container mt-5">
        <form name="produto" action="alterar.php" method="post">
            <b>ID:</b> <input type="number" name="id" value='<?php echo $dados['id']; ?>' readonly><br><br>
            <b>Endereço:</b> <input type="text" name="endereco" maxlength='80' style="width:550px" value='<?php echo $dados['endereco']; ?>'><br><br>
            <b>Descrição: </b><br><textarea name="descricao" rows='3' cols='100' style="resize: none;" ><?php echo $dados['descricao']; ?></textarea><br><br>
            <b>Data: </b> <input type="date" name="data" value='<?php $Ndata = date_create($dados['cadastramento']);
                        echo ("<p> <b>Data: </b>" . date_format($Ndata, "d/m/Y") . "</p>" ); ?>'><br>
            <b>Valor: R$ </b><input type="number" step="0.01" name="valor" value='<?php echo $dados['preco']; ?>'> <br><br>
            <input class="btn btn-success fw-bold" type="submit" value="ALTERAR">&nbsp;&nbsp;
            <input class="btn btn-danger fw-bold" type="reset" value="LIMPAR">
        </form>
        </div>
        </body>
</html>