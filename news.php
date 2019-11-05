<?php 
    include 'config.php';

    $title = "ALOT News";
    $meta_desc = "Latest news, product updates and development information within ALOT – the world leading risk management services provider, lottery systems providers and jackpot games developer.";
    $meta_keywords = "News, Blog, updates";
    $og_image = "";
    $og_url = $url."/news".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section articles">
    <div class="articles__header articles__header--overlap">
        <div class="container">
            <h1 class="heading-1">News</h1>
        </div>
    </div>
    <div class="articles__content">
        <div class="container">
            <div class="articles__holder">

                <div class="articles__item">
                    <div class="article-preview">
                        <a class="article-preview__image" style="background-image: url(i/news-1.jpg);" href="article<?=$ext?>"></a>
                        <div class="article-preview__text">
                            <p class="article-preview__date">1<sup>st</sup> of October, 2019</p>
                            <h3 class="heading-2">
                                <a href="article<?=$ext?>">Lottoland Solutionis becomes ALOT</a>
                            </h3>
                            <p class="paragraph">ALOT Solutions has arrived to power innovation in the lottery, gaming and prize promotions sector to benefit players, operators and their good causes.</p>
                            <a href="article<?=$ext?>" class="button button--blue">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="articles__item">
                    <div class="article-preview article-preview--more-news">
                        <p class="article-preview__more-news-text">More news coming soon</p>
                    </div>
                </div>

                <!--div class="articles__item">
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
                <div class="articles__item">
                    <div class="article-preview">
                        <a class="article-preview__image" href="article<?=$ext?>"></a>
                        <div class="article-preview__text">
                            <p class="article-preview__date">Lorem, 1<sup>st</sup> of Ipusm, 2019</p>
                            <h3 class="heading-2">
                                <a href="article<?=$ext?>">Lorem Ipsum Dolor</a>
                            </h3>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a augue id tellus venenatis consequat vitae ac nisl. Cras imperdiet at lacus id tincidunt. Morbi facilisis pretium ex ultrices blandit.</p>
                        </div>
                    </div>
                </div>
                <div class="articles__item">
                    <div class="article-preview">
                        <a class="article-preview__image" href="article<?=$ext?>"></a>
                        <div class="article-preview__text">
                            <p class="article-preview__date">Lorem, 1<sup>st</sup> of Ipusm, 2019</p>
                            <h3 class="heading-2">
                                <a href="article<?=$ext?>">Lorem Ipsum Dolor</a>
                            </h3>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a augue id tellus venenatis consequat vitae ac nisl. Cras imperdiet at lacus id tincidunt. Morbi facilisis pretium ex ultrices blandit.</p>
                        </div>
                    </div>
                </div>
                <div class="articles__item">
                    <div class="article-preview">
                        <a class="article-preview__image" href="article<?=$ext?>"></a>
                        <div class="article-preview__text">
                            <p class="article-preview__date">Lorem, 1<sup>st</sup> of Ipusm, 2019</p>
                            <h3 class="heading-2">
                                <a href="article<?=$ext?>">Lorem Ipsum Dolor</a>
                            </h3>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a augue id tellus venenatis consequat vitae ac nisl. Cras imperdiet at lacus id tincidunt. Morbi facilisis pretium ex ultrices blandit.</p>
                        </div>
                    </div>
                </div-->


            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
