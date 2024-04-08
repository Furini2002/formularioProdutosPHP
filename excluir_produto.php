<?php
session_start();

// Verifica se há produtos na sessão e remove o último se houver
if (isset($_SESSION['produtos']) && count($_SESSION['produtos']) > 0) {
    unset($_SESSION['produtos'][count($_SESSION['produtos']) - 1]);
}

header("Location: index.php");
exit;
?>
