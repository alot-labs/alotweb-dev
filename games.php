<?php 
    include 'config.php';

    $title = "ALOT Games";
    $meta_desc = "Unique portfolio of games and gaming content with huge jackpot prizes, including lottery betting, fixed odds lottery games, KENO, bingo, scratch cards and more.";
    $meta_keywords = "Lottery, huge jackpot, jackpot games, KENO, bingo, scratch cards, lottery betting";
    $og_image = "";
    $og_url = $url."/game-content".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--gaming-content">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">ALOT Games</h1>
            <p class="paragraph-big">Unique portfolio of proprietary games ranging from lottery betting products and fixed odds lottery games to KENO, instant lotto, scratch cards and&nbsp;more.</p>
        </div>
    </div>
</section>

<div class="virtual-anchor virtual-anchor--1" id="learn-more"></div>

<section class="section players-experience">
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
</section>

<section class="section lotto-betting">
    <div class="container">
        <h2 class="heading-1">Lotto Betting</h2>
        <div class="split-content">
            <div class="split-content__item">
                <div class="lottery-icons">
                    <div class="lottery-icons__item lottery-icons__item--euromillions"></div>
                    <div class="lottery-icons__item lottery-icons__item--eurojackpot"></div>
                    <div class="lottery-icons__item lottery-icons__item--megamillions"></div>
                    <div class="lottery-icons__item lottery-icons__item--powerball"></div>
                </div>
            </div>
            <div class="split-content__item">
                <p class="paragraph">Let your players bet on the world’s largest lottery jackpots and other popular lottery-style games. A great acquisition and retention product, but also an amazing revenue generator in its own right.</p>
                <p class="paragraph">Prizes are guaranteed by our superior Jackpot Prize Cover, so you can rest assured that the payout is guaranteed, and you can focus on your business as&nbsp;usual.</p>
                <a href="lotto-betting<?=$ext?>" class="button button--green">Lottery demo</a>
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
</section>

<section class="section other-games">
    <div class="container">
        <div class="other-games__holder">
            <div class="other-games__column">
                <h2 class="heading-1">Instant Win Games</h2>
                <div class="other-games__item">
                    <div class="other-games__illustration" style="background-image: url(i/instant-game.jpg);"></div>
                    <p class="paragraph">Integrate our Instant Win Games and other lottery-style games to your gaming portfolio. Our proprietary content lets your players watch the draw and win instantly. With a higher RTP than lottery betting our instant games are ideal for sportsbook and casino players. All of our games are iTech certified and powered by RiNG™ our unique Random & Insured Number Generator.</p>
                    <a href="instant-win-games<?=$ext?>" class="button button--green">Instant games demo</a>
                </div>
            </div>
            <div class="other-games__column other-games__column--offset">
                <h2 class="heading-1">KENO... Differently</h2>
                <div class="other-games__item">
                    <div class="other-games__illustration" style="background-image: url(i/keno-game.jpg);"></div>
                    <p class="paragraph">KENO from all over the world in one place. Players can participate in KENO games offered by operators from all over the world or join an RNG-based KENO-style games from one screen. Very popular in Asian markets!</p>
                    <a href="keno-games<?=$ext?>" class="button button--green">KENO demo</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
