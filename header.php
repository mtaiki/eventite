
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>イベントサイト</title>

    <?php wp_head(); ?>

</head>
<body class="drawer drawer--right">

    <header id="js-header" class="header">
        <div class="header-inner">
            <button type="button" class="drawer-toggle drawer-hamburger">
                <span class="sr-only"></span>
                <span class="drawer-hamburger-icon"></span>
            </button>

            <div class="drawer-content">
                <?php 
                wp_nav_menu(
                    array(
                        'depth' => 1,
                        'theme_location'=> 'drawer',
                        'container' => 'nav',
                        'container_class' => 'drawer-nav',
                        'menu_class' => 'drawer-menu',
                    )
                );
                ?>
            </div>
        </div>
    </header>

    <div class="header-inner-pc">
        <nav class="header-nav">
            <?php 
            wp_nav_menu(
                array(
                'depth' => 1,
                'theme_location' => 'global',
                'container' => 'false',
                'menu_class' => 'header-list',
                )
                );
            ?>
        </nav>
    </div>