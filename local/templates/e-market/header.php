<?php

if(defined('B_PROLOG_INCLUDED') && !B_PROLOG_INCLUDED) 
{
    die();
}

/**
* @var CMain $APPLICATION
 */

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

// CSS
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/bootstrap/css/bootstrap.min.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/font-awesome.min.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/responsive.css');

// JS
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/bootstrap/js/bootstrap.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/custom.js');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$APPLICATION->ShowTitle();?></title>

    <?=$APPLICATION->ShowHead();?>

</head>
<body>

<?=$APPLICATION->ShowPanel();?>

<!-- header -->
<header class="header">
    <!-- header top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <?php
                $APPLICATION->IncludeFile(
                    INCLUDE_PATH . '/html/contact/header_contact.php',
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

    <!-- logo and adds -->
    <div class="logo-add">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo"><i class="fa fa-diamond"></i>E - Market</div>
                </div>
            </div>
        </div>
    </div>

    <!-- header bottom -->
    <div class="header-bottom">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bottom" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="header-bottom">

                            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "main_menu"
	),
	false
);?>
                            <?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"e-market-search", 
	array(
		"PAGE" => "/search/",
		"USE_SUGGEST" => "N",
		"COMPONENT_TEMPLATE" => "e-market-search"
	),
	false
);?>
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<?php
    if($APPLICATION->GetCurPage() !== '/'):
?>
    <!-- desktop bar -->
    <section class="desktop-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3><?=$APPLICATION->ShowTitle();?></h3>
                </div>
                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "nav_shop", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>
            </div>
        </div>
    </section>
<?php endif;?>

