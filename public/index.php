<?php
require_once "../autoload.php";

$request = new \JSRO\Request();
$validator = new \JSRO\Validator($request);
$form = new JSRO\Form($validator);
$form->setAction("#")->setMethod("post");
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
            <?php
            $form = new \JSRO\Form(new \JSRO\Validator(new \JSRO\Request()));

            $fieldset = new \JSRO\Fields\Fieldset();
            $fieldset->setId("fieldSetId")->setName("fieldSetName");

            $input = new \JSRO\Fields\InputField();
            $input->setId('userId')->setName('userName')->setType('text')->setClass('form-control');

            $label = new \JSRO\Fields\LabelField();
            $label->setId('userId')->setTitle('User');

            $input2 = new \JSRO\Fields\InputField();
            $input2->setId('passId')->setName('passName')->setType('password')->setClass('form-control');

            $label2 = new \JSRO\Fields\LabelField();
            $label2->setId('passId')->setTitle('Pass');

            $input3 = new \JSRO\Fields\InputField();
            $input3->setType('submit')->setClass('btn btn-primary')->setValue('Enviar');

            $fieldset->addField($input, $label);
            $fieldset->addField($input2, $label2);
            $fieldset->addField($input3);

            $form->addField($fieldset);

            echo $form->render();
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