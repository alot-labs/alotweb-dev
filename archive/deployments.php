<?php 
    include 'config.php';

    $title = "ALOT Example Deployments";
    $meta_desc = "Example deployments of ALOT's products and services, including games, lottery systems and prize cover services.";
    $meta_keywords = "Examples";
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
    <div class="deployment__item deployment__item--unibet">
        <div class="container">
            <div class="deployment__holder deployment__holder--left">
                <div class="deployment__wrapper">
                    <h2 class="heading-1">Games</h2>
                    <div class="deployment__screenshot deployment__screenshot--unibet">
                        <a class="deployment__logo deployment__logo--unibet" href="https://www.unibet.co.uk/" target="_blank"></a>
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

    <!--div class="deployment__item deployment__item--coral">
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
    </div-->

    <div class="deployment__item deployment__item--ladbrokes">
        <div class="container">
            <div class="deployment__holder deployment__holder--right">
                <div class="deployment__wrapper">
                    <h2 class="heading-1">Self Service Betting Terminal</h2>
                    <div class="deployment__screenshot deployment__screenshot--ladbrokes">
                        <a class="deployment__logo deployment__logo--ladbrokes" href="http://ladbrokes.com" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'; ?>