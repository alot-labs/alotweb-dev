<?php 
    include 'config.php';

    $title = "Lottoland Solutions rebrands as ‘ALOT Solutions’";
    $meta_desc = "Lottoland’s business-to-business division rebrands as ALOT Solutions. The new name provides a clear distinction between the Lottoland consumer-facing division and the newly-named ALOT Solutions B2B and B2G division.";
    $meta_keywords = "News, article, update, blog, ALOT";
    $og_image = "";
    $og_url = $url."/article".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section articles">
    <div class="articles__header articles__header--overlap">
        <div class="container">
            <h1 class="heading-1">Lottoland Solutions rebrands as ‘ALOT Solutions’</h1>
        </div>
    </div>
    <div class="articles__content">
        <div class="container">
            <div class="articles__hero" style="background-image: url(i/article-hero-1.jpg);"></div>
            <article class="articles__text">
                <p class="date">25<sup>th</sup> of November, 2019</p>
                <p>Lottoland’s business-to-business division rebrands as ALOT Solutions (www.alot-solutions.com).</p>
                <p>The new name provides a clear distinction between the Lottoland consumer-facing division and the newly-named ALOT Solutions B2B and B2G division.</p>
                <p>Separate leadership, operations and technology enabled phenomenal growth over the last three years for Lottoland Solutions, therefore it is a natural progression to now have a separate identity.</p>
                <p>Mike Carruthers (Bogie) will continue to lead the business as CEO of ALOT Solutions.</p>
                <p>Mike explained “The time is right for the Solutions part of Lottoland to have its own identity. As ALOT Solutions we are able to focus on our mission of powering innovation to benefit players, operators, state lotteries and their good causes. We are making ALOT Solutions the go-to provider for Prize Cover, Games and Technology and we look forward to partnering with even more innovative lottery, gaming and non-gaming operators in 2020 and beyond.”</p>
            </article>
            <div class="articles__button-holder">
                <a href="news<?=$ext?>" class="button button--blue">Back to news</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>