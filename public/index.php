<?php require_once "../autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Design Patterns</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">

    <div class="row">
        <h2 class="text-center">Formulário</h2>
        <div class="col-md-offset-3 col-md-6">
            <?php

            $form = new \JSRO\Form(new \JSRO\Validator(new \JSRO\Request()));
            $form->setShowMessage("middle");

            $nome = new \JSRO\Fields\Input("text", "nome", "nome", "", "");
            $nome->adicionaLabel("Nome:");

            $valor = new \JSRO\Fields\Input("text", "nome", "valor", "R$ 19.99", "");
            $valor->adicionaLabel("Valor:");

            $textarea = new \JSRO\Fields\Textarea("descricao", "descricao", "AUsu ahsuahu  uadhiaushd uiahsdiua shdu asdasd asdas dsdsdasd ia sgdas ilsaudaiou sgaiusgd aiyosdg oasdgt iasdgaisdg aiusdg aluisgdiya gsd asudhausgduasgdiasdg aiysgda iusdg iusgdyu gaius gasgduydgiausgd uy", "");
            $textarea->adicionaLabel("Descrição:");

            $options = [
                ["name" => "Tênis para corrida", "value" => "tenis-corrida"],
                ["name" => "Tênis para caminhada", "value" => "tenis-caminhada"],
                ["name" => "Sapatênis", "value" => "sapatenis"]
            ];

            $categoria = new \JSRO\Fields\Select("categoria", "categoria", $options, "");
            $categoria->adicionaLabel("Categoria");

            $button = new \JSRO\Fields\Input("submit", "button", "button", "Enviar", "btn btn-primary");

            $dados = [$nome, $valor, $textarea, $categoria, $button];

            $iterator = new \JSRO\IteratorValidado($dados);

            $form->populate($iterator);
            ?>
        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>