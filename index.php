<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин Cigar");
?>

    <!-- home -->
    <?php
        $APPLICATION->IncludeFile(
                INCLUDE_PATH . '/html/home_banner.php',
            [],
            [
                'MODE' => 'html',
            ]
        );
    ?>

    <!-- featured product -->
    <?$APPLICATION->IncludeComponent(
	"cigars:cigars.newproduct", 
	".default", 
	array(
		"DETAIL_URL" => "#ELEMENT_ID#",
		"IBLOCK_TYPE_ID" => "2",
		"COMPONENT_TEMPLATE" => ".default",
		"TITLE" => "Новые Товары"
	),
	false
);?>


    <!-- emarket adds -->
    <section class="emarket-adds">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-add">
                        <h4>Get <span>50%</span> Discount</h4>
                        <a href="#" class="btn btn-default" role="button">Learn More</a>
                        <span class="img-add"><img src="images/red-tablet.png" alt="" /></span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-add">
                        <h4>Best <span>Offer</span> for You</h4>
                        <a href="#" class="btn btn-default" role="button">Learn More</a>
                        <span class="img-add"><img src="images/red-tablet.png" alt="" /></span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-add">
                        <h4><span>Only</span> Best smartphone</h4>
                        <a href="#" class="btn btn-default" role="button">Learn More</a>
                        <span class="img-add"><img src="images/red-tablet.png" alt="" /></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- best selling -->
    <?$APPLICATION->IncludeComponent(
	"cigars:cigars.beastproduct", 
	".default", 
	array(
		"IBLOCK_TYPE_ID" => "2",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "#ELEMENT_ID#",
		"TITLE" => "Лучшие товары"
	),
	false
);
    ?>
    <!-- special price -->
    <?php
        $APPLICATION->IncludeFile(
            INCLUDE_PATH . '/html/AD_banner.php',
            [],
            [
                    'SHOW_BORDER' => false,
                    'MODE' => 'php',
            ]
        );
    ?>

    <!-- Recent Post -->
    <section class="recent-post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1><span class="t-color-6">Recent</span> Post</h1>
                    <div class="heading-border b-color-6"></div>
                </div>
            </div> <!-- section title -->
            <div id="recent-post" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#recent-post" data-slide-to="0" class="active"><i class="fa fa-angle-left"></i></li>
                    <li data-target="#recent-post" data-slide-to="1"><i class="fa fa-angle-right"></i></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/e-add-1.jpg" alt="">
                                    <div class="text-center"><i class="fa fa-search"></i></div>
                                    <div class="caption">
                                        <h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
                                        <p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
                                        <span class="comment"><i class="fa fa-comments"></i> 5 comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/e-add-1.jpg" alt="">
                                    <div class="text-center"><i class="fa fa-search"></i></div>
                                    <div class="caption">
                                        <h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
                                        <p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
                                        <span class="comment"><i class="fa fa-comments"></i> 5 comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/e-add-1.jpg" alt="">
                                    <div class="text-center"><i class="fa fa-search"></i></div>
                                    <div class="caption">
                                        <h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
                                        <p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
                                        <span class="comment"><i class="fa fa-comments"></i> 5 comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/e-add-1.jpg" alt="">
                                    <div class="text-center"><i class="fa fa-search"></i></div>
                                    <div class="caption">
                                        <h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
                                        <p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
                                        <span class="comment"><i class="fa fa-comments"></i> 5 comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/e-add-1.jpg" alt="">
                                    <div class="text-center"><i class="fa fa-search"></i></div>
                                    <div class="caption">
                                        <h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
                                        <p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
                                        <span class="comment"><i class="fa fa-comments"></i> 5 comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/e-add-1.jpg" alt="">
                                    <div class="text-center"><i class="fa fa-search"></i></div>
                                    <div class="caption">
                                        <h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
                                        <p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
                                        <span class="comment"><i class="fa fa-comments"></i> 5 comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/e-add-1.jpg" alt="">
                                    <div class="text-center"><i class="fa fa-search"></i></div>
                                    <div class="caption">
                                        <h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
                                        <p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
                                        <span class="comment"><i class="fa fa-comments"></i> 5 comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="images/e-add-1.jpg" alt="">
                                    <div class="text-center"><i class="fa fa-search"></i></div>
                                    <div class="caption">
                                        <h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
                                        <p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
                                        <span class="comment"><i class="fa fa-comments"></i> 5 comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>