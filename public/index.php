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

// Se o usuário está logado, mas tenta voltar a rota login, ele será redirecionado para home

if (!empty($usuario_logado) && $rota == 'login') {
    $rota = 'home';
}

// Analisando a rota

$rotas =
    [
        'login' => 'login.php',
        'home' => 'home.php',
        'page1' => 'page1.php',
        'page2' => 'page2.php',
        'page3' => 'page3.php',
        'logout' => 'logout.php',
    ];

if (!key_exists($rota, $rotas)) {
    die('Acesso negado!');
}

require_once $rotas[$rota];
