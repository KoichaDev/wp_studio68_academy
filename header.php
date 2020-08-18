<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b3ce871dc0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <title><?php echo get_bloginfo('name'); ?></title>
    
</head>
    <body>
    <header class="header">
        <a href="<?php echo get_site_url('/') ?>" class="header__logo">
        <span class="header__title">Studio | 68</span>
        <br>
        <span class="header__subtitle">Academy</span>   
    </a>
    <i class="fas fa-bars" style="display: none;"></i>
    <div class="header__overlay">
        <ul>
            <li>
                <img src="https://images.unsplash.com/photo-1499557354967-2b2d8910bcca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=935&q=80" alt="">
            </li>
            <li>
               <p><?php echo ucfirst(wp_get_current_user() -> roles[0]); ?></p>
               <p>
                   <?php 
                    $user_id = wp_get_current_user() -> ID;
                    $first_name = get_userdata($user_id) -> first_name;
                    $last_name =  get_userdata($user_id) -> last_name;

                    echo ucfirst($first_name) . " " . ucfirst($last_name);
                   ?>
                </p>
            </li>
            <li>
                 <p data-current-date>17.07.2020</p>
                <p data-time-zone>04:35 PM</p>
            </li>
        </ul>
    </div>
   
    </header>