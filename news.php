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
                        <a class="article-preview__image" style="background-image: url(i/news-1.jpg);" href="news-lottoland-solutions-rebrands-to-alot-solutions<?=$ext?>"></a>
                        <div class="article-preview__text">
                            <p class="article-preview__date">25<sup>th</sup> of November, 2019</p>
                            <h3 class="heading-2">
                                <a href="news-lottoland-solutions-rebrands-to-alot-solutions<?=$ext?>">Lottoland Solutions rebrands as ‘ALOT Solutions’</a>
                            </h3>
                            <p class="paragraph">Lottoland’s business-to-business division rebrands as ALOT Solutions. The new name provides a clear distinction between the Lottoland consumer-facing division and the newly-named ALOT Solutions B2B and B2G division.</p>
                            <a href="news-lottoland-solutions-rebrands-to-alot-solutions<?=$ext?>" class="button button--blue">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="articles__item">
                    <div class="article-preview">
                        <a class="article-preview__image" style="background-image: url(i/news-2.jpg);" href="news-alot-solutions-expands-management-team<?=$ext?>"></a>
                        <div class="article-preview__text">
                            <p class="article-preview__date">30<sup>th</sup> of January, 2020</p>
                            <h3 class="heading-2">
                                <a href="news-alot-solutions-expands-management-team<?=$ext?>">ALOT Solutions Expands Management Team</a>
                            </h3>
                            <p class="paragraph">ALOT Solutions have today announced two senior hires - Chief Operations Officer Marek Mahdal and Chief Risk Officer Dr Markus Stricker. These appointments follow the ALOT Solutions rebrand last month with more announcements coming soon as CEO Mike Carruthers positions the business to provide prize cover, technology and content to a wider range of customers.</p>
                            <a href="news-alot-solutions-expands-management-team<?=$ext?>" class="button button--blue">Read more</a>
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
