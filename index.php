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
    <section class="featured-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="">
                        <h1><span class="t-color-1">Featured</span> Products
                            <small class="btn-group hidden-xs">
                                <a class=" btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">All Categries <i class="fa fa-bars"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Option 1</a></li>
                                    <li><a href="#">Option 2</a></li>
                                </ul>
                            </small>
                        </h1>
                        <div class="heading-border b-color-1"></div>
                    </div>
                </div>
            </div> <!-- section title -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><i class="fa fa-angle-left"></i></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"><i class="fa fa-angle-right"></i></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <!--span class="e-label"><div>Sale</div></span-->
                                    <span class="service-link text-center">
											<img class="img-responsive" src="images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
                                    <div class="caption">
                                        <div class="category"> category
                                            <div class="pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <strong>$899.00</strong>
                                        <div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
                                    <div class="caption">
                                        <div class="category"> category
                                            <div class="pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <strong>$899.00</strong>
                                        <div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
                                    <div class="caption">
                                        <div class="category"> category
                                            <div class="pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <strong>$899.00</strong>
                                        <div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
                                    <div class="caption">
                                        <div class="category"> category
                                            <div class="pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <strong>$899.00</strong>
                                        <div>
                                            <a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <!--span class="e-label"><div>Sale</div></span-->
                                    <span class="service-link text-center">
											<img class="img-responsive" src="images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
                                    <div class="caption">
                                        <div class="category"> category
                                            <div class="pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <strong>$899.00</strong>
                                        <div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
                                    <div class="caption">
                                        <div class="category"> category
                                            <div class="pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <strong>$899.00</strong>
                                        <div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
                                    <div class="caption">
                                        <div class="category"> category
                                            <div class="pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <strong>$899.00</strong>
                                        <div><a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
                                    <div class="caption">
                                        <div class="category"> category
                                            <div class="pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
                                        <strong>$899.00</strong>
                                        <div>
                                            <a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
    <!-- special price -->
    <section class="special-price">
        <div class="price-intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pull-left">
                            <blockquote>
                                <h1> iPhone 6 16Gb Gold</h1>
                                <p>Cicero famously orated against his political opponent Lucius Sergius against his political. </p>								</div>
                        </blockquote>
                        <div class="pull-right"><a class="btn btn-default btn-lg"> Call to Action</a>
                        </div>
                    </div>
                </div> <!-- section title -->

            </div>
        </div>
    </section>

    <!-- product info -->
    <section class="product-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1><span class="t-color-3">New</span> Arrival</h1>
                    <div class="heading-border b-color-3"></div>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left text-center"><img src="images/product-1.jpg" alt="">
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left text-center"><img src="images/product-1.jpg" alt="">
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left text-center"><img src="images/product-1.jpg" alt="">
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h1><span class="t-color-4">Special</span> Product</h1>
                    <div class="heading-border b-color-4"></div>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left text-center"><img src="images/product-1.jpg" alt="">
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left text-center"><img src="images/product-1.jpg" alt="">
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left text-center"><img src="images/product-1.jpg" alt="">
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h1><span class="t-color-5">Top</span> Rated</h1>
                    <div class="heading-border b-color-5"></div>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left text-center"><img src="images/product-1.jpg" alt="">
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left text-center"><img src="images/product-1.jpg" alt="">
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left text-center"><img src="images/product-1.jpg" alt="">
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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