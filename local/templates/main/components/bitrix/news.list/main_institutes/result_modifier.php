<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as &$arItem) {
    $arFile = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>370, 'height'=>233), BX_RESIZE_IMAGE_EXACT, false);
    $arItem['PREVIEW_PICTURE']['SRC'] = $arFile['src'];
}