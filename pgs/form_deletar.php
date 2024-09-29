<?php include ('../inc/header.php') ?>
        
        
        
        <div class="container col-md-6 mt-4 border border-3 border-dark shadow shadow-5 border-opacity-75 p-5">
            <form name="produto" action="<?php echo PATH?>deletar.php" method="post">
                <div>
                    <label for="codigo">ID do Produto que Deseja Deletar</label><br>
                    <input class="fo form-control border border-dark" type="number" name="codigo" required><br>
                <input class="btn btn-success fw-bold" type="submit" value="CONCLUIR">
                <input class="btn btn-danger fw-bold" type="reset" value="APAGAR">
            </form>
        </div> 
    </body>

</html>