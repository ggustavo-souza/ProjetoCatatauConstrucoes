<?php include("../inc/header.php"); ?>


<div class="container d-flex justify-content-center">
    <div class="col-7 border border-2 border-black rounded p-4 mt-5 shadow shadow-5">
        <form class="form" action="logar.php" method="post">
            <h3 class="mb-4 fw-bold">Fazer Login</h3>
            <div>
                <label for="user" class="fw-bold mb-2">USUÁRIO</label>   
                <input class="form-control" type="text" name="user" required>
            </div>
            <div class="mt-5">
                <label for="senha" class="fw-bold mb-2">SENHA</label>
                <input class="form-control" type="password" name="senha" required>
            </div>
            <button class="btn btn-success fw-bold mt-5" type="submit">CONCLUIR</button>
            <a href='../homepage.php'><button class='btn btn-danger fw-bold mt-5 ms-2' type='button'>VOLTAR</button></a>
        </form>
        <div class="d-flex justify-content-center mt-4">
            <a href="cadastro.php" class="fw-bold ">Não possui cadastro? Clique aqui!</a>
        </div>
    </div>
</div>


