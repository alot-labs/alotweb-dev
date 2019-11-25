<?php 
    include 'config.php';

    $title = "ALOT Instant games";
    $meta_desc = "Instead of waiting for a win notification to arrive by mail, email, or telephone you find out whether you've won or not as soon as your entry has gone through.";
    $meta_keywords = "Instant win games, Lottery, lotto, huge jackpot, jackpot games, KENO, bingo, scratch cards";
    $og_image = "";
    $og_url = $url."/instant-win-games".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--instant-win-games">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">ALOT Instant <br>Games</h1>
        </div>
    </div>
</section>

<section class="section main-claim">
    <div class="container">
        <h3 class="main-claim__paragraph">With instant win games players know how much they have won instantly. Instant Win games can be combined with our Prize Cover to offer winnings up to 100M EUR. If you are a game developer, you can take advantage of our Draw Technology in your own games, boosting the potential winnings to sky-high levels.</h3>
    </div>
</section>

<!--section class="section standalone-text">
    <div class="container">
        <h2 class="heading-1">Instant winnings</h2>
        <p class="paragraph standalone-text__paragraph">With instant win games players know how much they have won immediately. Instant Win games can be combined with our Prize Cover to offer winnings up to 100M EUR. If you are a game developer, you can take advantage of our Draw Technology in your own games, boosting the potential winnings to sky-high levels.</p>
    </div>
</section-->

<!--section class="section logo-description">
    <div class="container">
        <div class="logo-description__holder">
            <div class="logo-description__icon logo-description__icon--ring"></div>
            <div class="llogo-description__text">
                <p class="paragraph">With instant win games players know how much they have won immediately. Instant Win games can be combined with our Prize Cover to offer winnings up to 100M EUR. If you are a game developer, you can take advantage of our Draw Technology in your own games, boosting the potential winnings to sky-high levels.</p>
            </div>
        </div>
    </div>
</section-->

<!--section class="section logo-text">
    <div class="container">
        <div class="logo-text__holder">
            <div class="logo-text__icons">
                <div class="logo-text__icons-item logo-text__icons-item--ring"></div>
                <div class="logo-text__icons-item logo-text__icons-item--itech"></div>
            </div>
            <div class="logo-text__description">
                <p class="paragraph">With instant win games players know how much they have won IMMEDIATELY. Our certified Random Insured Number Generator (RiNG) produces game results for every Instant Win game and can BE COMBINED WITH OUR PRIZE COVER TO determine winningsup to 100M EUR. If you are a game developer, you can take advantage of RiNG in your own games, boosting the potential winnings to sky-high levels.</p>
            </div>
        </div>
    </div>
</section-->

<section class="section game-embed">
    <div class="game-embed__mobile">
        <div class="game-embed__mobile-plate"></div>
        <div class="container">
            <div class="game-embed__device-mobile">
                <div class="game-embed__device-mobile-holder">
                    <div class="game-embed__device-mobile-embed">
                        <div class="game-embed__iframe game-embed__iframe--mobile game-embed__iframe--instant-games">
                            <lottoland-app data-version="1.0" data-operator-id="rng" data-host="https://qa-ddd.lttlapp.com" data-event-router="eventRouter" data-query-user-token="8ulfvxh53cbfa73el5liwyp3jxbl2mc6ulq3ns8zyl0tc4tpdcsb2azm818hs6jk">
                            </lottoland-app>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="heading-1">Our Instant Win Games</h2>
        </div>
    </div>
    <div class="game-embed__desktop">
        <div class="container">
            <div class="game-embed__device-desktop">
                <div class="game-embed__device-desktop-holder">
                    <div class="game-embed__device-desktop-embed">
                        <div class="game-embed__iframe game-embed__iframe--desktop game-embed__iframe--instant-games">
                            <lottoland-app data-version="1.0" data-operator-id="rng" data-host="https://qa-ddd.lttlapp.com" data-event-router="eventRouter" data-query-user-token="8ulfvxh53cbfa73el5liwyp3jxbl2mc6ulq3ns8zyl0tc4tpdcsb2azm818hs6jk">
                            </lottoland-app>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section related-products">
    <div class="container">
        <!--h2 class="heading-1">Want to see more content?</h2-->
        <div class="related-products__wrapper">
            <!--div class="related-products__holder">
                <div class="related-products__item">
                    <a href="lotto-betting<?=$ext?>" class="related-products__illustration related-products__illustration--lottery"></a>
                    <div class="related-products__text-holder">
                        <h3 class="heading-3">
                            <a href="lotto-betting<?=$ext?>">Lottery Game Client</a>
                        </h3>
                        <p class="paragraph">Fastest route to market for your brand.</p>
                    </div>
                </div>
                <div class="related-products__item">
                    <a href="numbers<?=$ext?>" class="related-products__illustration related-products__illustration--keno"></a>
                    <div class="related-products__text-holder">
                        <h3 class="heading-3">
                            <a href="keno-games<?=$ext?>">Keno Games</a>
                        </h3>
                        <p class="paragraph">KENO....differently</p>
                    </div>
                </div>
                <div class="related-products__item">
                    <a href="game-content<?=$ext?>" class="related-products__illustration related-products__illustration--api"></a>
                    <div class="related-products__text-holder">
                        <h3 class="heading-3">
                            <a href="game-content<?=$ext?>">API</a>
                        </h3>
                        <p class="paragraph">Our API Integrations</p>
                    </div>
                </div>
            </div-->
            <div class="related-products__button-holder">
                <a href="contact-us<?=$ext?>" class="button button--white-green">Contact us</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
