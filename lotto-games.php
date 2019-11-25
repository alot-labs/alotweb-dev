<?php 
    include 'config.php';

    $title = "ALOT Lotto Games";
    $meta_desc = "Lottery betting involves making a bet on the outcome of an official lottery draw. You pick which lottery draw to bet on and which lottery balls (numbers) you think will be drawn - if you guess correctly you win cash prizes.";
    $meta_keywords = "Lottery, lotto, huge jackpot, jackpot games, lottery betting";
    $og_image = "";
    $og_url = $url."/lotto-games".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--lotto-betting">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">ALOT Lotto <br>Games</h1>
        </div>
    </div>
</section>

<!-- <section class="section">
    <div class="container">
        <div class="heading-holder">
            <div class="heading-holder__item">
                <h2 class="heading-1">Online lotto</h2>
            </div>
            <div class="heading-holder__item">
                <p class="paragraph">Lotto betting involves making a bet on the outcome of an official lottery draw. Players pick which lottery draw to bet on and which lottery balls (numbers) they think will be drawn - if they guess correctly, they win cash prizes.</p>
                <p class="paragraph">The size of the winnings depends on the number of balls correctly guessed for the chosen draw and usually matches the official lottery prize, including the jackpot.</p>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="section">
    <div class="container">
        <div class="heading-holder heading-holder--extended-mobile-margin">
            <div class="heading-holder__item">
                <div class="heading-holder__item-narrow-content">
                    <div class="text-icon text-icon--circle text-icon--green text-icon--luck-white"></div>
                    <h3 class="heading-2">Lotto betting games</h3>
                    <p class="paragraph">Avoid the hassle of building your own user interface and bring these awesome products online in the shortest possible time. Integrate our game client in the same way as you would any other game provided by traditional game studios. Brand it, configure and launch!</p>
                </div>
            </div>
            <div class="heading-holder__item">
                <div class="heading-holder__item-narrow-content">
                    <div class="text-icon text-icon--circle text-icon--green text-icon--api-white"></div>
                    <h3 class="heading-2">Build your own UI (API)</h3>
                    <p class="paragraph">Do you want to be in complete control of the user experience? We provide you with all the necessary data (such as draw times, jackpot sizes, cut-off times, etc.) and APIs to submit your transactions to us, while your design & development team builds a unique user interface.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--section class="section overplate-text">
    <div class="container">
        <div class="overplate-text__plate overplate-text__plate--green">
            <div class="overplate-text__column">
                <p class="paragraph paragraph--bold">Lotto betting involves making a bet on the outcome of an official lottery draw. Players pick which lottery draw to bet on and which lottery balls (numbers) they think will be drawn - if they guess correctly, they win cash&nbsp;prizes.</p>
            </div>
            <div class="overplate-text__column">
                <p class="paragraph paragraph--bold">The size of the winnings depends on the number of balls correctly guessed for the chosen draw and usually matches the official lottery prize, including the jackpot.</p>
            </div>
        </div>
    </div>
</section-->

<!--section class="section">
    <div class="container">
        <div class="split-content-narrow">
            <div class="split-content-narrow__item">
                <div class="text-icon text-icon--circle text-icon--green text-icon--luck-white"></div>
                <h3 class="heading-2">Lotto betting games</h3>
                <p class="paragraph">Avoid the hassle of building your own user interface and bring these awesome products online in the shortest possible time. Integrate our game client in the same way as you would any other game provided by traditional game studios. Brand it, configure and launch!</p>
            </div>
            <div class="split-content-narrow__item">
                <div class="text-icon text-icon--circle text-icon--green text-icon--api-white"></div>
                <h3 class="heading-2">Build your own UI (API)</h3>
                <p class="paragraph">Do you want to be in complete control of the user experience? We provide you with all the necessary data (such as draw times, jackpot sizes, cut-off times, etc.) and APIs to submit your transactions to us, while your design & development team builds a unique user interface.</p>
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
                        <div class="game-embed__iframe game-embed__iframe--mobile game-embed__iframe--lottery-games">
                            <lottoland-app data-version="1.0" data-operator-id="ddd" data-host="https://qa-ddd.lttlapp.com" data-event-router="eventRouter" data-query-user-token="fc4147eb8572431b7e6ab6eadb6e9ac823cd8a1ba01ce4d274523d546de576bd">
                            </lottoland-app>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="heading-1">Lotto Games</h2>
        </div>
    </div>
    <div class="game-embed__desktop">
        <div class="container">
            <div class="game-embed__device-desktop">
                <div class="game-embed__device-desktop-holder">
                    <div class="game-embed__device-desktop-embed">
                        <div class="game-embed__iframe game-embed__iframe--desktop game-embed__iframe--lottery-games">
                            <lottoland-app data-version="1.0" data-operator-id="ddd" data-host="https://qa-ddd.lttlapp.com" data-event-router="eventRouter" data-query-user-token="fc4147eb8572431b7e6ab6eadb6e9ac823cd8a1ba01ce4d274523d546de576bd">
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
        <!-- <h2 class="heading-1">Want to see more content?</h2-->
        <div class="related-products__wrapper">
            <!--div class="related-products__holder">
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
                    <a href="numbers<?=$ext?>" class="related-products__illustration related-products__illustration--keno"></a>
                    <div class="related-products__text-holder">
                        <h3 class="heading-3">
                            <a href="keno-games<?=$ext?>">Keno Games</a>
                        </h3>
                        <p class="paragraph">KENO....differently.</p>
                    </div>
                </div>
                <div class="related-products__item">
                    <a href="game-content<?=$ext?>" class="related-products__illustration related-products__illustration--api"></a>
                    <div class="related-products__text-holder">
                        <h3 class="heading-3">
                            <a href="game-content<?=$ext?>">API</a>
                        </h3>
                        <p class="paragraph">API Integrations</p>
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
