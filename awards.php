<?php 
    include 'config.php';

    $title = "ALOT Awards";
    $meta_desc = "";
    $meta_keywords = "";
    $og_image = "";
    $og_url = $url."/awards".$ext;

    include 'header.php';
    include 'menu.php';
?>

<section class="section hero hero--awards">
    <div class="container">
        <div class="hero__holder">
            <h1 class="heading-1">Awards</h1>
            <p class="paragraph-big">ALOT Solutions has amassed the best in the business who have been recognised by the industry with these prestigious&nbsp;awards.</p>
        </div>
    </div>
</section>

<section class="section awards">
    <div class="container">
        <div class="awards__holder">
            <div class="awards__item">
                <div class="awards__logo awards__logo--egr-operator-2018"></div>
                <div class="awards__text-holder">
                    <h3 class="heading-3">ALOT's team scooped Lottery Operator of the Year’ award for the second year running at the EGR Operator Awards 2018.</h3>
                    <p class="paragraph">The EGR judging panel said this about ALOT'a team: They are a high-quality innovator and genuine disrupter in the marketplace. Its move into insurance reflects real domain expertise and leadership. The fact the company is willing to challenge lottery dominance and the hurdles associated with this demonstrates the confidence in its offering.</p>
                </div>
            </div>
            <div class="awards__item">
                <div class="awards__logo awards__logo--egr-supplier-2019"></div>
                <div class="awards__text-holder">
                    <h3 class="heading-3">We have won online lottery supplier&nbsp;award.</h3>
                    <p class="paragraph">We are pleased to announce that we have won Online Lottery Supplier 2019 at the EGR B2B Awards in London. ALOT beat off some strong competition in the category to take home the prestigious award.</p>
                    <p class="paragraph">As a supplier, ALOT's team has revolutionised lottery betting for operators and their customers, creating a new vertical for operators to deploy containing a huge mix of low stakes high jackpot lottery products, including the new NOW range of high jackpot instant lotteries.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>