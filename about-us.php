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

<section class="section hero hero--about-us">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">Company profile</h1>
            <p class="paragraph-big">The unique provider of jackpot solutions, risk management and lottery systems – online or land-based.</p>
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
                <p class="paragraph">Mike is a nice chap and we like him&nbsp;a&nbsp;lot.</p>
            </div>
            <div class="team__item">
                <div class="team__picture" style="background-image: url(i/team-markus-stricker.jpg)"></div>
                <h3 class="heading-2">Markus Stricker</h3>
                <p class="heading-3">CRO</p>
                <p class="paragraph">Markus is ALOT’s Chief Risk Officer and we feel safe with&nbsp;him.</p>
            </div>
            <div class="team__item">
                <div class="team__picture" style="background-image: url(i/team-michal-chovanec.jpg)"></div>
                <h3 class="heading-2">Michal Chovanec</h3>
                <p class="heading-3">CTO</p>
                <p class="paragraph">Candid super techie who does not tolerate any BS.</p>
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
                <p class="paragraph">The new guy.</p>
            </div>
        </div>
    </div>
</section>

<section class="section contact">
    <div class="container">
        <div class="heading-holder heading-holder--center">
            <div class="heading-holder__item">
                <h2 class="heading-1">Contact Us</h2>
            </div>
            <div class="heading-holder__item">
                <div class="contact__anchor">
                    <p class="contact__anchor-text">General inquires</p>
                    <a href="mailto:info@alot-solutions.com" class="contact__anchor-hyperlink">info@alot-solutions.com</a>
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
            <div class="locations__column">
                <div class="locations__item">
                    <div class="locations__illustration" style="background-image: url(i/office-location-hong-kong.jpg)"></div>
                    <div class="locations__text-holder">
                        <h3 class="heading-2">Hong Kong</h3>
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