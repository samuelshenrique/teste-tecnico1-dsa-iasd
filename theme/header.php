<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <?php wp_head(); ?>
</head>

<body class="<?= body_class(); ?>">
    <div class="conteudo">
        <header class="header">
            <div class="header__conteudo container">
                <div class="header__logo">
                    <img src="/wp-content/uploads/2023/11/dsa.svg" alt="Divisão Sul Americana" title="Divisão Sul Americana" class="header__imagem-logo">
                </div>
                <div class="header__menus">
                    <?php
                    wp_nav_menu([
                        'menu'          => 'Sobre Menu',
                        'echo'          => true,
                        'items_wrap'    => '<ul id="%1$s" class="%2$s header__sobre-menu">%3$s</ul>',
                    ]);
                    ?>

                    <nav class="nav">
                        <?php
                        wp_nav_menu([
                            'menu'          => 'Menu Principal',
                            'echo'          => true,
                            'items_wrap'    => '<ul id="%1$s" class="%2$s nav__ul">%3$s</ul>',
                        ]);
                        ?>
                    </nav>
                </div>
            </div>
        </header>