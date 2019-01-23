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
<section class="landing-block g-bg-gray-light-v5 instits">
    <div class="container g-pt-30 g-pb-20">
        <div class="row">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            $arDispDate = explode(' ', $arItem['DISPLAY_ACTIVE_FROM']);
            ?>

            <div class="landing-block-card col-sm-6 col-md-4 g-mb-20 js-animation fadeIn" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                <article class="u-shadow-v28 g-bg-white">
                    <img class="landing-block-node-img img-fluid w-100" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" data-fileid="-1" data-filehash="9eef207add73028ae50f74a9033c20cb">

                    <div class="g-pos-rel h_block">
                        <!-- SVG Background -->
                        <svg class="g-pos-abs g-left-0 g-right-0" version="1.1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="140px" viewBox="20 -20 300 100" style="top: -70%;">
                            <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
              c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.4" fill="#f0f1f3"></path>
                            <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
              c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.4" fill="#f0f1f3"></path>
                            <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
              H42.401L43.415,98.342z" opacity="0" fill="#ffc"></path>
                            <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
              c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" opacity="1" fill="#ffc"></path>
                        </svg>
                        <!-- End SVG Background -->

                        <div class="g-pos-rel g-z-index-1 g-pa-20">
                            <h3 class="h5 mb-3 my_upper">
                                <a class="landing-block-node-link u-link-v5 g-color-main g-color-primary--hover" href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_self"> <?=$arItem["NAME"]?></a>
                            </h3>
                            <?/*a class="landing-block-node-link-more u-link-v5 g-color-text g-color-primary--hover g-font-weight-500 my_upper" href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_self">Узнать подробнее</a*/?>
                        </div>
                    </div>
                </article>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>
