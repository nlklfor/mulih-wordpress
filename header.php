<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/style.css">
    <title>Mulih</title>
    <?php wp_head()?>
</head>

<body>
    <header class="header">
        <div class="header_container">
            <div class="header_logo">
                <img src="<?php bloginfo('template_directory')?>/source/logo.png" class="header_logo-img" alt="Website Logo" width="40" height="40">
                <p class="header_logo-title">Mulih</p>
            </div>
            <nav class="header_list">
                <?php 
                    $args = array(
                        'menu'				=> "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                        'menu_class'		=> "header_nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                        'menu_id'			=> "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                        'container'			=> "ul", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                        'container_class'	=> "header_nav", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                        'container_id'		=> "", // (string) The ID that is applied to the container.
                        'fallback_cb'		=> "wp_page_menu", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                        'before'			=> "", // (string) Text before the link markup.
                        'after'				=> "", // (string) Text after the link markup.
                        'link_before'		=> "", // (string) Text before the link text.
                        'link_after'		=> "", // (string) Text after the link text.
                        'echo'				=> "true", // (bool) Whether to echo the menu or return it. Default true.
                        'depth'				=> "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                        'walker'			=> "", // (object) Instance of a custom walker class.
                        'theme_location'	=> "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                        'items_wrap'		=> "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
                        'item_spacing'		=> "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
                    );
                    wp_nav_menu( $args );
                ?>
                    <div class="header_register">
                        <div class="header_btns">
                            <button class="header_btns-reg">Sign In</button>
                            <button class="header_btns-log">Login</button>
                        </div>
                    </div>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>