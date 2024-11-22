<?php
$paginaCorrente = basename($_SERVER['SCRIPT_NAME']);
//echo $pagina_corrente;
?>

<div class="navbar-fixed">
    <nav class="#607d8b blue-grey">
        <div class="nav-wrapper container">
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons" style="color: black;">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li> <a class="white-text" <?php if ($paginaCorrente == 'index.php') {
                                                echo 'style="text-decoration: underline;"';
                                            } ?> href="index.php">Inicio</a></li>
                <li> <a class="white-text" <?php if ($paginaCorrente == 'telaInicial.php') {
                                                echo 'style="text-decoration: underline;"';
                                            } ?> href="telaInicial.php">Cadastro de vendas</a></li>
              
            </ul>
        </div>
    </nav>
</div>

<!-- Sidenav para Mobile -->
<ul id="mobile" class="sidenav">
    <li><a href="index.php"><i class="material-icons">home</i> Home</a></li>
    <li><a href="telaInicial.php">Cadastro de vendas</a></li>
    
</ul>