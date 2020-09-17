<?php 
    include 'config.php';

    $title = "ALOT Prize Cover";
    $meta_desc = "Prize Cover for state lotteries, lottery service providers, gaming companies, sportsbooks, casinos and promotional companies offering large jackpot prizes.";
    $meta_keywords = "Lottery, huge jackpot, hedging, insurance, jackpot games";
    $og_image = "";
    $og_url = $url."/prize-cover".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section splitbox splitbox--2 splitbox--no-margin">
    <a class="splitbox__item" href="lottery-prize-cover<?=$ext?>">
        <div class="splitbox__image splitbox__image--lottery-prize-cover"></div>
        <div class="splitbox__overlay"></div>
        <div class="splitbox__text">
            <h2 class="heading-1">Lotteries</h2>
        </div>
    </a>
    <a class="splitbox__item" href="prize-draws<?=$ext?>">
        <div class="splitbox__image splitbox__image--prize-draws"></div>
        <div class="splitbox__overlay"></div>
        <div class="splitbox__text">
            <h2 class="heading-1">Free prize draws</h2>
        </div>
    </a>
</section>

<?php include 'footer.php'; ?>
