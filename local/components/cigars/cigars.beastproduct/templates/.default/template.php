<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

/**
 * @var array<string, mixed> $arResult
 * @var CBitrixComponentTemplate $this
 */

$arResult['TITLE'] = explode(' ', $arResult['TITLE']);
?>

<section class="best-selling">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><span class="t-color-2"><?=$arResult['TITLE'][0]?></span>
                    <?=$arResult['TITLE'][1]?>
                </h1>
                <div class="heading-border b-color-2"></div>
            </div>
        </div> <!-- section title -->
        <div id="best-selling" class="carousel slide" data-ride="carousel">
            <?php if(count($arResult['ITEMS']) >= 3):?>
                <ol class="carousel-indicators">
                    <li data-target="#best-selling" data-slide-to="0" class="active"><i class="fa fa-angle-left"></i></li>
                    <li data-target="#best-selling" data-slide-to="1"><i class="fa fa-angle-right"></i></li>
                </ol>
            <?php endif;?>
            <div class="<?= count($arResult['ITEMS']) < 3 ? '' : 'carousel-inner' ?>" role="listbox">
                <?php
                for($i=0; $i < 4; $i++):
                    if(($i % 2) === 0 || $i === 0):
                        $items = array_slice($arResult['ITEMS'], $i, 2);?>
                        <div class="item <?=$i === 0 ? 'active' : '';?>">
                            <div class="row">
                                <?php
                                    foreach($items as $item):
                                        $this->AddEditAction($item['ID'],
                                            $item['EDIT_LINK'],
                                            CIBlock::GetArrayByID($item["IBLOCK_ID"],
                                                "ELEMENT_EDIT"));

                                        $this->AddDeleteAction($item['ID'],
                                            $item['DELETE_LINK'],
                                            CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"),
                                            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                ?>
                                    <div class="col-sm-6" id="<?=$this->GetEditAreaId($item['ID']);?>">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="category"> <?=$item['NAME']?>
                                                    <div class="pull-right">
                                                        <?php for($star=0; $star < 5; $star++):?>
                                                            <?php if($star < $item['PROPERTY']['RATING'][0]['VALUE']):?>
                                                                <i class="fa fa-star"></i>
                                                            <?php else:?>
                                                                <i class="fa fa-star-o"></i>
                                                            <?php endif;?>
                                                        <?php endfor;?>

                                                    </div>
                                                </div>
                                                <h3><?=strlen($item['PREVIEW_TEXT']) < 150 ? $item['PREVIEW_TEXT'] : substr($item['PREVIEW_TEXT'], 0, 150) . '...'?></h3>
                                                <strong>
                                                    <?=$item['PROPERTY']['PRICE'][0]['VALUE'] . ' ' . $item['PROPERTY']['PRICECURRENCY'][0]['VALUE_ENUM']?>
                                                </strong>
                                                <div>
                                                    <a href="/basket.php" class="btn btn-default" role="button">Перейти к товару</a></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                <?php
                endif;
                endfor;?>
            </div>
        </div>
    </div>
</section>
