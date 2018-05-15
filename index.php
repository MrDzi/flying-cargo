<?php include('templates/header.php'); ?>

<!-- Hero section START -->
<section class="section section--hero">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="moto">
                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span>
            </div>
            <div class="tracking-block">
                <div class="d-flex justify-content-between align-items-center mt-2" style="flex-wrap: no-wrap">
                    <input class="input input--tracking" type="text" id="trackingNumbers" name="trackingNumbers" placeholder="Enter tracking number(s)" style="flex-shrink: 0"></input>
                    <button id="trackingNumbersButton" class="button button--primary button--big">Track package</button>
                </div>
                <!-- <div class="tracking-block__info">
                    Track up to 10 numbers at a time, separate with a comma or Enter.
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Hero section START -->

<!-- Content section START -->
<section class="section section--content">
    <div class="container">
        <div class="news-block-wrapper">
            <div class="row">
                <div class="col-md-4 news-block-wrapper__col">
                    <article class="news-list__article">
                        <a href="#">
                            <img src="http://lorempixel.com/110/74" alt="">
                            <div class="news-list__article-content">
                                <h4>FedEx and UPS: Competing CEOs Agree on Reforms</h4>
                                <!-- <span class="date">11.11.2017.</span> -->
                                <p>This is some content of some news. Please ignore this text and skip it, don't read it. It's not important.</p>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 news-block-wrapper__col">
                    <article class="news-list__article">
                        <a href="#">
                            <img src="http://lorempixel.com/110/74" alt="">
                            <div class="news-list__article-content">
                                <h4>FedEx and UPS: Competing CEOs Agree on Reforms</h4>
                                <!-- <span class="date">11.11.2017.</span> -->
                                <p>This is some content of some news. Please ignore this text and skip it, don't read it. It's not important.</p>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 news-block-wrapper__col">
                    <article class="news-list__article">
                        <a href="#">
                            <img src="http://lorempixel.com/110/74" alt="">
                            <div class="news-list__article-content">
                                <h4>FedEx and UPS: Competing CEOs Agree on Reforms</h4>
                                <!-- <span class="date">11.11.2017.</span> -->
                                <p>This is some content of some news. Please ignore this text and skip it, don't read it. It's not important.</p>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
            <div class="text-center pt-20">
                <button type="button" name="button" class="button button--inverse button--big">Read all news</button>
            </div>
        </div>
    </div>
</section>
<!-- Content section END -->

<!-- Map section START -->
<section class="section section--contact">
    <!-- TODO Google map -->
</section>
<!-- Map section END -->

<?php include('templates/footer.php'); ?>
