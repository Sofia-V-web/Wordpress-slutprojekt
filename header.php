
<!--utvecklare: Amar. I created the header to be dynamic, neat and responsive. 
I created the menu for the header to navigate easily throught the website's pages.-->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php wp_title();?></title>
    <?php wp_head();?>
</head>

<body>
<div id="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
            <a href="<?php echo home_url();?>"><h1>Tourism - <span class="yellowTitlePart">Sweden</span></h1></a>
            </div>
        </div>
        <nav>
            <div>
            <?php
            $arguments = [
                "menu"=>"header-menu",
                "theme_location"=>"header-menu",
                "menu_class"=>"header-menu"
            ];
            $menuItems = wp_nav_menu($arguments);
            ?>
            </div>
        </nav>
        
    </header>
    <div class="breadcrumbs">
            <?php if(function_exists("breadcrumbs")):?>
                <?php breadcrumbs();?>
            <?php endif;?>
    </div>