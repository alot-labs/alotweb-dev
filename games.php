<?php 
    include 'config.php';

    $title = "ALOT Games";
    $meta_desc = "Unique portfolio of games and gaming content with huge jackpot prizes, including lottery betting, fixed odds lottery games, KENO, bingo, scratch cards and more.";
    $meta_keywords = "Lottery, huge jackpot, jackpot games, KENO, bingo, scratch cards, lottery betting";
    $og_image = "";
    $og_url = $url."/games".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section splitbox splitbox--no-margin">
    <a class="splitbox__item" href="lotto-games<?=$ext?>">
        <div class="splitbox__image splitbox__image--lotto-betting"></div>
        <div class="splitbox__overlay"></div>
        <div class="splitbox__text">
            <h2 class="heading-1">Lotto <br />Games</h2>
            <!-- <p class="splitbox__text-description">Demo implementation</p> -->
        </div>
    </a>
    <a class="splitbox__item" href="hfg<?=$ext?>">
        <div class="splitbox__image splitbox__image--keno-betting"></div>
        <div class="splitbox__overlay"></div>
        <div class="splitbox__text">
            <h2 class="heading-1">High Frequency <br />Games</h2>
            <!-- <p class="splitbox__text-description">Demo implementation</p> -->
        </div>
    </a>
    <a class="splitbox__item" href="instant-win-games<?=$ext?>">
        <div class="splitbox__image splitbox__image--instant-games"></div>
        <div class="splitbox__overlay"></div>
        <div class="splitbox__text">
            <h2 class="heading-1">Instant <br />Games</h2>
            <!-- <p class="splitbox__text-description">Demo implementation</p> -->
        </div>
    </a>
</section>

<!-- <section class="section">
    <div class="container">
        <div class="heading-holder">
            <div class="heading-holder__item">
                <h2 class="heading-1">Lotto Games</h2>
            </div>
            <div class="heading-holder__item">
                <p class="paragraph">Plug in our proprietary content catalogue to offer your players a winning experience. Some games also benefit from access to our prize cover, so you can offer high jackpot games with the pay-out risk taken by us.</p>
                <p class="paragraph">Let your players bet on the world’s largest lottery jackpots and other popular lottery-style games. A great acquisition and retention product, but also an amazing revenue generator in its own right.</p>
                <p class="paragraph">Prizes are guaranteed by our superior Jackpot Prize Cover, so you can rest assured that the payout is guaranteed, and you can focus on your business as&nbsp;usual.</p>
                <a href="lotto-betting<?=$ext?>" class="button button--green">Lotto betting demo</a>
            </div>
        </div>
        <div class="heading-holder heading-holder--narrow-text">
            <div class="heading-holder__item">
                <h2 class="heading-1">Lotto Betting</h2>
            </div>
            <div class="heading-holder__item">
                <p class="paragraph">Plug in our proprietary content catalogue to offer your players a winning experience. Some games also benefit from access to our prize cover, so you can offer high jackpot games with the pay-out risk taken by us.</p>
                <p class="paragraph">Let your players bet on the world’s largest lottery jackpots and other popular lottery-style games. A great acquisition and retention product, but also an amazing revenue generator in its own right.</p>
                <p class="paragraph">Prizes are guaranteed by our superior Jackpot Prize Cover, so you can rest assured that the payout is guaranteed, and you can focus on your business as&nbsp;usual.</p>
                <a href="lotto-betting<?=$ext?>" class="button button--green">Lottery demo</a>
            </div>
        </div>
    </div>
</section> -->

<!--section class="section other-games">
    <div class="container">
        <div class="other-games__holder">
            <div class="other-games__column">
                <h2 class="heading-1">Winning experience</h2>
                <div class="other-games__item">
                    <p class="paragraph">Plug in our proprietary content catalogue to offer your players a winning experience. Some games also benefit from access to our prize cover, so you can offer high jackpot games with the pay-out risk taken by us.</p>
                </div>
            </div>
            <div class="other-games__column">
                <h2 class="heading-1">Lotto Betting</h2>
                <div class="other-games__item">
                    <p class="paragraph">Let your players bet on the world’s largest lottery jackpots and other popular lottery-style games. A great acquisition and retention product, but also an amazing revenue generator in its own right.</p>
                    <p class="paragraph">Prizes are guaranteed by our superior Jackpot Prize Cover, so you can rest assured that the payout is guaranteed, and you can focus on your business as&nbsp;usual.</p>
                    <a href="lotto-betting<?=$ext?>" class="button button--green">Lottery demo</a>
                </div>
            </div>
        </div>
    </div>
</section-->

<!--section class="section">
    <div class="container">
        <div class="heading-holder heading-holder--narrow-text">
            <div class="heading-holder__item">
                <h2 class="heading-1">Winning experience</h2>
            </div>
            <div class="heading-holder__item">
                <p class="paragraph">Plug in our proprietary content catalogue to offer your players a winning experience. Some games also benefit from access to our prize cover, so you can offer high jackpot games with the pay-out risk taken by us.</p>
            </div>
        </div>
    </div>
</section-->

