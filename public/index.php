<?php
require_once "../autoload.php";

use JSRO\Form;
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

    <?php if (isset($_POST['usuario'])) { ?>
        <div class="row">
            <div class="col-md-offset-3 col-md-6 text-center" style="background-color: #eaeaea; padding: 30px 0 30px 0; margin-top: 30px;">
                <p class="h5"><strong>:: DADOS DE USUÁRIO ::</strong></p>
                <p class="h4"><strong>Usuário</strong> - <?php echo $_POST['usuario']; ?></p>
                <p class="h4"><strong>Email</strong> - <?php echo $_POST['email']; ?></p>
            </div>
        </div>
    <?php } ?>

    <div class="row">
        <h2 class="text-center">Formulário Horizontal</h2>
        <div class="col-md-offset-3 col-md-6">
            <div class="form-group">
                <?php
                $label1 = new \JSRO\Fields\LabelField();
                $label1->createField("usuario", "Usuário");
                $input1 = new \JSRO\Fields\InputField();
                $input1->createField("text", "usuario", "usuarioTxt", "form-control", "", "");
                ?>
            </div>
            <div class="form-group">
                <?php
                $label2 = new \JSRO\Fields\LabelField();
                $label2->createField("senha", "Senha");
                $input2 = new \JSRO\Fields\InputField();
                $input2->createField("password", "senha", "senhaTxt", "form-control", "", "");
                ?>
            </div>
            <div class="form-group">
                <?php
                $input3 = new \JSRO\Fields\InputField();
                $input3->createField("submit", "", "", "btn btn-primary", "Enviar", "");
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