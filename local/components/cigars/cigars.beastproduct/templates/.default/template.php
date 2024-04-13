<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

/**
 * @var array<string, mixed> $arResult
 */

$countItems = count($arResult['ITEMS']);

//echo '<pre>';
//print_r($arResult['ITEMS'][0]['PROPERTY']['RATING']);
//echo '</pre>';

?>

<section class="best-selling">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><span class="t-color-2">Best</span> Selling
                </h1>
                <div class="heading-border b-color-2"></div>
            </div>
        </div> <!-- section title -->
        <div id="best-selling" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#best-selling" data-slide-to="0" class="active"><i class="fa fa-angle-left"></i></li>
                <li data-target="#best-selling" data-slide-to="1"><i class="fa fa-angle-right"></i></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php for($i=0; $i < $countItems; $i++):?>
                    <div class="item <?=$i === 0 ? 'active' : '';?>">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="media">
                                    <div class="media-left"><img class="img-responsive" src="images/e-add-1.jpg" alt=""></div>
                                    <div class="media-body">
                                        <div class="category"> category
                                            <div class="pull-right">
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
                <?php endfor;?>
            </div>
        </div>
    </div>
</section>
