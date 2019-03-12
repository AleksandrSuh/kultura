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

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
$arDispDate = explode(' ', $arItem['DISPLAY_ACTIVE_FROM']);
$arDateVal = explode('.',$arItem['PROPERTIES']['DATE']['VALUE']);
?>
<section class="landing-block landing-block-node-bgimg u-bg-overlay g-bg-img-hero g-bg-attachment-fixed g-bg-black-opacity-0_6--after g-pt-100 g-pb-100" style="background-image: url(<?=$arItem["DETAIL_PICTURE"]["SRC"]?>);">
    <div class="container u-bg-overlay__inner">
        <div class="container text-center g-width-780 g-mb-65">
            <div class="landing-block-node-header u-heading-v2-2--bottom g-brd-primary">
                <? if($key==0):?>
                <h2 class="landing-block-node-title text-uppercase u-heading-v2__title g-line-height-1 g-font-weight-700 g-font-size-40 g-color-white g-mb-0 js-animation slideInDown" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                    Ближайшие события
                </h2>
                <? endif;?>
            </div>
        </div>
                <div class="row text-center text-md-left">
                    <div class="col-md-5 offset-md-1 landing-block-node-subtitle-container js-animation slideInLeft" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                        <h3 class="landing-block-node-subtitle text-uppercase g-font-weight-700 g-font-size-26 g-color-white g-mb-5">
                            <?=$arItem["NAME"]?>
                        </h3>
                        <div class="landing-block-node-text g-font-size-16 g-color-white g-mb-60 g-mb-0--md">
                            <p>
                                <?=$arItem["PREVIEW_TEXT"]?>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 landing-block-node-date-container js-animation slideInRight" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                        <!-- Countdown -->
                        <div class="u-countdown-v1 g-color-white">
                            <div class="d-inline-block text-center g-bg-white-opacity-0_05 g-brd-around g-brd-white-opacity-0_3 g-pa-15-20-10 g-mx-15 g-mb-30">
                                <div class="landing-block-node-date-value g-line-height-1 g-font-size-40 g-font-weight-700 g-mb-2"><?=$arDateVal[0]?></div>
                                <div class="landing-block-node-date-text text-uppercase text-center g-color-white-opacity-0_7 g-font-size-12">числа</div>
                            </div>

                            <div class="d-inline-block g-bg-white-opacity-0_05 g-brd-around g-brd-white-opacity-0_3 g-pa-15-20-10 g-mx-15 g-mb-30">
                                <div class="landing-block-node-date-value g-line-height-1 g-font-size-40 g-font-weight-700 g-mb-2"><?=$arDateVal[1]?></div>
                                <div class="landing-block-node-date-text text-uppercase text-center g-color-white-opacity-0_7 g-font-size-12">месяца</div>
                            </div>

                            <div class="d-inline-block g-bg-white-opacity-0_05 g-brd-around g-brd-white-opacity-0_3 g-pa-15-20-10 g-mx-15 g-mb-30">
                                <div class="landing-block-node-date-value g-line-height-1 g-font-size-40 g-font-weight-700 g-mb-2"><?=$arDateVal[2]?></div>
                                <div class="landing-block-node-date-text text-uppercase text-center g-color-white-opacity-0_7 g-font-size-12">года</div>
                            </div>

                        </div>
                        <!-- End Countdown -->
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" />
                    </div>
                </div>


    </div>
</section>
<?endforeach;?>
