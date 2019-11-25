<?php 
    include 'config.php';

    $title = "ALOT Contact us";
    $meta_desc = "";
    $meta_keywords = "";
    $og_image = "";
    $og_url = $url."/contact_us".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section contact">
    <div class="container">
        <div class="heading-holder">
            <div class="heading-holder__item">
                <h2 class="heading-1">Contact Us</h2>
            </div>
            <div class="heading-holder__item">
                <div class="contact__anchor contact__anchor--email">
                    <p class="contact__anchor-text">General Enquiries</p>
                    <a href="mailto:info@alot-solutions.com" class="contact__anchor-hyperlink">info@alot-solutions.com</a>
                </div>
                <div class="contact__anchor contact__anchor--support">
                    <p class="contact__anchor-text">Partner Support</p>
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

            <div class="locations__item">
                <div class="locations__illustration" style="background-image: url(i/office-location-slovakia.jpg)"></div>
                <div class="locations__text-holder">
                    <h3 class="heading-2">Slovakia</h3>
                    <p class="paragraph">
                        <strong>In-house development studio</strong><br>
                        Digital Park<br>
                        Einsteinova 23<br>
                        Bratislava 821 05
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>