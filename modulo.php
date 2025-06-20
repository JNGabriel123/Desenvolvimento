<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transforme Sua Vida</title>
    <link rel="stylesheet" href="assets/css/style_principal.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="assets/css/modulo.css" />
    <link rel="stylesheet" href="formatacao/alings.css" />
    <link
      rel="shortcut icon"
      href="assets/img/icons/unmind_image.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="assets/css/avatar.css" />

    <link rel="stylesheet" href="assets/fonts/utilities.css" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <style>
      .menu .modulo {
        color: rgb(38, 101, 236);
        font-size: 19px;
      }

      aside .poitsFormat {
        max-width: 50%;
        max-height: 47%;
        justify-content: center;
      }
    </style>
    <script>
      function toggleMenu() {
        const menu = document.getElementById("menu");
        const button = document.querySelector(".btn_menu");
        const isOpen = menu.classList.toggle("open");
        button.setAttribute("aria-expanded", isOpen);
      }
    </script>
    <header>
      <div class="header">
        <div class="image">
          <a href="index.html"
            ><img src="assets/img/unmind_image.png" alt="Logo" class="logo"
          /></a>
          <!--<img src="assets/img/UNIMIND.png" alt="logo" class="logo_text" />
          <img
            src="assets/img/unmind_logo.png"
            alt=""
            class="logo_text_mobile"
          /> -->
        </div>
        <nav>
          <div class="menu" id="menu">
            <a href="pages/home.php">Home</a>
            <a href="#modulo" class="modulo">Modulos</a>
            <a href="#comunidade">Comunidade</a>
            <a href="#suporte">Suporte</a>
          </div>
        </nav>

        <div class="menu-usuario">
          <img src="../assets/img/avatar.jpg" alt="Avatar" class="avatar">
          <div class="dropdown">
              <a href="perfil.php">Perfil</a>
              <a href="#">Ajuda</a>
              <a href="#">Mais Informações</a>
              <a href="pages/logout.php">Sair</a>
          </div>
        </div>
        <!-- <div class="btn_login">
          <a href="pages/logout.php"
            class="btn" ><button class="text-button">sair</button></a
          >
      </div> -->
    </header>

    <div class="container">
      <main class="main">
        <h1 class="text-title">Bem-vindo à sua jornada de evolução</h1>
        <p class="text-body">
          Esta é a sua central de aprendizado — com todos os módulos essenciais
          para desenvolver habilidades, mudar hábitos e transformar sua
          mentalidade.
        </p>

        <div class="modules-grid">
          <a href="assets/pages/modules/modulo01.html" class="module-card">
            <img
              src="assets/img/modulos/Capa comunicação.jpg"
              alt="Módulo 1"
              class="module-img"
            />
            <div class="module-info">
              <h3>Módulo 1</h3>
              <p>Status: 🔓 Em progresso</p>
            </div>
          </a>

          <a href="assets/pages/modules/modulo02.html" class="module-card">
            <img
              src="assets/img/modulos/Capa- Ferramentas Digitais.jpg"
              alt="Módulo 2"
              class="module-img"
            />
            <div class="module-info">
              <h3>Módulo 2</h3>
              <p>Status: ✅ Concluído</p>
            </div>
          </a>

          <a href="assets/pages/modules/modulo03.html" class="module-card">
            <img
              src="assets/img/modulos/CapaMentalidade.jpg"
              alt="Módulo 3"
              class="module-img"
            />
            <div class="module-info">
              <h3>Módulo 3</h3>
              <p>Status: 🔒 Bloqueado</p>
            </div>
          </a>

          <a href="assets/pages/modules/modulo04.html" class="module-card">
            <img
              src="assets/img/modulos/mentalidade.jpg"
              alt="Módulo 4"
              class="module-img"
            />
            <div class="module-info">
              <h3>Módulo 4</h3>
              <p>Status: 🔓 Em progresso</p>
            </div>
          </a>

          <a href="assets/pages/modules/modulo05.html" class="module-card">
            <img
              src="assets/img/modulos/mentalidadeImpre.jpg"
              alt="Módulo 5"
              class="module-img"
            />
            <div class="module-info">
              <h3>Módulo 5</h3>
              <p>Status: 🔒 Bloqueado</p>
            </div>
          </a>
        </div>
      </main>

      <aside class="sidebar aside">
        <div class="asidecontainer">
          <h2 class="aside-title" style="color: white;">Pontuação</h2>
          <div id="score-panel" class="score-panel" style="margin: 20px">
            <canvas id="pointsChart" class="poitsFormat"></canvas>
            <p id="levelText" class="level-text">Level 0</p>
            <p id="scoreText" class="score-text">
              Você tem 0 pontos. Faltam 10 para subir de nível!
            </p>

            <button onclick="addPoints(1)">Concluiu vídeo (+1)</button>
            <button onclick="addPoints(2)">Fez resumo (+2)</button>
            <button onclick="addPoints(5)">Concluiu um modulo (+5)</button>
          </div>
        </div>
      </aside>
    </div>

    <footer>
      <p>&copy; 2025 Transforme Sua Vida. Todos os direitos reservados.</p>
    </footer>
    
    <script src="js/interação.js"></script>
    <script src="js/points.js"></script>
  </body>
</html>
