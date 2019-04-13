<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnjoyTheSilence</title>
    <link rel="stylesheet" href="/css/MainPage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
  <body>
    <?php require "header.html";
        ?>
      <figure class="head-photo">
        <img src="img/try.jpeg">
        </img>
        <div class="head-photo__inf">
            <p>{title}</p>
            <p>{subtitle}</p>
        </div>
      </figure>
      <section class="post-1">
        <section class="post-1__img">
            <img src="img/ewa-1.jpg">
            <div class="post-1__date">
                <span>13 SEPTEMBER 2017</span>
            </div>
        </section>
        <article class="post-1__content">
            <section class="post-1__content--topic">
                <article class="post-1__content--line"></article>
                <p>    LIFESTYLE    </p>
                <article class="post-1__content--line"></article>
            </section>
            <a href="Post-1.php">
                <p class="post-1__content--title">SIMPLE STEPS FOR A HEALTHIER LIFESTYLE</p>
            </a>
            <p class="post-1__content--short">Often when we decide that we need to live a healthier life we go through a total lifestyle overhaul...</p>
            <input type="button" value="READ MORE" class="btnReadMore"></input>
        </article>
      </section>
      <section class="post-2">
        <article class="post-2__content">
            <section class="post-2__content--topic">
                    <article class="post-2__content--line"></article>
                    <p>    WELL BEING    </p>
                    <article class="post-2__content--line"></article>
            </section>
            <a href="Post-2.php">
                <p class="post-1__content--title">DEAR STRESS, LET’S BREAK UP!</p>
            </a>
            <p class="post-1__content--short">Dear Stress, let's break up!It may sound obvious, but yes: we all stress out. Everyday, about some minor and major issues.Sometimes it's worth it - sometimes not...</p>
            <input type="button" value="READ MORE" class="btnReadMore"></input>
        </article>
        <section class="post-2__img">
                <img src="img/dog-1.jpg">
                <div class="post-2__date">
                    <span>17 JANUARY 2015</span>
                </div>
        </section>
      </section>
      <section class="post-3">
            <section class="post-1__img">
                    <img src="img/cookie.jpg">
                    <div class="post-1__date">
                        <span>7 JUNE 2015</span>
                    </div>
            </section>
            <article class="post-1__content">
                <section class="post-1__content--topic">
                    <article class="post-1__content--line"></article>
                    <p>    LIFESTYLE    </p>
                    <article class="post-1__content--line"></article>
                </section>
                <a href="Post-3.php">
                    <p class="post-1__content--title">HEALTHY EATING – GOOD HABIT OR NEW DISASTER?</p>
                </a>
                <p class="post-1__content--short">Today it's highly popular to eat healthy, to use lots of different superfoods, drink smoothies and green juices and to regularly detox...</p>
                <input type="button" value="READ MORE" class="btnReadMore"></input>
            </article>
        </section>
        <section class="post-2">
                <article class="post-2__content">
                    <section class="post-2__content--topic">
                            <article class="post-2__content--line"></article>
                            <p>    WELL BEING    </p>
                            <article class="post-2__content--line"></article>
                    </section>
                    <a href="Post-4.php">
                        <p class="post-1__content--title">YOU MAKE A HOUSE A HOME</p>
                    </a>
                    <p class="post-1__content--short">Feeling cosy and totally comfortable at home is an absolute must for me. If I do not - I start being moody, moany and so on - you do not want to deal with me in that state of mind...</p>
                    <input type="button" value="READ MORE" class="btnReadMore"></input>
                </article>
                <section class="post-2__img">
                        <img src="img/view-3.jpg">
                        <div class="post-2__date">
                            <span>8 SEPTEMBER 2017</span>
                        </div>
                </section>
              </section>
        <?php require "footer.html";
        ?>
  </body>
</html>