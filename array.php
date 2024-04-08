<?php
session_start();

//VERIFICA SE FORAM ENVIADOS AS VARIAVEIS PELO POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//inicializa o array caso nao exista na variavel $_SESSION
    if(!isset($_SESSION['produtos'])){
        $_SESSION['produtos'] = array();
    }

//recebendo os dados do formulario
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$estoque = $_POST['estoque'];
$valor = $_POST['valor'];

//colocando os dados no array
$produto = array(
    'nome' => $nome,
    'quantidade' => $quantidade,
    'estoque' => $estoque,
    'valor' => $valor,
);

//adiciona no array na variavel
$_SESSION['produtos'] [] = $produto;


//var_dump($_SESSION['produtos']);
//redireciona para o index
header("Location: index.php");
exit;
}

?>