<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <?php wp_head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"> 
    
    <title><?php bloginfo('title'); ?></title>
</head>    
<body>
    <header class="header bg-primary border-b-2 border-gray-100">
        <div class="container flex">
            <div class="logo">
                <a href=""><h1 class="font-bold text-6xl text-white"><?php bloginfo('title');?></h1></a>            
            </div>
            <nav class="nav flex-1 pl-64 ml-auto">                
                <?php wp_nav_menu(
                    array(
                        'theme_location'=>'header_primary',
                        'menu_class'=>'flex justify-evenly py-8 text-4xl text-white'
                    ));?>                
            </nav>
        </div>        
    </header>       
    <main class="">

