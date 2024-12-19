<?php
$pgAtual = basename($_SERVER['PHP_SELF'], '.php');
?>



<header class="topo-<?php echo $pgAtual; ?>">
    <div class="site">
        <div>
            <a href="index.php">
                <h1> Criativo Dev </h1>
            </a>
        </div>
        <button class="abrir-menu"></button>
        <nav class="menu">
            <button class="fechar-menu"></button>
            <ul>
            <li class="<?php echo $pgAtual != 'index' ? 'animate__animated animate__slideInUp' : ''; ?>"><a href="index.php" class="<?php echo $pgAtual == 'index' ? 'ativo' : ''; ?>">Home</a></li>
                <li class="<?php echo $pgAtual != 'sobre' ? 'animate__animated animate__slideInUp' : ''; ?>"><a href="sobre.php" class="<?php echo $pgAtual == 'sobre' ? 'ativo' : ''; ?>">Sobre</a></li>
                <li class="<?php echo $pgAtual != 'servicos' ? 'animate__animated animate__slideInUp' : ''; ?>"><a href="servicos.php" class="<?php echo $pgAtual == 'servicos' ? 'ativo' : ''; ?>">Serviços</a></li>
                <li class="<?php echo $pgAtual != 'port' ? 'animate__animated animate__slideInUp' : ''; ?>"><a href="port.php" class="<?php echo $pgAtual == 'port' ? 'ativo' : ''; ?>">Portfólio</a></li>
                <li class="<?php echo $pgAtual != 'contato' ? 'animate__animated animate__slideInUp' : ''; ?>"><a href="contato.php" class="<?php echo $pgAtual == 'contato' ? 'ativo' : ''; ?>">Contato</a></li>
            </ul>
            <button class="robotoBold animate__animated animate__slideInUp">Login</button>
        </nav>
    </div>
</header>
