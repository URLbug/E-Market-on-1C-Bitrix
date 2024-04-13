<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

/**
 * @var array<string, mixed> $arParams
 * @var CBitrixComponent $this
 */

CModule::IncludeModule('iblock');

$arResult = [];

$iblocks = CIBlockElement::GetList(
    [],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_TYPE_ID'],
    ]
);

while($iblock = $iblocks->Fetch())
{
    $props = CIBlockElement::GetProperty(
        $arParams['IBLOCK_TYPE_ID'],
        $iblock['ID'],
        []);

    while($prop = $props->Fetch())
    {
        if($prop['ID'] == 11)
        {
            $iblock['PROPERTY'][$prop['CODE']][] = $prop;
        }
    }

    if ($iblock['PROPERTY']['RATING'][0]['VALUE'] >= 4)
    {
        $arResult['ITEMS'][] = $iblock;
    }
}

$this->includeComponentTemplate();