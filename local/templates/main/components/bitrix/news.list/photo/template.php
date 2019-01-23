<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="block-wrapper">
    <div class="container text-left g-max-width-1200 g-mb-20 top_padd g-font-size-20--md">
        <div class="row">
<?//=Sepro\Helpers::printPre($arResult)?>
<?if(count($arResult["ITEMS"])>0):?>
            <table width="100%" cellpadding="5" cellspacing="0" border="0">
		<?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $arFile = CFile::ResizeImageGet(
                $arItem["DETAIL_PICTURE"]['ID'],
                array('width'=>1000, 'height'=>600),
                BX_RESIZE_IMAGE_PROPORTIONAL,
                false, // возвращать ли размеры в массиве
                false, // фильтры (пока один sharpe)
                false, // Отложенное масштабирование
                80 // качество жпг
            );
            ?>
            <tr valign="top" class=" js-animation fadeInLeft">
			<td align="center">
			<a href="<?=$arItem["DETAIL_PICTURE"]['SRC']?>" data-fancybox="gallery">
                <img src="<?=$arFile['src']?>" />
            </a>
			</td>
            </tr>
            <? if(!empty($arItem['DETAIL_TEXT'])):?>
            <tr valign="top" class="js-animation fadeInUp">
                <td>
                   <?=$arItem['DETAIL_TEXT']?>
                </td>
            </tr>
            <? endif;?>
		<?endforeach;?>
		</table>
<?endif?>
        </div>
    </div>
</div>
