<?php
defined('CONTROL') or die('Acesso negado!');

require_once "./importStyle.php";

$components = new Components();

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
    <?= $components->create_css(); ?>
    <title>Login</title>
</head>

<body>
    <div class="container is-flex is-justify-content-center is-align-items-center" style="height: 100vh;">
        <form class="box" style="width: 350px;" action="index.php?rota=login" method="post">
            <h3 class="title is-3 mb-5">Login</h3>
            <div class="field">
                <label for="usuario">Usuário</label>
                <div class="control">
                    <input class="input" type="email" name="usuario" id="usuario" placeholder="alex@example.com">
                </div>
            </div>
            <div class="field">
                <label for="senha">Senha</label>
                <div class="control">
                    <input class="input" type="password" name="senha" id="senha" placeholder="Password">
                </div>
            </div>
            <button class="button is-primary mt-3" type="submit">Entrar</button>
        </form>
    </div>
    <?php if (!empty($erro)) : ?>
        <p style="color:red"><?= $erro ?></p>
    <?php endif; ?>
</body>

</html>