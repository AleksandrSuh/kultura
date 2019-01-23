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
<section class="landing-block g-pb-100 g-bg-gray-light-v5 g-pt-20">
    <div class="container g-bg-gray-light-v5 g-font-size-13">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        $arDispDate = explode(' ', $arItem['DISPLAY_ACTIVE_FROM']);
        ?>
        <!-- Article -->
        <article class="landing-block-node-card js-animation d-md-table text-md-left text-center w-100 g-bg-white g-mb-1 fadeInUp" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
            <!-- Date -->
            <div class="text-center d-md-table-cell g-valign-middle g-width-125--md g-py-10 g-px-20">
                <?//=Sepro\Helpers::printPre($arItem['DISPLAY_ACTIVE_FROM'])?>
                <div class="landing-block-node-card-date-value g-font-weight-700 g-font-size-40 g-line-height-1 g-color-black"><?=$arDispDate[0]?></div>
                <div class="landing-block-node-card-date-text"><?=$arDispDate[1]?>, <?=$arDispDate[2]?></div>
            </div>
            <!-- End Date -->

            <!-- Article Image -->
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="d-md-table-cell g-valign-middle g-width-130">
                <img class="landing-block-node-card-img d-block info-v5-2__image g-ml-minus-1" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
            </a>
            <!-- End Article Image -->

            <!-- Article Content -->
            <div class="d-md-table-cell g-valign-middle g-py-15 g-px-20">
                <h4 class="landing-block-node-card-title g-color-gray-dark-v2 h6 text-uppercase g-font-weight-700">
                    <?echo $arItem["NAME"]?>
                </h4>
                <div class="landing-block-node-card-text"><?echo $arItem["PREVIEW_TEXT"]?></div>
            </div>
            <!-- End Article Content -->

            <!-- Price -->
            <!--div class="d-md-table-cell g-valign-middle g-py-5 g-px-20">
                <div class="landing-block-node-card-price g-font-weight-700 g-color-gray-dark-v2">$15</div>

                <div class="landing-block-node-card-price-text text-uppercase g-font-size-11">Per Ticket</div>
            </div-->
            <!-- End Price -->

            <!-- Actions -->
            <div class="d-md-table-cell text-md-right g-valign-middle g-pa-20">
                <div class="g-mt-minus-10 g-mx-minus-5">
                    <a class="landing-block-node-card-button btn btn-xl u-btn-primary rounded-0 text-uppercase g-font-weight-700 g-font-size-12 g-mx-5 g-mt-10" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Читать</a>
                </div>
            </div>
            <!-- End Actions -->
        </article>
		<?endforeach;?>
    </div>
</section>
