<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="imagens/catatau.png">
  <link href="<?php echo PATH ?>bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo PATH ?>css/homepage.css">
  <link rel="stylesheet" href="<?php echo PATH ?>css/decoracao.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald'>
  <script src="<?php echo PATH ?>js/homepage.js"></script>
  <script src="<?php echo PATH ?>bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
  <script src="<?php echo PATH ?>js/imoveis.js"></script>
  <title>Catatau Construções</title>
</head>

<body style="background-color: whitesmoke;" class="user-select-none" oncontextmenu="return false;">
  <div class="xbar pb-1">
    <nav class="navbar position-fixed">
      <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="bootstrap" viewBox="0 0 118 94">
          <title></title>
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
          </path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
          <path
            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="bricks" viewBox="0 0 16 16">
          <path
            d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5zM3 4v2h4.5V4zm5.5 0v2H13V4zM3 10v2h4.5v-2zm5.5 0v2H13v-2zM1 1v2h3.5V1zm4.5 0v2h5V1zm6 0v2H15V1zM1 7v2h3.5V7zm4.5 0v2h5V7zm6 0v2H15V7zM1 13v2h3.5v-2zm4.5 0v2h5v-2zm6 0v2H15v-2z" />
        </symbol>
        <symbol id="lamp" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M5.04.303A.5.5 0 0 1 5.5 0h5c.2 0 .38.12.46.303l3 7a.5.5 0 0 1-.363.687h-.002c-.15.03-.3.056-.45.081a32.731 32.731 0 0 1-4.645.425V13.5a.5.5 0 1 1-1 0V8.495a32.753 32.753 0 0 1-4.645-.425c-.15-.025-.3-.05-.45-.08h-.003a.5.5 0 0 1-.362-.688l3-7ZM3.21 7.116A31.27 31.27 0 0 0 8 7.5a31.27 31.27 0 0 0 4.791-.384L10.171 1H5.83L3.209 7.116Z" />
          <path
            d="M6.493 12.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.052.075l-.001.004-.004.01V14l.002.008a.147.147 0 0 0 .016.033.62.62 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.62.62 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411" />
        </symbol>
        <symbol id="cart" viewBox="0 0 16 16">
          <path
            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
        </symbol>
        <symbol id="funnel" viewBox="0 0 16 16">
          <path
            d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z" />
        </symbol>
        <symbol id="symform" viewBox="0 0 16 16">
          <path
            d="M3.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5H12a.5.5 0 0 1 0-1h.5A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1H4a.5.5 0 0 1 0 1z" />
          <path
            d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5" />
        </symbol>
        <symbol id="imo" viewBox="0 0 16 16">
          <path
            d="M4 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2m0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4m8-1a1 1 0 1 1 0-2 1 1 0 0 1 0 2m0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4M.115 3.18A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 14 12H2a.5.5 0 0 1-.491-.408l-1.5-8a.5.5 0 0 1 .106-.411zm.987.82 1.313 7h11.17l1.313-7z" />
          <path fill-rule="evenodd"
            d="M6 1a2.498 2.498 0 0 1 4 0c.818 0 1.545.394 2 1 .67 0 1.552.57 2 1h-2c-.314 0-.611-.15-.8-.4-.274-.365-.71-.6-1.2-.6-.314 0-.611-.15-.8-.4a1.497 1.497 0 0 0-2.4 0c-.189.25-.486.4-.8.4-.507 0-.955.251-1.228.638q-.136.194-.308.362H3c.13-.147.401-.432.562-.545a1.6 1.6 0 0 0 .393-.393A2.5 2.5 0 0 1 6 1" />
        </symbol>
        <symbol id="delete" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
          <path
            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
        </symbol>
        <symbol id="telhado" viewBox="0 0 16 16">
          <path
            d="M2.5 0a.5.5 0 0 1 .5.5V2h10V.5a.5.5 0 0 1 1 0v15a.5.5 0 0 1-1 0V15H3v.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5M3 14h10v-3H3zm0-4h10V7H3zm0-4h10V3H3z" />
        </symbol>
        <symbol id="login" viewBox="0 0 16 16">
          <path
            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
        </symbol>
      </svg>

      <div class="d-flex flex-column ps-2" style="width: 4.5rem;">
        <button class="btn xbtn rounded-top rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#xmenu"
          aria-expanded="false" aria-controls="xmenu">
          <img class="pe-none" width="40" height="55" src="<?php echo PATH ?>imagens/catatau.png"></img>
        </button>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center collapse collapse-horizontal" id="xmenu">
          <li class="nav-item">
            <a href="<?php echo PATH ?>logsist/login.php" class="nav-link py-3 border-bottom rounded-0 xbtnhover"
              aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
              <button class="btn xbtn rounded-top rounded-0" type="button">
                <svg class="pe-none" aria-hidden="true" width="24" height="24" role="img" aria-label="Login">
                  <use xlink:href="#login" />
                </svg>
              </button></a>
          </li>
          <li class="nav-item">
            <a href="<?php echo PATH ?>homepage.php" class="nav-link py-3 border-bottom rounded-0 xbtnhover"
              aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="pe-none" aria-hidden="true" width="24" height="24" role="img" aria-label="Home">
                <use xlink:href="#home" />
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php echo PATH ?>pgs/tijolos.php" class="nav-link py-3 border-bottom rounded-0 xbtnhover"
              title="Básico" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="pe-none" width="24" height="24" role="img" aria-label="Básico">
                <use xlink:href="#bricks" />
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php echo PATH ?>pgs/decoracao.php" class="nav-link py-3 border-bottom rounded-0 xbtnhover"
              title="Acabamento" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="pe-none" width="24" height="24" role="img" aria-label="Acabamento">
                <use xlink:href="#lamp" />
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php echo PATH ?>pgs/lojas.php" class="nav-link py-3 rounded-bottom rounded-0 xbtnhover"
              title="Lojas" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="pe-none" width="24" height="24" role="img" aria-label="Lojas">
                <use xlink:href="#cart" />
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php echo PATH ?>pgs/forrm.php" class="nav-link py-3 rounded-bottom rounded-0 xbtnhover"
              title="Inserir Produto" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="pe-none" width="24" height="24" role="img" aria-label="Formulário">
                <use xlink:href="#symform" />
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php echo PATH ?>pgs/imoveis.php" class="nav-link py-3 rounded-bottom rounded-0 xbtnhover"
              title="Imóveis" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="pe-none" width="24" height="24" role="img" aria-label="Formulário">
                <use xlink:href="#imo" />
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php echo PATH ?>pgs/form_deletar.php" class="nav-link py-3 rounded-bottom rounded-0 xbtnhover"
              title="Deletar" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="pe-none" width="24" height="24" role="img" aria-label="Deletar">
                <use xlink:href="#delete" />
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php echo PATH ?>pgs/form_consultar.php" class="nav-link py-3 rounded-bottom rounded-0 xbtnhover"
              title="Deletar" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="pe-none" width="24" height="24" role="img" aria-label="Deletar">
                <use xlink:href="#funnel" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container px-4 text-center">
      <div class="row gx-5">
        <div class="col">
          <div class="p-0">
            <h1 class="xtitulo">CATATAU</h1>
          </div>
        </div>
      </div>
    </div>
  </div>