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
$this->setFrameMode(true);
//echo Sepro\Helpers::printPre($arResult);
?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
$arDispDate = explode(' ', $arItem['DISPLAY_ACTIVE_FROM']);
$arPhotos = array();
foreach ($arItem['PROPERTIES']['PHOTO']['VALUE'] as $ID):
    $arr = array();
    $arFile = CFile::ResizeImageGet(
        $ID,
        array('width'=>1200, 'height'=>1200),
        BX_RESIZE_IMAGE_PROPORTIONAL,
        false,
        false,
        false,
        80
    );
    $arr['IMG'] = $arFile['src'];
    $arThumb = CFile::ResizeImageGet(
        $ID,
        array('width'=>400, 'height'=>400),
        BX_RESIZE_IMAGE_PROPORTIONAL,
        false,
        false,
        false,
        80
    );
    $arr['THUMB'] = $arThumb['src'];
    $arPhotos[] = $arr;
endforeach;
?>
<div id="block<?=$arItem['ID']?>" class="block-wrapper news-blocks">
    <section class="landing-block g-bg-main" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div>
            <div class="row mx-0">
                <div class="col-md-12 text-center text-md-left g-py-50 g-py-50--md g-px-15 g-px-50--md">
                    <h3 class="landing-block-node-title text-uppercase g-font-weight-700 g-font-size-default g-mb-25 g-color-black g-font-size-27 js-animation fadeInUp" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                        <?=$arItem['NAME']?>
                    </h3>
                    <div class="landing-block-node-text g-mb-30 g-color-gray-dark-v2 js-animation fadeInUp" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                        <p>
                           <?=$arItem['PREVIEW_TEXT']?>
                        </p>
                        <? foreach ($arPhotos as $arPhoto):?>
                            <a href="<?=$arPhoto['IMG']?>" data-fancybox="gallery">
                                <img src="<?=$arPhoto['THUMB']?>" />
                            </a>
                        <? endforeach;?>
                        <?//=Sepro\Helpers::printPre($arItem['PROPERTIES']['PHOTO']);?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
