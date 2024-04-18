<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>

<form class="navbar-form navbar-right" role="search" action="<?=$arResult["FORM_ACTION"]?>">
        <div class="form-group"><?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?><?else:?>
                    <input type="text" class="form-control" placeholder="Поиск..." name="q">
                <span class="nav-search"><button type="submit" name="s" style="background-color: rgba(28,28,28,0);"><i class="fa fa-search"></i></button></span>
            <?endif;?>
    </div>
</form>