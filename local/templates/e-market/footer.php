<?php
?>

<!-- sponsor -->
<section class="sponsor">
    <div class="container">
        <div id="sponsor" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-inline text-center">
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/1.gif" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/2.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/3.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/4.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/5.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/6.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/7.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/8.png" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-inline text-center">
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/1.gif" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/2.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/3.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/4.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/5.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/6.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/7.png" /></li>
                                <li><img class="" src="<?=SITE_TEMPLATE_PATH?>/assets/images/8.png" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="control-left" href="#sponsor" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="control-right" href="#sponsor" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</section>

    <!-- social icons -->
    <section class="social-icons">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="list-inline text-center">
                        <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" ><i class="fa fa-spotify"></i></a></li>
                        <li><a href="#" ><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#" ><i class="fa fa-share-alt"></i></a></li>
                        <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" ><i class="fa fa-delicious"></i></a></li>
                        <li><a href="#" ><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" ><i class="fa fa-dropbox"></i></a></li>
                        <li><a href="#" ><i class="fa fa-soundcloud"></i></a></li>
                        <li><a href="#" ><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" ><i class="fa fa-github-alt"></i></a></li>
                        <li><a href="#" ><i class="fa fa-skype"></i></a></li>
                        <li><a href="#" ><i class="fa fa-stumbleupon"></i></a></li>
                        <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h2>About E-Market</h2>
                        <div class="heading-border b-color-1"></div>
                        <p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Te eam exerci vulputate consetetur, 								causae consulatu eaper,  apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Te eam exerci 								vulputate consetetur, causae consulatu eaper</p>
                        <div><a href="">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        <strong>Newsletter</strong>
                        <form class="navbar-for" role="email">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="nav-search"><a href="#"><i class="fa fa-envelope"></i></a></span>
                            </div>
                        </form>
                        <small>Eros posse verterem congue saperet.</small>
                    </div>
                    <?
//                    $APPLICATION->IncludeComponent(
//	"cigars:cigars.newproduct",
//	"footer-new",
//	array(
//		"DETAIL_URL" => "#ELEMENT_ID#",
//		"IBLOCK_TYPE_ID" => "2",
//		"COMPONENT_TEMPLATE" => "footer-new",
//		"TITLE" => "Новые Товары"
//	),
//	false
//);?>


                    <?php

                    $APPLICATION->IncludeFile(
                        INCLUDE_PATH . '/html/contact/footer_contact.php',
                        [],
                        [
                            'SHOW_BORDER' => false,
                            'MODE' => 'php',
                        ]
                    );
                    ?>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>Copyright 2015 made by <a href="#">Bootultra.com</a> & Disign by Shaifuddin. All Rights Reserved.</p>
                        <ul class="list-inline center-block">
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/card-1.png"></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/card-2.png"></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/card-3.png"></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/card-4.png"></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/card-5.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
