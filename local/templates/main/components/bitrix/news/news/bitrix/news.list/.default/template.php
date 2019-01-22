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
$first = true;
?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
$arDispDate = explode(' ', $arItem['DISPLAY_ACTIVE_FROM']);
?>
<div id="block<?=$arItem['ID']?>" class="block-wrapper news-blocks">
    <section class="landing-block g-bg-main" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div>
            <div class="row mx-0">
                <? if(!$first):?>
                <div class="landing-block-node-img col-md-5 g-min-height-250 g-bg-img-hero g-px-0 g-bg-size-contain--xs g-bg-size-cover--sm" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>');" data-fileid="-1"></div>
                <? endif;?>
                <div class="col-md-7 text-center text-md-left g-py-50 g-py-50--md g-px-15 g-px-50--md">
                    <h3 class="landing-block-node-title text-uppercase g-font-weight-700 g-font-size-default g-mb-25 g-color-black g-font-size-27 js-animation fadeInUp" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                        <?=$arItem['NAME']?>
                    </h3>
                    <div class="landing-block-node-text g-mb-30 g-color-gray-dark-v2 js-animation fadeInUp" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                        <div class="text-center d-md-table-cell g-valign-middle g-width-125--md g-py-10 g-px-20">
                            <?//=Sepro\Helpers::printPre($arItem['DISPLAY_ACTIVE_FROM'])?>
                            <div class="landing-block-node-card-date-value g-font-weight-700 g-font-size-40 g-line-height-1 g-color-black"><?=$arDispDate[0]?></div>
                            <div class="landing-block-node-card-date-text"><?=$arDispDate[1]?>, <?=$arDispDate[2]?></div>
                        </div>
                        <p>
                           <?=$arItem['PREVIEW_TEXT']?>
                        </p>
                    </div>
                    <div class="landing-block-node-button-container">
                        <a class="landing-block-node-button text-uppercase btn btn-xl u-btn-primary g-font-weight-700 g-font-size-12 js-animation fadeInUp rounded-0" href="<?=$arItem['DETAIL_PAGE_URL']?>" tabindex="0" target="_self" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">Читать полностью</a>
                    </div>
                </div>
                <? if($first):?>
                <div class="landing-block-node-img col-md-5 g-min-height-250 g-bg-img-hero g-px-0 g-bg-size-contain--xs g-bg-size-cover--sm" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>');" data-fileid="-1"></div>
                <? $first = false;
                else:
                    $first = true;
                endif;?>
            </div>
        </div>
    </section>
</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
