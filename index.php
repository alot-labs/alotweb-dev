<?php 
    include 'config.php';

    $title = "ALOT Solutions";
    $meta_desc = "The leading provider of jackpot solutions, risk management services, lottery management systems and unique gaming content.";
    $meta_keywords = "Lottery, jackpot, hedging, insurance, retail lottery, online lottery, mobile lottery, jackpot games";
    $og_image = "";
    $og_url = $url;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--homepage">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">The leading provider of<br></h1>
            <p class="paragraph-big">Risk Management, Lottery Systems,  <br>and Game Content.</p>
        </div>
    </div>
</section>

<section class="section stats">
    <div class="container">
        <div class="stats__holder">
            <div class="stats__item">
                <p class="stats__value">€350m</p>
                <p class="paragraph">In jackpot <br>paid out</p>
            </div>
            <div class="stats__item">
                <p class="stats__value">€90m</p>
                <p class="paragraph">Biggest <br>payout</p>
            </div>
            <div class="stats__item">
                <p class="stats__value">20M</p>
                <p class="paragraph">Jackpot for scratchcards &amp; instant games</p>
            </div>
            <div class="stats__item">
                <p class="stats__value">150</p>
                <p class="paragraph">Companies using our RiNG technology</p>
            </div>
            <div class="stats__item">
                <p class="stats__value">10</p>
                <p class="paragraph">Gambling licenses worldwide</p>
            </div>
        </div>
    </div>
</section>

<section class="section products-services">
    <div class="container">
        <h2 class="heading-1">Products and Services</h2>
        <div class="products-services__illustration">
            <div class="products-services__illustration-image"></div>
        </div>
        <div class="products-services__holder">
            <div class="products-services__column">
                <div class="products-services__item">
                    <div class="products-services__item-header">
                        <h3 class="heading-2">ALOT Prize Risk Management</h3>
                    </div>
                    <div class="products-services__item-body">
                        <p class="paragraph">Leverage the power of huge jackpots backed by our in-house insurance company. Impeccable track record in underwriting prize payout risk for gaming companies. </p>
                        <p class="paragraph"> Over $350M in jackpot prizes paid out to date, 90M single largest payout, 20M jackpot for scratchcards.</p>
                        <a href="lotto-betting<?=$ext?>" class="button button--blue">ALOT Risk Management</a>
                    </div>
                </div>
                <div class="products-services__item">
                    <div class="products-services__item-header">
                        <h3 class="heading-2">ALOT Lottery Systems</h3>
                    </div>
                    <div class="products-services__item-body">
                        <p class="paragraph">Access your lottery customers in every way possible – web and online, retail terminals, compact handheld devices, interactive betting terminals.</p>
                        <p class="paragraph">Turnkey solution, whether you sell online and/or on the streets.</p>
                        <a href="lottery<?=$ext?>" class="button button--blue">ALOT Lottery</a>
                    </div>
                </div>
            </div>
            <div class="products-services__column">
                <div class="products-services__item">
                    <div class="products-services__item-header">
                        <h3 class="heading-2">ALOT Games</h3>
                    </div>
                    <div class="products-services__item-body">
                        <p class="paragraph">License our catalogue of games unavailable anywhere else. KENO-style, fixed odds lotto, instant lottery and many other games offering huge prizes with unseen features.</p>
                        <p class="paragraph">Enhance your player’s experience with engaging new content under your brand.</p>
                        <a href="risk-management<?=$ext?>" class="button button--blue">ALOT Game Content</a>
                    </div>
                </div>
                <div class="products-services__item">
                    <div class="products-services__item-header">
                        <h3 class="heading-2">Example deployments</h3>
                    </div>
                    <div class="products-services__item-body">
                        <p class="paragraph">We support your charity or prize promotion marketing with our groundbraking technology. In combination with ALOT Risk Management, we boost your prizes to attract more patrons.</p>
                        <p class="paragraph">Raffles or fixed odds games. With or without a fee to enter. One-time or continuous. </p>
                        <a href="deployments<?=$ext?>" class="button button--blue">Example Deployments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section clients">
    <div class="container">
        <div class="heading-holder">
            <div class="heading-holder__item">
                <h2 class="heading-1">Our clients</h2>
            </div>
            <div class="heading-holder__item">
                <p class="paragraph">Come and join the family of market leading operators who understand the importance of the innovation in jackpot-based gaming. We service state lottery operators, lottery service providers, casinos, betting shops, online sportsbooks, bingos, marketing prize promoters and more.</p>
            </div>
        </div>
        <div class="clients__holder">
            <div class="clients__row">
                <div class="clients__logo clients__logo--kindred"></div>
                <div class="clients__logo clients__logo--unibet"></div>
                <div class="clients__logo clients__logo--bwin"></div>
            </div>
            <div class="clients__row clients__row--reverse">
                <div class="clients__logo clients__logo--betvictor"></div>
                <div class="clients__logo clients__logo--william-hill"></div>
                <div class="clients__logo clients__logo--bgt"></div>
            </div>
        </div>
    </div>
</section>

<section class="section news">
    <div class="container">
        <div class="heading-holder">
            <div class="heading-holder__item">
                <h2 class="heading-1">News</h2>
            </div>
            <div class="heading-holder__item heading-holder__item--right desktop-only">
                <a href="news<?=$ext?>" class="button button--blue">More news</a>
            </div>
        </div>
        <div class="news__holder">
            <div class="news__item">
                <div class="article-preview">
                    <a class="article-preview__image" style="background-image: url(i/news-1.jpg);" href="article<?=$ext?>"></a>
                    <div class="article-preview__text">
                        <p class="article-preview__date">Athens, 1<sup>st</sup> of August, 2019</p>
                        <h3 class="heading-2">
                            <a href="article<?=$ext?>">ALOT signs Intralot</a>
                        </h3>
                        <p class="paragraph">Intralot, the leading lottery operator operating popular games such as Brazilian Mega-Sena or American Powerball has signed an exclusive deal with ALOT Solutions to enhance their lottery games with unique features backed by ALOT'S world leading risk management solutions.</p>
                    </div>
                </div>
            </div>
            <div class="news__item">
                <div class="article-preview">
                    <a class="article-preview__image" style="background-image: url(i/news-2.jpg);" href="article<?=$ext?>"></a>
                    <div class="article-preview__text">
                        <p class="article-preview__date">Gibraltar, 18<sup>th</sup> of July, 2019</p>
                        <h3 class="heading-2">
                            <a href="article<?=$ext?>">JackpotJoy launches with ALOT</a>
                        </h3>
                        <p class="paragraph">Jackpotjoy, one of the leading operators licensed in Malta, UK and Sweden has enchanced their portfolio with jackpot betting games provided by ALOT Solutions. This deal marks an important milestone for both companies.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-only">
            <a href="news<?=$ext?>" class="button button--blue">More news</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>