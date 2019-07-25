<?php
$templateCss = array();
$templateJs = array();
?>
<!DOCTYPE html><html lang="pt-br"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, user-scalable=1.0, initial-scale=1.0">
<title><?= $this->title ." | " .SITE_NAME ?></title>

<link rel="stylesheet" href="<?= ASSETS ?>css/reset.css">

<!-- Template Styles -->
<?php foreach ($templateCss as $style): ?>
<link rel="stylesheet" href="<?= REL_TEMPLATE .$this->template ."/" .$style ?>.css">
<?php endforeach ?>
<!-- View Styles -->
<?php foreach ($this->styles as $style): ?>
<link rel="stylesheet" href="<?= REL_PAGE .$this->controllerName ."css/" .$style ?>.css">
<?php endforeach ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- TemplateScripts -->
<?php foreach ($templateJs as $script): ?>
<script src="<?= REL_TEMPLATE .$this->template ."/" .$script ?>.js"></script>
<?php endforeach ?>
<!-- View Scripts -->
<?php foreach ($this->scripts as $script): ?>
<script src="<?= REL_PAGE .$this->controllerName ."js/" .$script ?>.js"></script>
<?php endforeach ?>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="<?= URL ?>">Home</a></li>
            <li><a href="<?= URL ?>register">Sign Up</a></li>
            <li><a href="<?= URL ?>login">Sign In</a></li>
        </ul>
    </nav>
</header>
<?php $this->requireView($view) ?></body></html>