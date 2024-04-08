<?php session_start();
include 'exibir_produtos.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Produto</title>

    <!--link para conexão com o bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4 mt-4">Cadastro de Produtos</h2>
                <form action="array.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" name="nome">
                        <label for="nome">Nome do produto</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade"
                            name="quantidade">
                        <label for="quantidade">Quantidade</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="estoque" placeholder="Estoque" name="estoque">
                        <label for="estoque">Estoque</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="valor" placeholder="R$xx,xx" name="valor"
                            step="any">
                        <label for="valor">Valor</label>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                    <button type="submit" class="btn btn-danger mt-3" formaction="excluir_produto.php">Excluir</button>


                </form>
            </div>
        </div>

        <?php 
        //var_dump($_SESSION['produtos']);        
        exibirProdutos(); ?>

    </div>

</body>

</html>