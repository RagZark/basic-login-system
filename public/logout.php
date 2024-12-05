<?php
defined('CONTROL') or die('Acesso negado!');

// Efetuando logout

session_destroy();

// Voltar para pagina inicial

header('location: index.php?rota=login');
