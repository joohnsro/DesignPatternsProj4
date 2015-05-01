<?php
require_once "../autoload.php";

$request = new \JSRO\Request();
$validator = new \JSRO\Validator($request);
$form = new JSRO\Form($validator);

$label1 = $form->createField(new \JSRO\Fields\LabelField(), array("id" => "usuario", "title" => "Usuário"));
$input1 = $form->createField(new \JSRO\Fields\InputField(), array("id" => "usuario", "name" => "nameTxt", "type" => "text", "class" => "form-control"));
$label2 = $form->createField(new \JSRO\Fields\LabelField(), array("id" => "senha", "title" => "Senha"));
$input2 = $form->createField(new \JSRO\Fields\InputField(), array("id" => "senha", "name" => "senha", "type" => "password", "class" => "form-control"));
$input3 = $form->createField(new \JSRO\Fields\InputField(), array("type" => "submit", "class" => "btn btn-primary", "value" => "Enviar"));
?>
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
        <h2 class="text-center">Formulário Horizontal</h2>
        <div class="col-md-offset-3 col-md-6">
            <div class="form-group">
                <?php
                $label1->getField();
                $input1->getField();
                ?>
            </div>
            <div class="form-group">
                <?php
                $label2->getField();
                $input2->getField();
                ?>
            </div>
            <div class="form-group">
                <?php
                $input3->getField();
                ?>
            </div>
        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>