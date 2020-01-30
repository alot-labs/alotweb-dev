<?php 
    include 'config.php';

    $title = "ALOT Solutions HFG";
    $meta_desc = "Our Keno games run in a separate game client instance and offer a number of side bet options to players interested in a faster-paced, number-drawn gaming experience.";
    $meta_keywords = "side bets, Lottery, lotto, huge jackpot, jackpot games, KENO";
    $og_image = "";
    $og_url = $url."/hfg".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--keno-games">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">ALOT High <br>frequency games</h1>
            <!--div class="hero__illustration">
                <div class="hero__illustration-text">
                    <h1 class="heading-1">Keno Games... Differently</h1>
                </div>
                <div class="hero__illustration-image">
                    <div class="hero__illustration-image-holder hero__illustration-image-holder--keno-games"></div>
                </div>
            </div-->
        </div>
    </div>
</section>

<section class="section main-claim">
    <div class="container">
        <h3 class="main-claim__paragraph">Our HF Games are simple to integrate and offer a number of side bet options to players interested in a faster-paced, number-drawn gaming experience.  With higher RTP (Return To Player), these games keep players engaged for longer and offer an amazing winning experience.</h3>
    </div>
</section>

<!--section class="section standalone-text">
    <div class="container">
        <h2 class="heading-1">Engaging games</h2>
        <p class="paragraph standalone-text__paragraph">Our HF games run in a separate game client instance and offer a number of side bet options to players interested in a faster-paced, number-drawn gaming experience.  With RTP (Return To Player) as high as 97.5%, these games keep players engaged for longer and offer an amazing winning experience.</p>
    </div>
</section-->

<!--section class="section other-games">
    <div class="container">
        <div class="other-games__holder">
            <div class="other-games__column">
                <h2 class="heading-1">About Hight Frequency Games</h2>
                <div class="other-games__item">
                    <p class="paragraph">Our HF games run in a separate game client instance and offer a number of side bet options to players interested in a faster-paced, number-drawn gaming experience.  With RTP (Return To Player) as high as 97.5%, these games keep players engaged for longer and offer an amazing winning experience.</p>
                </div>
            </div>
            <div class="other-games__column">
                <h2 class="heading-1">Unique UI</h2>
                <div class="other-games__item">
                    <p class="paragraph">This high-frequency game is designed to allow the players placing bets on multiple KENO markets swiftly and without any obstacles. All features are fully responsive and available on desktop and mobile&nbsp;alike.</p>
                </div>
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
                        <div class="game-embed__iframe game-embed__iframe--mobile game-embed__iframe--keno-games">
                            <lottoland-app data-version="1.0" data-operator-id="ddd" data-host="https://demo.lttlapp.com" data-event-router="eventRouter" data-query-platform="kenoLand"></lottoland-app>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="heading-1">Our HF Games</h2>
        </div>
    </div>
    <div class="game-embed__desktop">
        <div class="container">
            <div class="game-embed__device-desktop">
                <div class="game-embed__device-desktop-holder">
                    <div class="game-embed__device-desktop-embed">
                        <div class="game-embed__iframe game-embed__iframe--desktop game-embed__iframe--keno-games">
                            <lottoland-app data-version="1.0" data-operator-id="ddd" data-host="https://demo.lttlapp.com" data-event-router="eventRouter" data-query-platform="kenoLand"></lottoland-app>
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
                            <a href="lotto-betting<?=$ext?>">Lotto Games</a>
                        </h3>
                        <p class="paragraph">Fastest route to market for your brand.</p>
                    </div>
                </div>
                <div class="related-products__item">
                    <a href="instant-win-games<?=$ext?>" class="related-products__illustration related-products__illustration--instant-win"></a>
                    <div class="related-products__text-holder">
                        <h3 class="heading-3">
                            <a href="instant-win-games<?=$ext?>">Instant Win Games</a>
                        </h3>
                        <p class="paragraph">Scratch cards and fast paced games.</p>
                    </div>
                </div>
                <div class="related-products__item">
                    <a href="game-content<?=$ext?>" class="related-products__illustration related-products__illustration--api"></a>
                    <div class="related-products__text-holder">
                        <h3 class="heading-3">
                            <a href="game-content<?=$ext?>">API</a>
                        </h3>
                        <p class="paragraph">API Integrations.</p>
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
