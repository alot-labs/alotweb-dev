<?php 
    include 'config.php';

    $title = "Careers";
    $meta_desc = "If you are interested in joining ALOT Solutions please look through our current openings and if your profile and strengths match what we’re looking for, we’ll invite you along to explore the opportunity in more detail.";
    $meta_keywords = "Careers, Jobs, Open positions, Work with us";
    $og_image = "";
    $og_url = $url."/careers".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--careers">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">Careers</h1>
            <p class="paragraph-big">If you are interested in joining us please look through our current openings and if your profile and strengths match what we’re looking for, we’ll invite you along to explore the opportunity in more detail.</p>
        </div>
    </div>
</section>

<section class="section achievements achievements--items-1 achievements--white achievements--no-icons">
    <div class="container">
        <div class="achievements__holder">
            <div class="achievements__item">
                <div class="achievements__text-holder">
                    <div class="achievements__pictogram achievements__pictogram--career"></div>
                    <p class="achievements__value">Open Positions</p>
                    <p class="paragraph">Currently there are no vacancies, but if you believe you could add value to our team, please send an email to
                        <a href="mailto:careers@alot-solutions.com">careers@alot-solutions.com</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section standalone-text standalone-text--center">
    <div class="container">
        <h2 class="heading-1">Our Values</h2>
        <p class="paragraph standalone-text__paragraph">These are the values that guide our business, our product development, and our brand – they make us a <strong>GROW</strong>ing business.</p>
    </div>
</section>

<section class="section corporate-values">
    <div class="container">
        <div class="corporate-values__holder">
            <div class="corporate-values__row">
                <div class="corporate-values__item corporate-values__item--text">
                    <h3 class="heading-2">Genuine</h3>
                    <p class="paragraph">Act with integrity, honesty & be true to yourself.</p>
                </div>
                <div class="corporate-values__item corporate-values__item--image corporate-values__item--image-1"></div>
            </div>
            <div class="corporate-values__row corporate-values__row--reverse">
                <div class="corporate-values__item corporate-values__item--text">
                    <h3 class="heading-2">Resilience</h3>
                    <p class="paragraph">Be empowered to deliver the best solutions.</p>
                </div>
                <div class="corporate-values__item corporate-values__item--image corporate-values__item--image-2"></div>
            </div>
            <div class="corporate-values__row">
                <div class="corporate-values__item corporate-values__item--text">
                    <h3 class="heading-2">Ownership</h3>
                    <p class="paragraph">Be an advocate for change & innovation.</p>
                </div>
                <div class="corporate-values__item corporate-values__item--image corporate-values__item--image-3"></div>
            </div>
            <div class="corporate-values__row corporate-values__row--reverse">
                <div class="corporate-values__item corporate-values__item--text">
                    <h3 class="heading-2">Work Together</h3>
                    <p class="paragraph">Have better conversations.</p>
                </div>
                <div class="corporate-values__item corporate-values__item--image corporate-values__item--image-4"></div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
