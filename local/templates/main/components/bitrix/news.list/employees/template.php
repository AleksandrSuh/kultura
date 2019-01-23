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
<section class="landing-block g-py-30 g-pb-80--md">
    <div class="container">
        <div class="descript">
        <?$APPLICATION->IncludeFile(
            SITE_DIR."include/emploees_txt.php",
            Array(),
            Array("MODE"=>"html", "NAME"=>"текст")
        );?>
        </div>
        <!-- Team Block -->
        <div class="row">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            $arDispDate = explode(' ', $arItem['DISPLAY_ACTIVE_FROM']);
            ?>

                <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="landing-block-card-employee js-animation col-md-6 col-lg-3 g-mb-30 g-mb-0--lg fadeIn landing-card" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                    <div class="text-center">
                        <!-- Figure -->
                        <figure class="g-pos-rel g-parent g-mb-30">
                            <!-- Figure Image -->
                            <img class="landing-block-node-employee-photo w-100" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" data-fileid="-1">
                            <!-- End Figure Image -->

                            <!-- Figure Caption -->
                            <figcaption class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-opacity-0_8 opacity-0 g-opacity-1--parent-hover g-pa-20 g-transition-0_2 g-transition--ease-in">
                                <div class="landing-block-node-employee-quote text-uppercase g-flex-middle-item g-line-height-1_4 g-font-weight-700 g-font-size-16 g-color-white"><?=$arItem['PROPERTIES']['EMAIL']['VALUE']?></div>

                                <!-- End Figure Caption -->
                            </figcaption></figure>
                        <!-- End Figure -->

                        <!-- Figure Info -->
                        <div class="landing-block-node-employee-post d-block text-uppercase g-font-style-normal g-font-weight-700 g-mb-5 g-font-size-15"><span style="font-weight: normal;"><?=$arItem['PREVIEW_TEXT']?></span></div>
                        <h4 class="landing-block-node-employee-name text-uppercase g-font-weight-700 g-mb-7 g-font-size-22"><?=$arItem['NAME']?></h4>
                        <div class="landing-block-node-employee-subtitle g-font-size-13 mb-0"><?=$arItem['DETAIL_TEXT']?></div>
                        <!-- End Figure Info-->
                    </div>
                </div>

            <?endforeach;?>
        </div>
    </div>
</section>
