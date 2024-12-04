<?php

// Iniciando a sessão

session_start();

// Controlando o acesso a aplicação

define('CONTROL', true);

// Verificando se há algum usuário logado

$usuario_logado = $_SESSION['usuario'] ?? null;

// Verificando qual a rota na URL

if (empty($usuario_logado)) {
    $rota = 'login';
} else {
    $rota = $_GET['rota'] ?? 'home';
}

// Analisando a rota

$rotas =
    [
        'login' => 'login.php',
        'home' => 'home.php'
    ];
