<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

/**
 * @var array<string, mixed> $arParams
 * @var CBitrixComponent $this
 */

CModule::IncludeModule('iblock');

$arResult = [];

$arResult['TITLE'] = $arParams['TITLE'];

$iblocks = CIBlockElement::GetList(
    [],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_TYPE_ID'],
    ]
);

$obParser = new CTextParser();

$iblocks->SetUrlTemplates($arParams["DETAIL_URL"], '', ($arParams["IBLOCK_URL"] ?? ''));

$maxItem = 0;

while($iblock = $iblocks->fetch())
{
    $props = CIBlockElement::GetProperty(
        $arParams['IBLOCK_TYPE_ID'],
        $iblock['ID'],
        []);

    while($prop = $props->Fetch())
    {
        if(
            $prop['ID'] == 11 ||
            $prop['ID'] == 2 ||
            $prop['ID'] == 3
        ) {
            $iblock['PROPERTY'][$prop['CODE']][] = $prop;
        }
    }

    if($iblock['PROPERTY']['RATING'][0]['VALUE'] >= 4 && $maxItem <= 4)
    {
        $arButtons = CIBlock::GetPanelButtons(
            $iblock["IBLOCK_ID"],
            $iblock["ID"],
            0,
            array("SECTION_BUTTONS" => false, "SESSID" => false));

        $iblock["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"] ?? '';
        $iblock["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"] ?? '';

        $iblock['PREVIEW_PICTURE'] = CFile::GetFileArray($iblock['PREVIEW_PICTURE']);

        $arResult['ITEMS'][] = $iblock;

        $maxItem += 1;
    }
}

$this->includeComponentTemplate();