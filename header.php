<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="l-display--pc">
            <div class="l-display__contents--pc">
                <header class="l-header">
                    <button class="p-menu__button">Menu</button>
                    <div class="p-header__contents">
                        <h1 class="p-header__title">
                            <a href="<?php echo esc_url(home_url('/')) ?>">
                            <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                        <?php get_search_form(); ?>
                    </div>
                </header>
