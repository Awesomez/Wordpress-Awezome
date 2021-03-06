<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <!--[if lt IE 9]>
    <script type='text/javascript' src="<?=get_template_directory_uri()?>/js/html5shiv.js"></script><![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" href="/layout/css/fuckIE8.css"><![endif]-->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="wrapper">

    <div class="sidebar">

        <div class="blog-header">
    <div id="logo-wrapper">

        <img src="<?=get_template_directory_uri()?>/images/logo.jpg" />
    </div>
            <h1 class="blog-title">
                <a href="<?php echo esc_url(home_url()); ?>"
                   title="<?php echo esc_attr(get_bloginfo('title')); ?> &mdash; <?php echo esc_attr(get_bloginfo('description')); ?>"
                   rel="home"><?php echo esc_attr(get_bloginfo('title')); ?></a>
            </h1>

            <h3 class="blog-description"><?php echo esc_attr(get_bloginfo('description')); ?></h3>

            <div class="nav-toggle toggle">

                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>

                <div class="clear"></div>

            </div>

        </div>
        <!-- /blog-header -->

        <div class="blog-menu">

            <ul class="navigation">

                <?php if (has_nav_menu('primary')) {

                    wp_nav_menu(array(

                        'container' => '',
                        'items_wrap' => '%3$s',
                        'theme_location' => 'primary',
                        'walker' => new wilson_nav_walker

                    ));
                } else {

                    wp_list_pages(array(

                        'container' => '',
                        'title_li' => ''

                    ));

                } ?>

            </ul>

            <div class="clear"></div>

        </div>
        <!-- /blog-menu -->

        <div class="mobile-menu">

            <ul class="navigation">

                <?php if (has_nav_menu('primary')) {

                    wp_nav_menu(array(

                        'container' => '',
                        'items_wrap' => '%3$s',
                        'theme_location' => 'primary',
                        'walker' => new wilson_nav_walker

                    ));
                } else {

                    wp_list_pages(array(

                        'container' => '',
                        'title_li' => ''

                    ));

                } ?>

            </ul>

        </div>
        <!-- /mobile-menu -->

        <?php if (is_active_sidebar('sidebar')) {?>
            <div class="widgets" role="complementary">
                <?php dynamic_sidebar('sidebar'); ?>
            </div><!-- /widgets -->
        <?php }?>
    </div>
    <!-- /sidebar -->