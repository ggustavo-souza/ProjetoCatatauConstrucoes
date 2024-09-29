<?php
  mysqli_report(MYSQLI_REPORT_ERROR);
  $host = "localhost";
  $user = "root";
  $pass = "";
  $banco = "banco_catatau";

  $conexao = mysqli_connect($host, $user, $pass, $banco)
  or die("Erro com a conexão");
  mysqli_set_charset($conexao, "utf8");

  function crip_senha($senha) {
    
  }
  
  
