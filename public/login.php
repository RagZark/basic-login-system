<?php
defined('CONTROL') or die('Acesso negado!');

// Verificar se o formulário foi submetido

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar se o usuário e senha foram submetidos
    $usuario = $_POST['usuario'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $erro = null;

    if (empty($usuario) || empty($senha)) {
        $erro = 'Usuário e senha são obrigatórios!';
    }

    // Verificando se o usuário e senha são válidos (match)
    if (empty($erro)) {
        $usuarios = require_once __DIR__ . '/../inc/usuarios.php';

        foreach ($usuarios as $user) {
            if ($user['usuario'] == $usuario && password_verify($senha, $user['senha'])) {
                // Efetuar Login
                $_SESSION['usuario'] = $usuario;

                // Voltar a página inicial
                header('location: index.php?rota=home');
            }
        }

        // Login invalido
        $erro = "Usuário e/ou senha inválidos";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div>
        <form action="index.php?rota=login" method="post">
            <h3>Login</h3>
            <div>
                <label for="usuario">Usuário</label>
                <input type="email" name="usuario" id="usuario">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div>
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
    <?php if (!empty($erro)) : ?>
        <p style="color:red"><?= $erro ?></p>
    <?php endif; ?>
</body>

</html>