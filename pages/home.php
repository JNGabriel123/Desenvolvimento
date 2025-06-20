<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/style_principal.css">
    <link rel="shortcut icon" href="../assets/img/icons/unmind_image.png" type="image/x-icon">

    <link rel="stylesheet" href="../assets/fonts/utilities.css" />

    <link rel="stylesheet" href="../assets/css/avatar.css">
</head>
<body>
    <header>
        <div class="header">
            <div class="image ">
                <a href="home.php"><img src="../assets/img/unmind_image.png" alt="Logo" class="logo"></a>
                <!-- <img src="assets/img/UNIMIND.png" alt="logo" class="logo_text">
                <img src="assets/img/unmind_logo.png" alt="" class="logo_text_mobile"> -->
            </div>
            <nav>
                <div class="menu" id="menu">
                    <a href="home.php" class="home">Home</a>
                    <a href="../modulo.php">Modulos</a>
                    <a href="#comunidade">Comunidade</a>
                    <a href="#suporte">Suporte</a>
                </div>
                
            </nav>

            <div class="menu-usuario">
                <img src="../assets/img/avatar.png" alt="Avatar" class="avatar">
                <div class="dropdown">
                    <a href="perfil.php">Perfil</a>
                    <a href="#">Ajuda</a>
                    <a href="#">Mais Informações</a>
                    <a href="pages/logout.php">Sair</a>
                </div>
            </div>
            <!-- <div class="btn_login">
                <a href="logout.php"><button class="btn text-button">Sair</button></a>
                    
            </div> -->
        </div>
    </header>
    
    <main class="">
        <a href="http://wa.me/5567999552173?text=Olá, estou interessado em comprar a UNIMIND legacy!" class="btn_comprar" target="_blank">Comprar</a>
    </main>

    <footer>
        <p>&copy; 2025 Transforme Sua Vida. Todos os direitos reservados.</p>
    </footer>
    <!-- <div class="container">
        <h2>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h2>
        <p>Você está logado na sua área restrita.</p>
        <a href="logout.php"><button>Sair</button></a>
    </div> -->
</body>
</html>
