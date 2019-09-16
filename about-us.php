<?php 
    include 'config.php';

    $title = "ALOT About us";
    $meta_desc = "Company profile, history, track record and team composition. ALOT is the number one provider of jackpot cover services in the world, also offering unique games and lottery systems.";
    $meta_keywords = "Company profile, team, history";
    $og_image = "";
    $og_url = $url."/about_us".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--about-us">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">Company Profile</h1>
            <p class="paragraph-big">The unique provider of prize cover, lottery systems and games – through all channels.</p>
        </div>
    </div>
</section>

<section class="section about-us">
    <div class="container">
        <div class="heading-holder">
            <div class="heading-holder__item">
                <h2 class="heading-1">About Us</h2>
            </div>
            <div class="heading-holder__item">
                <p class="paragraph">We have built, acquired and combined assets from insurance, lottery betting, superior technology and gaming industry to create a unique offering ready for the next generation of jackpot-based gaming innovation.</p>
                <p class="paragraph">We are expanding rapidly and taking unique approach to enable operators to leverage the power of huge jackpots and numbers-based gaming.</p>
            </div>
        </div>
    </div>
</section>

<section class="section team">
    <div class="container">
        <h2 class="heading-1">Management Team</h2>
        <div class="team__holder">
            <div class="team__item">
                <div class="team__picture" style="background-image: url(i/team-michael-bogie.jpg)"></div>
                <h3 class="heading-2">Michael Bogie</h3>
                <p class="heading-3">CEO</p>
                <p class="paragraph">Mike is a nice chap and we like him&nbsp;a&nbsp;lot, but he is too modest to say anything nice about himself in this section of our awesome website.</p>
            </div>
            <div class="team__item">
                <div class="team__picture" style="background-image: url(i/team-markus-stricker.jpg)"></div>
                <h3 class="heading-2">Markus Stricker</h3>
                <p class="heading-3">CRO</p>
                <p class="paragraph">Markus holds a PhD in Mathematics and is a qualified actuary with more than 20 years of speciality re/insurance experience. He focuses on creating re/insurance solutions for technology based businesses and oversees ALOTs risk&jackpot management businesses.</p>
            </div>
            <div class="team__item">
                <div class="team__picture" style="background-image: url(i/team-michal-chovanec.jpg)"></div>
                <h3 class="heading-2">Michal Chovanec</h3>
                <p class="heading-3">CTO</p>
                <p class="paragraph">Michal is an information technology pioneer with over 20 years of experience in managing software development teams in various sectors.  Thanks to his diligent and systematic approach to solving complex problems. Michal with ALOT dev team ensures robustness, security and scalability of ALOT Technology products and services.</p>
            </div>
            <div class="team__item">
                <div class="team__picture" style="background-image: url(i/team-geaspar-brybe.jpg)"></div>
                <h3 class="heading-2">Geaspar Brybe</h3>
                <p class="heading-3">Head of Asia</p>
                <p class="paragraph">Our Hong Kong based guru.</p>
            </div>
            <div class="team__item">
                <div class="team__picture" style="background-image: url(i/team-marek-mahdal.jpg)"></div>
                <h3 class="heading-2">Marek Mahdal</h3>
                <p class="heading-3">COO</p>
                <p class="paragraph">With over 20 years of management experience, Marek is a senior digital leader, product development & operations specialist overseeing ALOTs business operations ensuring that effective operational, control and reporting procedures are in place and all systems can scale with our partners requirements.</p>
            </div>
        </div>
    </div>
</section>

<div class="virtual-anchor virtual-anchor--2" id="contact"></div>

<section class="section contact">
    <div class="container">
        <div class="heading-holder">
            <div class="heading-holder__item">
                <h2 class="heading-1">Contact Us</h2>
            </div>
            <div class="heading-holder__item">
                <div class="contact__anchor contact__anchor--email">
                    <p class="contact__anchor-text">General inquires</p>
                    <a href="mailto:info@alot-solutions.com" class="contact__anchor-hyperlink">info@alot-solutions.com</a>
                </div>
                <div class="contact__anchor contact__anchor--support">
                    <p class="contact__anchor-text">Customer support</p>
                    <a href="mailto:support@alot-solutions.com" class="contact__anchor-hyperlink">support@alot-solutions.com</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section locations">
    <div class="container">
        <h2 class="heading-1">Office locations</h2>
        <div class="locations__holder">
            <div class="locations__column">
                <div class="locations__item">
                    <div class="locations__illustration" style="background-image: url(i/office-location-gibraltar.jpg)"></div>
                    <div class="locations__text-holder">
                        <h3 class="heading-2">Gibraltar (HQ)</h3>
                        <p class="paragraph">
                            <strong>ALOT Solutions Limited</strong><br>
                            5.08 World Trade Center<br>
                            6 Bayside Road<br>
                            Gibraltar GX111AA
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>