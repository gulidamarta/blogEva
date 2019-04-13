<?php
    require 'includes/config.php';
?>
<section class="site-title">
    <p class="site-title__header"><?php echo $config['title']?></p>
    <i class="site-title__subheader"><?php echo $config['subtitle']?></i>
</section>
<header class="top-menu">  
<nav>
    <ul>
        <li class="top-menu__item">
            <i class="fas fa-bars"></i>
        </li>
        <li class="top-menu__item">
            <a href="/">home</a>
        </li>
        <li class="top-menu__item">
            <a href="#">All posts</a>
        </li>
        <li class="top-menu__item">
            <a href="#">about</a>
        </li>
        <li class="top-menu__item">
            <a href="#">contact</a>
        </li>
        <li class="top-menu__item">
            <a href="#">disclaimer</a>
        </li>
        <li class="top-menu__item">
            <a href="#">privacy</a>
        </li>
        <li class="top-menu__item">
            <i class="fas fa-search"></i>
        </li>
        <li class="top-menu__item">
            <section class="top-menu__items--links">
                <a class="fab fa-telegram" href="#"></a>
                <a class="fab fa-instagram" href="https://www.instagram.com/ewagulida/"></a>
                <a class="fab fa-facebook" href="https://www.facebook.com/ewa.gulida/"></a>
                <a class="fab fa-pinterest" href="#"></a>
            </section>
        </li>
    </ul>
</nav>    
</header>