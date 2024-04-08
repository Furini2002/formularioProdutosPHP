<?php

function exibirProdutos() {
    if(isset($_SESSION['produtos']) && !empty($_SESSION['produtos'])) {
        echo "<h2>Produtos:</h2>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        foreach($_SESSION['produtos'] as $produto) {
            echo "<div class='col-md-4 mb-4'>";
            echo "<div class='card'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $produto['nome'] . "</h5>";
            echo "<p class='card-text'>Quantidade: " . $produto['quantidade'] . "</p>";
            echo "<p class='card-text'>Estoque: " . $produto['estoque'] . "</p>";
            echo "<p class='card-text'>Valor: R$ " . number_format($produto['valor'], 2, ',', '.') . "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
    } else {
        echo "<h3>Nenhum produto cadastrado.</h3>";
    }
}
