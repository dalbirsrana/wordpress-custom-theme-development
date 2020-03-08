<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

<div id="page" class="page">
    
    <header class="site-header">
        <h1 class="site-name">
            <a href="<?php echo home_url(); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
        </h1>

        <div class="site-description">
            <?php bloginfo( 'description' ) ?>
        </div>

        <?php 
        if ( has_nav_menu( 'menu-main' ) ) :
            wp_nav_menu( 
                array(
                    'theme_location'    => 'menu-main',
                    'menu_id'           => 'main-menu',
                    'container'         => 'nav',                    
                )
            );
        endif;
        ?>

    </header>
       
    <main class="site-main">

