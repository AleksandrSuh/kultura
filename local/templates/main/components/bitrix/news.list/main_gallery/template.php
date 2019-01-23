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
?>
<section class="landing-block js-animation fadeInUp g-pt-60 g-pb-20" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
<div class="container">
    <div class="landing-block-node-inner text-uppercase text-center u-heading-v2-4--bottom g-brd-primary">
        <h4 class="landing-block-node-subtitle h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-mb-20 g-color-gray-dark-v5">Галерея</h4>
        <h2 class="landing-block-node-title h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10 g-font-size-27">Фоторепортажи последних событий</h2>
    </div>
</div>
</section>
            <?
            $length = count($arResult['ITEMS']);
            $counter = 0;
            $full_count = 0;
            ?>
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
$arDispDate = explode(' ', $arItem['DISPLAY_ACTIVE_FROM']);
$arDateVal = explode('.',$arItem['PROPERTIES']['DATE']['VALUE']);
?>
    <? if($counter==0):?>
        <section class="landing-block g-pt-30 g-pb-20">
            <div class="container">
            <div class="row js-gallery-cards">
    <? endif;?>
    <div class="col-12 col-sm-4">
        <div class="h-100 g-pb-15 g-pb-0--sm">
            <div class="landing-block-node-img-container landing-block-node-img-container-left js-animation fadeInLeft h-100 g-pos-rel g-parent u-block-hover" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                <a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" data-fancybox="gallery_61aa2899">
                    <img class="landing-block-node-img img-fluid g-object-fit-cover h-100 w-100 u-block-hover__main--zoom-v1" src="<?=$arItem["THUMB_PICTURE"]["SRC"]?>" alt="" data-fileid="-1" data-fancybox-initied="Y">
                    <div class="landing-block-node-img-title-container w-100 g-pos-abs g-bottom-0 g-left-0 g-top-0
							g-flex-middle g-bg-black-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pa-20
							g-transition-0_2 g-transition--ease-in">
                        <div class="h-100 g-flex-middle g-brd-around g-brd-white-opacity-0_2 text-uppercase">
                            <h3 class="landing-block-node-img-title g-flex-middle-item text-center h3 g-color-white g-line-height-1_4 g-font-size-18 g-letter-spacing-1"><?=$arItem["NAME"]?></h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?
$counter++;
$full_count++;
if($counter==3 || $full_count==$length)
{
    $counter = 0;
    ?>
    </div>
    </div>
    </section>
    <?
}
endforeach;?>
