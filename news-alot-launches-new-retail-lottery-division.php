<?php 
    include 'config.php';

    $title = "ALOT launches new retail lottery division";
    $meta_desc = "ALOT Solutions has today announced the launch of ALOT Systems. This new division specialises in the provision of digital land-based lottery solutions to power retail lottery operations for licensed lottery operators.";
    $meta_keywords = "News, article, update, blog, ALOT";
    $og_image = "";
    $og_url = $url."/article".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section articles">
    <div class="articles__header articles__header--overlap">
        <div class="container">
            <h1 class="heading-1">ALOT launches new retail lottery division</h1>
        </div>
    </div>
    <div class="articles__content">
        <div class="container">
            <div class="articles__hero" style="background-image: url(i/article-hero-3.jpg);"></div>
            <article class="articles__text">
                <p class="date">27<sup>th</sup> of February, 2020</p>
                <p>New division provides retail lottery systems, games and terminals.</p>
                <p>ALOT Solutions has today announced the launch of ALOT Systems. This new division specialises in the provision of digital land-based lottery solutions to power retail lottery operations for licensed lottery operators.</p>
                <p>The vast majority of lottery tickets are still sold in retail outlets and with today’s announcement ALOT can now support these operators. Whether off-the-shelf or customized,  this full-scope solution caters for all retail needs covering lottery games, lottery terminals (hand-held, desktop & standalone touch screens), lottery agent management and all associated peripherals and consumables.</p>
                <p>Having integrated ALOT Systems with ALOT Solutions’ core Prize Cover engine and Games offerings, lottery operators and their players can now enjoy ALOT’s innovative products whether playing in retail or online.</p>
                <p>Mike Carruthers, CEO of ALOT Solutions commented: “I’m proud that we can make this announcement. The launch of our ALOT Systems division makes us truly omnichannel, making sure we power innovation across all channels - including retail which is the biggest traditional lottery sales channel - enhancing our ability to power innovation in the lottery, gaming and prize promotion sectors to benefit all players, operators and their good causes.”</p>
                <p>Gary Cheung, CEO of the ALOT Systems division said: “The ALOT Systems team combines many years of industry experience with a best-in-class, fully-certified technology stack and is well-positioned to provide innovative solutions for lottery operators. Our platform consolidates all lottery operations into a uniform and enterprise-wide system environment, streamlining processes such as retailer invoicing and clearance, sales and winning distribution, accounting, tracking of fixed assets and consumable usage control.”</p>
                <p>Further information about ALOT Systems can be found at <a href="https://www.alotsystems.com/" target="_blank">www.alotsystems.com</a></p>
            </article>
            <div class="articles__button-holder">
                <a href="news<?=$ext?>" class="button button--blue">Back to news</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>