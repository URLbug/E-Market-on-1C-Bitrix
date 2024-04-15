<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

/**
 * @var array<string, mixed> $arResult
 * @var CBitrixComponentTemplate $this
 */


?>

<div class="col-sm-3">
    <h2><?=$arResult['TITLE']?></h2>
    <div class="heading-border b-color-1"></div>
    <ul class="media-list">
        <?php 
        $arItems = $arResult['ITEMS'];
        
        for($element=0; $element < 3; $element++):
            $this->AddEditAction($arItems[$element]['ID'],
                $arItems[$element]['EDIT_LINK'],
                CIBlock::GetArrayByID($arItems[$element]["IBLOCK_ID"],
                    "ELEMENT_EDIT"));
    
            $this->AddDeleteAction($arItems[$element]['ID'],
                $arItems[$element]['DELETE_LINK'],
                CIBlock::GetArrayByID($arItems[$element]["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li class="media" id="<?=$this->GetEditAreaId($arItems[$element]['ID']);?>">
            <div class="media-left"><img src="<?=$arItems[$element]['PREVIEW_PICTURE']['SRC']?>" alt=""></div>
            <div class="media-body">
                <p class="media-heading"><?=$arItems[$element]['NAME']?></p>
                <div class="category">
                    <?php for($star=0; $star < 5; $star++):?>
                        <?php if($star < $arItems[$element]['PROPERTY']['RATING']['VALUE']):?>
                            <i class="fa fa-star"></i>
                        <?php else:?>
                            <i class="fa fa-star-o"></i>
                        <?php endif;?>
                    <?php endfor;?>
                </div>
                <strong><?=$arItems[$element]['PROPERTY']['PRICE']['VALUE'] . ' ' . $arItems[$element]['PROPERTY']['PRICECURRENCY']['VALUE_ENUM']?>
                </strong>
            </div>
        </li>
        <?php endfor;?>
    </ul>
</div>