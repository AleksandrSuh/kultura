<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as &$arItem) {
    $arFile = CFile::ResizeImageGet($arItem['DETAIL_PICTURE']['ID'], array('width'=>600, 'height'=>1000), BX_RESIZE_IMAGE_EXACT, false);
    $arItem['DETAIL_PICTURE']['SRC'] = $arFile['src'];
}