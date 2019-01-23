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
<div id="block105" class="block-wrapper">
    <section class="landing-block g-pt-30 g-pb-30">
        <div class="container-fluid g-px-30">
            <div class="js-carousel g-pos-rel g-mx-minus-15"
                 data-infinite="true"
                 data-autoplay="true"
                 data-slides-show="3"
                 data-responsive='[{
                 "breakpoint": 1200,
                 "settings": {
                   "slidesToShow": 3
                 }
               }, {
                 "breakpoint": 992,
                 "settings": {
                   "slidesToShow": 2
                 }
               }, {
                 "breakpoint": 576,
                 "settings": {
                   "slidesToShow": 1
                 }
               }]'>
        <?foreach($arResult["ITEMS"] as $arItem) {?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        $arDispDate = explode(' ', $arItem['DISPLAY_ACTIVE_FROM']);
        ?>
            <div class="landing-block-node-card js-slide g-px-15" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <!-- Article -->
                <article class="g-pos-rel">
                    <figure class="u-bg-overlay g-bg-black-opacity-0_5--after">
                        <img class="landing-block-node-card-img img-fluid w-100"
                             src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="">
                    </figure>

                    <header class="g-pos-abs g-bottom-0 g-left-0 w-100 g-color-white g-pa-30">
                        <!--div>
							<span class="landing-block-node-card-icon-container g-color-primary">
								<i class="landing-block-node-card-icon fa fa-calendar g-font-size-22 g-mr-10"></i>
							</span>
                            <div class="landing-block-node-card-subtitle d-inline-block text-uppercase g-font-weight-700 g-font-size-12 g-color-white g-mb-10">
                                <p>Duration, 3 Months.</p>
                            </div>
                        </div-->
                        <? if(!empty($arItem['PROPERTIES']['TITLE']['VALUE'])):?>
                        <h2 class="landing-block-node-card-title text-uppercase g-line-height-1 g-font-weight-700 g-font-size-40 g-mb-10">
                            <?echo $arItem['PROPERTIES']['TITLE']['VALUE']?>
                        </h2>
                    <? endif?>
                        <div class="landing-block-node-card-text g-font-size-default g-color-white-opacity-0_8 g-mb-30">
                            <p><?echo $arItem["PREVIEW_TEXT"]?></p>
                        </div>
                        <? if(!empty($arItem['PROPERTIES']['LINK']['VALUE'])):?>
                        <div class="landing-block-node-card-button-container">
                            <a class="landing-block-node-card-button btn btn-xl text-uppercase u-btn-primary g-font-weight-700 g-font-size-13 g-bg-transparent--hover g-brd-3 rounded-0 g-py-15 g-px-25"
                               href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>">Подробнее</a>
                        </div>
                        <? endif;?>
                    </header>
                </article>
                <!-- End Article -->
            </div>
                <?
                }
            ?>
            </div>
        </div>
</section>
</div>