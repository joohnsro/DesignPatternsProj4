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
            <?php
            $form = new Form("#", "post");
            $form->adicionarCampos("input", "type='text' id='usuario' name='usuarioTxt' required", "Usuário: ");
            $form->adicionarCampos("input", "type='password' id='senha' name='senhaTxt' required", "Senha: ");
            $form->adicionarCampos("input", "type='submit' value='Enviar'");
            $form->render();
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