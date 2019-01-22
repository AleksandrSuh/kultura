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
<section class="landing-block js-animation fadeInUp g-pt-60 g-pb-20" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
    <div class="container gallery-cont">
        <? foreach ($arResult['DISPLAY_PROPERTIES']['PHOTOS']['VALUE'] as $photoId):?>
        <? $arFileBig = CFile::ResizeImageGet(
            $photoId,
            array('width'=>1400, 'height'=>1200),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            false, // возвращать ли размеры в массиве
            false, // фильтры (пока один sharpe)
            false, // Отложенное масштабирование
            80 // качество жпг
            );
            $arFileThumb = CFile::ResizeImageGet(
                $photoId,
                array('width'=>300, 'height'=>300),
                BX_RESIZE_IMAGE_EXACT,
                false, // возвращать ли размеры в массиве
                false, // фильтры (пока один sharpe)
                false, // Отложенное масштабирование
                80 // качество жпг
            );?>
<div class="col-md-3">
    <div class="landing-block-node-card js-slide g-pb-15 g-pa-15--sm js-animation fadeIn" style="width: 100%; display: inline-block; animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
        <div class="g-parent g-pos-rel g-brd-around g-theme-brd-gray-light-v4 g-overflow-hidden">

            <a href="<?=$arFileBig['src']?>" data-fancybox="gallery">
                <img class="landing-block-node-card-img img-fluid g-grayscale-100x g-grayscale-0--parent-hover g-transform-scale-0_85--parent-hover g-transition-0_2 g-transition--ease-in" src="<?=$arFileThumb['src']?>" alt="" data-fancybox-initied="Y">
            </a>
        </div>
    </div>
</div>
        <? endforeach;?>
        <div class="clear"></div>
<p>
	<a href="/gallery/"><?=GetMessage("PHOTO_BACK")?></a>
</p>
</div>
</section>