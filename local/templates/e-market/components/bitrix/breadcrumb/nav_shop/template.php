<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<div class="col-sm-8"><ol class="breadcrumb hidden-xs pull-right">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '<li><a href="' . $arResult[$index]['LINK'] . '">' . $title . '</a></li>';
	}
	else
	{
		$strReturn .= '<li class="active"><a>' . $title . '</a></li>';
	}
}

$strReturn .= '</ol></div>';

return $strReturn;
