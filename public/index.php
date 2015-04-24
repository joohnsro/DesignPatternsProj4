<?php
require_once "../autoload.php";

use JSRO\Form;
use JSRO\Campo;
use JSRO\TemplateHorizontal\FormHorizontal;
use JSRO\TemplateHorizontal\InputTextHorizontal;
use JSRO\TemplateHorizontal\InputEmailHorizontal;
use JSRO\TemplateHorizontal\InputSubmitHorizontal;
use JSRO\TemplateInline\FormInline;
use JSRO\TemplateInline\InputTextInline;
use JSRO\TemplateInline\InputEmailInline;
use JSRO\TemplateInline\InputSubmitInline;

$campo1 = new Campo();
$campo2 = new Campo();
$campo3 = new Campo();

$campo1->setId("usuarioId")->setName("usuario")->setClass("form-control")->setTitle("Usuário")->setPlaceholder("Digite o usuário.")->setLabel("Usuário")->setLabelCol("col-md-4")->setCampoCol("col-md-8");
$campo2->setId("emailId")->setName("email")->setClass("form-control")->setTitle("Email")->setPlaceholder("Digite o email.")->setLabel("Email")->setLabelCol("col-md-4")->setCampoCol("col-md-8");
$campo3->setClass("btn btn-primary")->setValue("Enviar");
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
        <h2 class="text-center">Formulário Inline</h2>
        <div class="col-md-offset-2 col-md-8 text-center">
            <?php
            $input1 = new InputTextInline($campo1);
            $input2 = new InputEmailInline($campo2);
            $input3 = new InputSubmitInline($campo3);

            $template = new FormInline();

            $form = new Form($template);
            $form->setAction("#")->setMethod("post");
            $form->adicionarCampos($input1);
            $form->adicionarCampos($input2);
            $form->adicionarCampos($input3);

            $form->render();
            ?>
        </div>
    </div>

    <hr>

    <div class="row">
        <h2 class="text-center">Formulário Horizontal</h2>
        <div class="col-md-offset-3 col-md-6">
            <?php
            $input4 = new InputTextHorizontal($campo1);
            $input5 = new InputEmailHorizontal($campo2);
            $input6 = new InputSubmitHorizontal($campo3);

            $template2 = new FormHorizontal();

            $form2 = new JSRO\Form($template2);
            $form2->setAction("#")->setMethod("post");
            $form2->adicionarCampos($input4);
            $form2->adicionarCampos($input5);
            $form2->adicionarCampos($input6);

            $form2->render();
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