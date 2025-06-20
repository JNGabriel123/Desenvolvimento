<?php
include('../conexao.php');

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $verifica = mysqli_query($conexao, "SELECT * FROM user_client WHERE email='$email'");
    if (mysqli_num_rows($verifica) > 0) {
        echo "<script>alert('E-mail já cadastrado!');</script>";
    } else {
        $sql = "INSERT INTO user_client (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if (mysqli_query($conexao, $sql)) {
            echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login.php';</script>";
        } else {
            echo "Erro: " . mysqli_error($conexao);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form method="POST">
            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="email" name="email" placeholder="Seu e-mail" required>
            <input type="password" name="senha" placeholder="Sua senha" required>
            <button type="submit">Cadastrar</button>
        </form>
        <p>Já tem conta? <a href="login.php">Faça login</a></p>
    </div>
</body>
</html>
