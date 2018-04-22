<?php include('templates/header.php'); ?>

<!-- Hero section START -->
<section class="section section--hero d-flex flex-column justify-content-center align-items-center">
    <div class="moto">
        <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span>
    </div>
    <div class="tracking-block">
        <div class="d-flex justify-content-between align-items-center mt-2">
            <input class="input input--tracking" type="text" id="trackingNumbers" name="trackingNumbers" placeholder="Enter tracking number(s)"></input>
            <button class="button button--primary button--big">Track ...</button>
        </div>
        <!-- <div class="tracking-block__info">
            Track up to 10 numbers at a time, separate with a comma or Enter.
        </div> -->
    </div>
</section>
<!-- Hero section START -->

<!-- Content section START -->
<section class="section section--content">
    <div class="container">
        <div class="info-blocks-wrapper">

            <div class="row news">
                <div class="col-md-4">
                    <article class="news-list__article float-right">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <article class="news-list__article float-left">
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
            <div class="text-center">
                <button type="button" name="button" class="button button--inverse button--big">Read all news</button>
            </div>

            <!-- <div class="col-md-4">
                <div class="info-block info-block--links">
                    <h3>Quick links</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="#" class="d-flex align-items-center">
                                <span class="links-list__icon d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-forum"></i>
                                </span>
                                <span class="links-list__text">Chat live with our support</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="import.php" class="d-flex align-items-center">
                                <span class="links-list__icon d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-airplane-landing"></i>
                                </span>
                                <span class="links-list__text">Import</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="d-flex align-items-center">
                                <span class="links-list__icon d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-airplane-takeoff"></i>
                                </span>
                                <span class="links-list__text">Export</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="d-flex align-items-center">
                                <span class="links-list__icon d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-domain"></i>
                                </span>
                                <span class="links-list__text">About Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-block info-block--news">
                    <ul class="news-list list-unstyled">
                        <li class="mb-3">
                            <article class="news-list__article">
                                <a href="#" class="d-flex">
                                    <img src="http://lorempixel.com/110/74" alt="">
                                    <div class="news-list__article-content">
                                        <h4>FedEx and UPS: Competing CEOs Agree on Reforms</h4>
                                        <span class="date">11.11.2017.</span>
                                    </div>
                                </a>
                            </article>
                        </li>
                        <li class="mb-3">
                            <article class="news-list__article">
                                <a href="#" class="d-flex">
                                    <img src="http://lorempixel.com/110/74" alt="">
                                    <div class="news-list__article-content">
                                        <h4>From Engines to Tail Lights, FedEx Technicians’ Knowledge On Display</h4>
                                        <span class="date">11.11.2017.</span>
                                    </div>
                                </a>
                            </article>
                        </li>
                        <li class="mb-3">
                            <article class="news-list__article">
                                <a href="#" class="d-flex">
                                    <img src="http://lorempixel.com/110/74" alt="">
                                    <div class="news-list__article-content">
                                        <h4>FedEx and UPS: Competing CEOs Agree on Reforms</h4>
                                        <span class="date">11.11.2017.</span>
                                    </div>
                                </a>
                            </article>
                        </li>
                    </ul>
                    <div class="text-right pt-2">
                        <a href="posts.php" class="color-yellow">All news <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-md-4">
                <div class="info-block info-block--contact">
                    <h3>Contact</h3>
                    <div class="info-block__content">
                        <h4>Flying Cargo YU doo</h4>
                        <ul class="contact-list list-unstyled">
                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-map-marker small-icon mr-2"></i>
                                <span>Autoput 22, 11000 Beograd</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-phone small-icon mr-2"></i>
                                <span>+381 11 3109 400</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-fax small-icon mr-2"></i>
                                <span>+381 11 3109 444</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-email small-icon mr-2"></i>
                                <span>csa@flying-cargo.rs</span>
                            </li>
                            <li class="d-flex align-items-top">
                                <i class="mdi mdi-clock small-icon mr-2"></i>
                                <span class="mt-1">Mon - Fri: 08:00 to 19:00</br>
                                    Sat: 08:00 to 14:00</br>
                                    Closed on Sundays and public holidays
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->

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
