<?php
// Verifica se o parâmetro 'name' foi enviado na URL
if (isset($_GET['nome'])) {
    // Obtém o valor do parâmetro 'name'
    $nome = htmlspecialchars($_GET['nome']); // Sanitiza o input para evitar XSS

    // Retorna uma mensagem de boas-vindas personalizada
    echo "Olá, $nome! Bem-vindo(a) ao sistema.";
} else {
    // Caso o parâmetro 'name' não esteja presente
    echo "Por favor, forneça o parâmetro 'name' na URL.";
}
?>