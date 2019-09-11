<?php 
    include 'config.php';

    $title = "ALOT About us";
    $meta_desc = "Company profile, history, track record and team composition. ALOT is the number one provider of jackpot risk management services in the world, also offering unique gaming content and lottery systems.";
    $meta_keywords = "Company profile, team, history";
    $og_image = "";
    $og_url = $url."/about_us".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--example-deployments">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">Example <br>Deployments</h1>
            <!--p class="paragraph-big">Lorem Ipusm.</p-->
        </div>
    </div>
</section>

<section class="section deployment">
    <div class="deployment__item deployment__item--unibet">
        <div class="container">
            <div class="deployment__holder deployment__holder--left">
                <div class="deployment__wrapper">
                    <h2 class="heading-1">Game client</h2>
                    <div class="deployment__screenshot deployment__screenshot--unibet">
                        <a class="deployment__logo deployment__logo--unibet" href="https://www.unibet.co.uk/" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="deployment__item deployment__item--lottoland">
        <div class="container">
            <div class="deployment__holder deployment__holder--right">
                <div class="deployment__wrapper">
                    <h2 class="heading-1">Prize Cover</h2>
                    <div class="deployment__screenshot deployment__screenshot--lottoland">
                        <a class="deployment__logo deployment__logo--lottoland" href="https://www.lottoland.co.uk/" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="deployment__item deployment__item--lottomart">
        <div class="container">
            <div class="deployment__holder deployment__holder--left">
                <div class="deployment__wrapper">
                    <h2 class="heading-1">Prize Cover</h2>
                    <div class="deployment__screenshot deployment__screenshot--lottomart">
                        <a class="deployment__logo deployment__logo--lottomart" href="https://www.lottomart.com/" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="deployment__item deployment__item--coral">
        <div class="container">
            <div class="deployment__holder deployment__holder--right">
                <div class="deployment__wrapper">
                    <h2 class="heading-1">Self Service Betting Terminal</h2>
                    <div class="deployment__screenshot deployment__screenshot--coral">
                        <a class="deployment__logo deployment__logo--coral" href="https://sports.coral.co.uk/" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>