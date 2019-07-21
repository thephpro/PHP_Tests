<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, user-scalable=1.0, initial-scale=1.0">
<title><?= $this->title ." | " .SITE_NAME ?></title><!-- Styles --><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><?php foreach ($this->styles as $style): ?><link rel="stylesheet" href="<?= TEMPLATES .$this->template ."/" .$style ?>.css"><?php endforeach ?><!-- Scripts --><?php foreach ($this->scripts as $script): ?><script src="<?= TEMPLATES .$this->template ."/" .$script ?>.js"></script><?php endforeach ?></head><body>
<header>
    <nav>
        <ul>
            <li><a href="<?= URL ?>">Home</a></li>
            <li><a href="<?= URL ?>login">Login</a></li>
        </ul>
    </nav>
</header>

<?php $this->requireView($view) ?>