<!-- UNCOMMENT THIS SECTION FOR GAME EMBED -->
<!--section class="section standalone-embed">
    <div class="standalone-embed__mobile">
        <div class="container">
            <div class="standalone-embed__device-mobile">
                <div class="standalone-embed__device-mobile-holder">
                    <div class="standalone-embed__device-mobile-embed">
                        <div class="standalone-embed__iframe standalone-embed__iframe--mobile standalone-embed__iframe--instant-games">
                            <lottoland-app data-version="1.0" data-operator-id="rng" data-host="https://qa-ddd.lttlapp.com" data-event-router="eventRouter" data-query-user-token="8ulfvxh53cbfa73el5liwyp3jxbl2mc6ulq3ns8zyl0tc4tpdcsb2azm818hs6jk">
                            </lottoland-app>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="standalone-embed__desktop">
        <div class="container">
            <div class="standalone-embed__device-desktop">
                <div class="standalone-embed__device-desktop-holder">
                    <div class="standalone-embed__device-desktop-embed">
                        <div class="standalone-embed__iframe standalone-embed__iframe--desktop standalone-embed__iframe--instant-games">
                            <lottoland-app data-version="1.0" data-operator-id="rng" data-host="https://qa-ddd.lttlapp.com" data-event-router="eventRouter" data-query-user-token="8ulfvxh53cbfa73el5liwyp3jxbl2mc6ulq3ns8zyl0tc4tpdcsb2azm818hs6jk">
                            </lottoland-app>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section-->

<!--section class="section hero hero--gaming-content">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">ALOT Games</h1>
            <p class="paragraph-big">Unique portfolio of proprietary games ranging from lottery betting products and fixed odds lottery games to KENO, instant lotto, scratch cards and&nbsp;more.</p>
        </div>
    </div>
</section-->

<!-- <div class="virtual-anchor virtual-anchor--1" id="learn-more"></div> -->

<!--section class="section players-experience">
    <div class="container">
        <div class="heading-holder heading-holder--narrow-text">
            <div class="heading-holder__item">
                <h2 class="heading-1">Extend your player’s experience</h2>
            </div>
            <div class="heading-holder__item">
                <p class="paragraph">Offer a fresh experience through our catalogue of games unseen anywhere else. In combination with our Prize Cover, our games can be boosted with incredible jackpot prizes that will attract more players and keep them engaged for longer.</p>
            </div>
        </div>
        <div class="players-experience__illustration"></div>
    </div>
</section-->

<!--section class="section lotto-betting">
    <div class="container">

        <h2 class="heading-1">Lotto Betting</h2>
        <div class="split-content">
            <div class="split-content__item">
                <p class="paragraph">Let your players bet on the world’s largest lottery jackpots and other popular lottery-style games. A great acquisition and retention product, but also an amazing revenue generator in its own right.</p>
                <p class="paragraph">Prizes are guaranteed by our superior Jackpot Prize Cover, so you can rest assured that the payout is guaranteed, and you can focus on your business as&nbsp;usual.</p>
                <a href="lotto-betting<?=$ext?>" class="button button--green">Lottery demo</a>
            </div>
            <div class="split-content__item">
                <div class="lottery-icons">
                    <div class="lottery-icons__item lottery-icons__item--euromillions"></div>
                    <div class="lottery-icons__item lottery-icons__item--eurojackpot"></div>
                    <div class="lottery-icons__item lottery-icons__item--megamillions"></div>
                    <div class="lottery-icons__item lottery-icons__item--powerball"></div>
                </div>
            </div>
        </div>

        <div class="split-content">
            <div class="split-content__item">
                <div class="text-icon text-icon--circle text-icon--luck-green"></div>
                <h3 class="heading-2">Lotto betting games</h3>
                <p class="paragraph">Avoid the hassle of building your own user interface and bring these awesome products online in the shortest possible time. Integrate our game client in the same way as you would any other game provided by traditional game studios. Brand it, configure and launch!</p>
            </div>
            <div class="split-content__item">
                <div class="text-icon text-icon--circle text-icon--api-green"></div>
                <h3 class="heading-2">Build your own UI (API)</h3>
                <p class="paragraph">Do you want to be in complete control of the user experience? We provide you with all the necessary data (such as draw times, jackpot sizes, cut-off times, etc.) and APIs to submit your transactions to us, while your design & development team builds a unique user interface.</p>
            </div>
        </div>

    </div>
</section-->

<!-- <section class="section other-games">
    <div class="container">
        <div class="other-games__holder">
            <div class="other-games__column">
                <h2 class="heading-1">Instant</h2>
                <div class="other-games__item">
                    <div class="other-games__illustration" style="background-image: url(i/instant-game.jpg);"></div>
                    <p class="paragraph">Integrate our Instant Win Games and other lottery-style games to your gaming portfolio. Our proprietary content lets your players watch the draw and win instantly. With a higher RTP than lottery betting our instant games are ideal for sportsbook and casino players. All of our games are iTech certified and powered by RiNG™ our unique Random & Insured Number Generator.</p>
                    <a href="instant-win-games<?=$ext?>" class="button button--green">Instant games demo</a>
                </div>
            </div>
            <div class="other-games__column other-games__column--offset">
                <h2 class="heading-1">High Frequency</h2>
                <div class="other-games__item">
                    <div class="other-games__illustration" style="background-image: url(i/keno-game.jpg);"></div>
                    <p class="paragraph">Many players like to place traditional fixed odds bets on specific numbers (instead of picking all numbers like traditional lottery). let your players bet on specific numbers and side bets from a huge range of draws!</p>
                    <a href="hfg<?=$ext?>" class="button button--green">Numbers demo</a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php include 'footer.php'; ?>
