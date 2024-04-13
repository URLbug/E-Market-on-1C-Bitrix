<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");

//CModule::IncludeModule('iblock');
//
//$products = CIBlockElement::GetList([], ['IBLOCK_ID' => 2], ['ID']);
//
//$Celemet = new CIBlockElement();
//
//while($product = $products->Fetch())
//{
//    try {
//        $Celemet->Update($product['ID'], [
//            'PROPERTY_VALUES' =>
//                [
//                    2 => ['VALUE' => random_int(1000, 2000),],
//                    3 => ['VALUE' => 2,],
//                    11 => ['VALUE' => random_int(0, 5),],
//                    10 => ['VALUE' => random_int(10, 2500), ],
//                    9 => ['VALUE' => random_int(10, 30),],
//                ],
//        ]);
//    }
//    catch(Exception)
//    {
//        echo $Celemet->LAST_ERROR;
//    }
//}

?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>