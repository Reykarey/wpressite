<!DOCTYPE html>
<html>
    <head>
        <title><?= $title?></title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>

        <div id="header">
            <!-- Верхняя часть страницы -->
            <img src="img/logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
            <span class="slogan">обо всём сразу</span>
            <!-- Верхняя часть страницы -->
        </div>
        <div class="errors">
            <ul>
                <?php if(isset($data['errors'])): ?>
                    <?php foreach($data['errors'] as $error): ?>
                        <li><?php echo $error ?></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
