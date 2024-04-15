<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

CModule::IncludeModule('iblock');

$arIblock = [];

$iblocks = CIBlock::GetList([], [], ['ID', 'NAME', ]);

while($iblock = $iblocks->Fetch())
{
    $arIblock[$iblock['ID']][] = $iblock['NAME'];
}

$arComponentParameters = [
    'PARAMETERS' => [
        'TITLE' => [
            'PARENT' => 'BASE',
            'NAME' => GetMessage('TITLE'),
            'TYPE' => 'STRING',
        ],
        'IBLOCK_TYPE_ID' => [
            'PARENT' => 'BASE',
            'NAME' => GetMessage('IBLOCK_NAME'),
            'TYPE' => 'LIST',
            'VALUES' => $arIblock,
        ],
        'DETAIL_URL' => CIBlockParameters::GetPathTemplateParam(
            'DETAIL',
            'DETAIL_URL',
            GetMessage('DETAIL'),
            '',
            'URL_TEMPLATES'
        ),
    ]
];
