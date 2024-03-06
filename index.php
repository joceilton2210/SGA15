<?php
// Caminho do arquivo de configuração
$configFile = 'config/database.php';

// Verifica se o arquivo de configuração existe
if (file_exists($configFile)) {
    // Se o arquivo existe, redireciona para a página de login
    header('Location: /public/login');
    exit;
} else {
    // Se o arquivo não existe, redireciona para a página de instalação
    header('Location: public/install');
    exit;
}
?>
