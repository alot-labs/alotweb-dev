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
                <p class="paragraph paragraph--bold">The size of the winnings depends on the number of balls correctly guessed for the chosen draw and usually matches the official lottery prize, including the jackpot - so that users win the same or larger amount they could have won if they’d bought an actual lottery ticket.</p>
            </div>
        </div>
    </div>
</section>

<section class="section overprint-image">
    <div class="container">
        <div class="overprint-image__holder">
            <div class="overprint-image__illustration-holder">
                <div class="overprint-image__illustration-wrapper">
                    <div class="overprint-image__illustration"></div>
                </div>
            </div>
            <div class="overprint-image__text-holder">
                <h2 class="heading-1">Why not just buy a lottery ticket?</h2>
                <p class="paragraph">You get more freedom with lottery betting. Some jurisdiction banned re-selling of lottery tickets, while lotto betting is allowed. You can offer players to bet on the outcome of lottery draws from around the globe, all in one place and extend the gaming experience with unique features, unseen in traditional lotteries, such as:</p>
                <ul class="ticket-features">
                    <li class="ticket-features__item ticket-features__item--double-jackpot">
                        <p class="paragraph paragraph--bold">Double Your Jackpot</p>
                    </li>
                    <li class="ticket-features__item ticket-features__item--number-shield">
                        <p class="paragraph paragraph--bold">Number shield</p>
                    </li>
                </ul>
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

<section class="section related-products">
    <div class="container">
        <h2 class="heading-1">Still not decided?</h2>
        <div class="related-products__wrapper">
            <div class="related-products__holder">
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
                    <a href="keno-games<?=$ext?>" class="related-products__illustration related-products__illustration--keno"></a>
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
            </div>
            <div class="related-products__button-holder">
                <a href="about-us<?=$ext?>" class="button button--white-green">Contact us</a>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
