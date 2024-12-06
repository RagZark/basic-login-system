<?php
defined('CONTROL' or die('Acesso negado!'));

?>

<hr>
<span class="subtitle is-5">Usuário: <strong><?= $_SESSION['usuario'] ?></strong></span>
<span>
    <a href="?rota=logout">Sair</a>
</span>
<hr>

<nav class="navbar has-background-black-ter if-flex is-justify-content-space-evenly" role="navigation">
    <a class="navbar-item has-text-primary-light" href="?rota=home">Home</a>
    <a class="navbar-item has-text-primary-light" href="?rota=page1">Pagina1</a>
    <a class="navbar-item has-text-primary-light" href="?rota=page2">Pagina2</a>
    <a class="navbar-item has-text-primary-light" href="?rota=page3">Pagina3</a>
    <a class="navbar-item has-text-primary-light" href="?rota=logout">Sair</a>

</nav>