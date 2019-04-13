<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnjoyTheSilence</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="Registration.css">
</head>
<body>
<section class="site-title">
    <p class="site-title__header">Enjoy The Silence</p>
    <i class="site-title__subheader">Eva's blog</i>
</section>
<header class="top-menu">
    <nav>
        <ul>
            <li class="top-menu__item">
                <i class="fas fa-bars"></i>
            </li>
            <li class="top-menu__item">
                <a href="MainPage">home</a>
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
                <a href="#">privacy</a>
            </li>
            <li class="top-menu__item">
                <a href="Registration">Login/Logout</a>
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
<form class="form-main" method="POST">
    <article class="top-secure-line">
    </article>
    <section class="form-main__left">
        <header class="form-main__header">
            <p>Secure Log In</p>
        </header>
        <article class="bottom-secure-line">
        </article>
        <section class="delivery-field">
            <section class="delivery-field__input">
                <input type="text" name="username" placeholder="Username" class="form-control" required/>
                <input type="password" name="password" placeholder="Password" class="form-control"/>
                <section class="btn-section">
                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Log in"/>
                </section>
            </section>
            <article class="top-line">
            </article>
            <article class="bottom-line">
            </article>
        </section>
    </section>
</form>

<footer class="footer">
    <section class="body-bottom">
        <section class="body-bottom__snapchat">
            <div class="body-bottom__snapchat--line">
                <span>SNAPCHAT</span>
            </div>
            <img src="img/snapchat.jpg">
        </section>
        <section class="body-bottom__follow">
            <div class="body-bottom__follow--line">
                <span>FOLLOW</span>
            </div>
            <section class="social-networks">
                <section class="social-networks__first">
                    <a class="fab fa-twitter"></a>
                    <a class="fab fa-instagram"></a>
                    <a class="fab fa-facebook"></a>
                </section>
                <section class="social-networks__first-names">
                    <span>TWITTER</span>
                    <span>INSTAGRAM</span>
                    <span>FACEBOOK</span>
                </section>
                <section class="social-networks__second">
                    <a class="fab fa-pinterest"></a>
                    <a class="fab fa-youtube"></a>
                    <a class="fab fa-snapchat"></a>
                </section>
                <section class="social-networks__second-names">
                    <span>PINTEREST</span>
                    <span>YOUTUBE</span>
                    <span>SNAPCHAT</span>
                </section>
            </section>
        </section>
        <section class="body-bottom__follow">
            <div class="body-bottom__follow--line">
                <span>ENJOY THE SILENCE</span>
            </div>
            <section class="body-bottom__follow--content">
                <span>Sign up here for a weekly catch up of everything EnjoyTheSilence</span>
                <input type="email" placeholder="Your email..." class="email">
                <input type="button" value="SUBSCRIBE" class="btn-subscribe">
            </section>
        </section>
    </section>
    <p class="site-footer">© 2019 EnjoyTheSilence</p>
    <figure class="footer__pictures">
        <img src="img/cookie.jpg">
        <img src="img/ewa-2.jpg">
        <img src="img/piones.jpg">
        <img src="img/view.jpg">
        <img src="img/ewa-4.jpg">
    </figure>
    <p>Design by Marta Gulida</p>
</footer>
</body>
</html>