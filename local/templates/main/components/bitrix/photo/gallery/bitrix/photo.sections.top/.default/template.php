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
//echo Sepro\Helpers::printPre($arResult['SECTIONS']);
?>
<div class="block-wrapper">
    <section class="landing-block landing-block-node-bgimg g-bg-img-hero g-bg-attachment-fixed g-pt-20">
        <div class="container">
<?foreach($arResult["SECTIONS"] as $arSection):?>
	<?
	$this->AddEditAction('section_'.$arSection['ID'], $arSection['ADD_ELEMENT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "ELEMENT_ADD"), array('ICON' => 'bx-context-toolbar-create-icon'));
	$this->AddEditAction('section_'.$arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction('section_'.$arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_SECTION_DELETE_CONFIRM')));
	?>
	<h2 id="<?=$this->GetEditAreaId('section_'.$arSection['ID']);?>"><?//a href="<?=$arSection["SECTION_PAGE_URL"]>"*/?><?=$arSection["NAME"]?><?///a*?></h2>
    <?//=Sepro\Helpers::printPre($arSection['ROWS'])?>
        <?foreach($arSection["ROWS"] as $arItems):?>
            <section class="landing-block g-pt-30 g-pb-20">
                <div class="container">
                    <div class="row js-gallery-cards">
            <?foreach($arItems as $arItem):
                $arFile = CFile::ResizeImageGet(
                    $arItem["PICTURE"]["ID"],
                    array('width'=>400, 'height'=>300),
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    false, // возвращать ли размеры в массиве
                    false, // фильтры (пока один sharpe)
                    false, // Отложенное масштабирование
                    80 // качество жпг
                );
                ?>
                        <div class="col-12 col-sm-4">
                            <div class="h-100 g-pb-15 g-pb-0--sm">
                                <div class="landing-block-node-img-container landing-block-node-img-container-left js-animation fadeInLeft h-100 g-pos-rel g-parent u-block-hover" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                        <img class="landing-block-node-img img-fluid g-object-fit-cover h-100 w-100 u-block-hover__main--zoom-v1" src="<?=$arFile['src']?>" alt="" data-fileid="-1" data-fancybox-initied="Y">
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
			<?endforeach?>
                    </div>
                </div>
            </section>
		<?endforeach?>
	<hr /><br />
<?endforeach;?>
        </div>
    </section>
</div>
