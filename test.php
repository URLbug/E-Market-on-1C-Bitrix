<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");

\Bitrix\Main\Loader::includeModule('iblock');
\Bitrix\Main\Loader::includeModule('catalog');

$iblocksId = [2];

$iterator = \Bitrix\Iblock\ElementTable::getList([
    'select' => ['IBLOCK_ID', 'ID'],
    'filter' => ['IBLOCK_ID' => $iblocksId, '!PRODUCT.CAN_BUY_ZERO' => 'D', '!PRODUCT.TYPE' => \Bitrix\Catalog\ProductTable::TYPE_SKU],
    'runtime' => [
        'PRODUCT' => [
            'data_type' => '\Bitrix\Catalog\ProductTable',
            'reference' => ['=this.ID' => 'ref.ID']
        ]
    ]
]);

$elements = [];
while($row = $iterator->fetch()) {
    $elements[] = $row;
}

foreach($elements as $element) {
    CCatalogProduct::Update($element['ID'], ['CAN_BUY_ZERO' => 'D']);
}

echo 'Количество = '.count($elements);

?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>