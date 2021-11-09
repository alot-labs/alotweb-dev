<?php 
    include 'config.php';

    $title = "Prize draw cover";
    $meta_desc = "We provide prize cover to support companies' promotions and prize draws. You can offer exciting, life-changing prizes to customers, turbo-charging your customer acquisition all at a predictable and low cost with zero prize liability for you.";
    $meta_keywords = "Promotions, huge jackpot, hedging, insurance, prize cover";
    $og_image = "";
    $og_url = $url."/prize-draws".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--prize-draw">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">We reward your customers with free chances to win our £1 million</h1>
            <p class="paragraph-big">We provide prize cover to support your free to enter promotions. You&nbsp;can offer exciting, life-changing prizes to your customers, <span class="nowrap">turbo-charging</span> customer acquisition.</p>
        </div>
    </div>
</section>

<section class="section achievements achievements--items-3 achievements--white achievements--no-icons">
    <div class="container">
        <div class="achievements__holder">
            <div class="achievements__item">
                <div class="achievements__text-holder">
                    <div class="achievements__pictogram achievements__pictogram--marketing"></div>
                    <p class="achievements__value">Marketing Agencies</p>
                    <p class="paragraph">We can support your client’s projects enabling you to offer a full-service marketing package for prize promotions.</p>
                </div>
            </div>
            <div class="achievements__item">
                <div class="achievements__text-holder">
                    <div class="achievements__pictogram achievements__pictogram--brand"></div>
                    <p class="achievements__value">Challenger Brands</p>
                    <p class="paragraph">Prize promotions create brand awareness and are influential in brand switching, encouraging customers to try your product over the competition.</p>
                </div>
            </div>
            <div class="achievements__item">
                <div class="achievements__text-holder">
                    <div class="achievements__pictogram achievements__pictogram--cart"></div>
                    <p class="achievements__value">e-Commerce Sites</p>
                    <p class="paragraph">Attract customers to your sites with  £1 million prize promotions, motivate purchase frequency through timed promotions and encourage new and repeat custom.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section image-with-description">
    <div class="container">
        <div class="image-with-description__holder">
            <div class="image-with-description__plate image-with-description__plate--blue">
                <h3 class="heading-3">Prize promoters</h3>
                <p class="image-with-description__text">Are you marketing your services by offering potential customers a chance to win exciting prizes? How about offering £1 million cash or a prize equivalent instead of a mobile phone? There are no limits to your imagination.</p>
            </div>
            <div class="image-with-description__illustration" style="background-image: url(i/prize-draw-infobox.jpg);"></div>
        </div>
    </div>
</section>

<section class="section contact">
    <div class="container">
        <div class="heading-holder heading-holder--extended-mobile-margin">
            <div class="heading-holder__item">
                <h2 class="heading-1">Contact Us</h2>
                <p class="paragraph">Contact us to discuss how our £1 million<br> free to enter prize draws can drive your business.</p>
                <a href="contact-us<?=$ext?>" class="button button--white-blue">Contact us</a>
            </div>
            <!--div class="heading-holder__item">
                <h2 class="heading-1">Meet Us</h2>
                <p class="paragraph">
                    Meet us at the <a href="https://www.excel.london/visitor/whats-on/the-b2b-marketing-expo-2020" target="_blank">B2B Marketing Exhibition</a>, Excel London<br>
                    Tuesday 10<sup>th</sup> to Wednesday 11<sup>th</sup> November<br>
                    Stand 535
                </p>
                <div class="logo-excel-london"></div>
            </div-->
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
