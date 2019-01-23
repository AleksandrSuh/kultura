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
$this->setFrameMode(true);?>
<div id="block118" class="block-wrapper docs_sections">
    <section class="landing-block g-bg-pattern-gray-v1 g-pb-60 g-pt-20">
        <div class="container">
            <div class="row no-gutters">
                <?
                foreach ($arResult['SECTIONS'] as &$arSection)
                {
?>
                <div class="landing-block-card js-animation col-md-4 g-mb-30 g-mb-0--md fadeInUp landing-card" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                    <article class="text-center g-brd-around g-color-gray g-brd-gray-light-v5 g-pa-10">
                        <div class="g-bg-gray-light-v5 g-pa-30">
                            <h4 class="landing-block-node-title text-uppercase h5 g-color-gray-dark-v3 g-font-weight-500 g-mb-10"><?=$arSection["NAME"]?></h4>
                            <div class="landing-block-node-subtitle g-font-style-normal"> </div>

                            <hr class="g-brd-gray-light-v3 g-my-10">

                            <div class="g-color-primary g-my-20">
								<div class="landing-block-node-price g-font-size-30 g-line-height-1_2"><span style="font-weight: bold;"><? echo $arSection['ELEMENT_CNT']; ?></span></div>
                                <div class="landing-block-node-price-text"><?=Sepro\Helpers::num2word($arSection['ELEMENT_CNT'], array('документ','документа','документов'));?></div>
                            </div>

                            <hr class="g-brd-gray-light-v3 g-mt-10 mb-0">

                            <ul class="landing-block-node-price-list list-unstyled g-mb-25">
                                <li class="landing-block-node-price-list-item g-brd-bottom g-brd-gray-light-v3 g-py-12">
                                    <?=$arSection['DESCRIPTION']?>
                                </li>
                            </ul>
                            <div class="landing-block-node-price-container">
                            	<a class="landing-block-node-price-button btn btn-md text-uppercase u-btn-primary rounded-0 g-px-15" href="<? echo $arSection['SECTION_PAGE_URL']; ?>">Смотреть</a>
                        	</div>
                        </div>
                    </article>
                </div>
<? } ?>
        </div>
    </section>
</div>
