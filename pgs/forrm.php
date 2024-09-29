<?php include ('../inc/header.php') ?>
        
        
        
        <div class="container col-md-6 mt-4 border border-3 border-dark shadow shadow-5 border-opacity-75 p-5">
            <form action="<?php echo PATH?>incluir.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="1campo">Endereço</label><br>
                    <input class="fo form-control border border-dark" type="text" id="1campo" name="1campo" maxlength="50" required><br>
                </div>
                <div>
                    <label for="2campo">Descrição do Imóvel</label><br>
                    <input class="fo form-control border border-dark" type="text" id="2campo" name="2campo" maxlength="50" required><br>
                </div>
                <div>
                    <label for="3campo">Proprietário do Imóvel</label><br>
                    <input class="fo form-control border border-dark" type="text" id="3campo" name="3campo" maxlength="50" required><br>
                </div>
                <div>
                    <label for="4campo">Data do Cadastramento</label><br>
                    <input class="fo form-control border border-dark" type="date" id="4campo" name="4campo" required><br>
                </div>
                <div>
                  <label for="5campo">Preço</label>
                  <input type="number" id="5campo" name="5campo" required class="fo form-control border border-dark fo-img"><br>
                </div>
                <div>
                    <label for="6campo">Imagem</label>
                    <input type="file" id="6campo" name="6campo" required class="fo form-control border border-dark fo-img"><br>
                </div>
                
                
                <input class="btn btn-success fw-bold" type="submit" value="CONCLUIR">
                <input class="btn btn-danger fw-bold" type="reset" value="APAGAR">
            </form>
        </div> 
    </body>

</html>