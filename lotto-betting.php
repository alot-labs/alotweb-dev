<?php 
    include 'config.php';

    $title = "ALOT Lotto betting solutions";
    $meta_desc = "Lottery betting involves making a bet on the outcome of an official lottery draw. You pick which lottery draw to bet on and which lottery balls (numbers) you think will be drawn - if you guess correctly you win cash prizes.";
    $meta_keywords = "Lottery, lotto, huge jackpot, jackpot games, lottery betting";
    $og_image = "";
    $og_url = $url."/lotto-betting".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--lotto-betting">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">ALOT Lotto Betting</h1>
        </div>
    </div>
</section>

<section class="section overplate-text">
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
</section>

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
            <h2 class="heading-1">Lotto Betting Game Client</h2>
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


<?php include 'footer.php'; ?>
