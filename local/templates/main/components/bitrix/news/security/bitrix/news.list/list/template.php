<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="block118" class="block-wrapper">
    <section class="landing-block g-bg-pattern-gray-v1 g-pb-60 g-pt-20">
        <div class="container">
            <div class="row no-gutters">
<?if(count($arResult["ITEMS"])>0):?>
        <?//= Sepro\Helpers::printPre($arResult)?>
                <?foreach($arResult["ITEMS"] as $key => $arItem):?>
        <?
        $arButtons = CIBlock::GetPanelButtons(
            $arItem["IBLOCK_ID"],
            $arItem["ID"],
            0,
            array("SECTION_BUTTONS"=>false, "SESSID"=>false)
        );
        $arItem["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
        $arItem["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => "Удалить?"));
        $temp_type = 'link';
        if(!empty($arItem['PROPERTIES']['FILE']['VALUE']))
        {
            $temp_type = 'file';
            $arFile = CFile::GetFileArray($arItem['PROPERTIES']['FILE']['VALUE']);
            $arFileType = explode('/', $arFile['CONTENT_TYPE']);
            $file_size_kb = intval($arFile['FILE_SIZE'] / 1024);
            if ($file_size_kb == 0)
            {
                $print_size = $arFile['FILE_SIZE'].' байт';
            }
            else
            {
                $file_size_mb = intval($file_size_kb / 1024);
                if($file_size_mb == 0)
                {
                    $print_size = $file_size_kb.' Кбайт';
                }
                else
                {
                    $file_size_kb = $file_size_kb % 1024;
                    $print_size = $file_size_mb.'.'.$file_size_kb.' Mбайт';
                }
            }
        }
        ?>
            <? if($temp_type=='file'):?>
                <div class="wrapp_docs iblock js-animation fadeInRight landing-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                    <div class="file_type clearfix <?=$arFileType[1]?>">
                        <i class="icon"></i>
                        <div class="description">
                            <a target="_blank" href="<?=$arFile['SRC']?>"><?=$arItem["NAME"]?></a>
                            <div class="g-font-size-14--md">
                                <?=$arItem["PREVIEW_TEXT"]?>
                            </div>
                            <span class="size">Размер:
                                <?=$print_size?></span>
                        </div>
                    </div>
                </div>
            <? else:?>
            <?
                if(!empty($arItem['FIELDS']['DETAIL_TEXT'])):
                ?>
                    <div class="wrapp_docs iblock js-animation fadeInRight landing-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                <div class="file_type clearfix">
                    <div class="description">
                        <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem["NAME"]?></a>
                    </div>
                </div>
                <? else:?>
                    <div class="iblock js-animation fadeInRight landing-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none; width:100%">
                    <table width="100%" cellpadding="5" cellspacing="0" border="0">
                    <?
                    $arFile = CFile::ResizeImageGet(
                        $arItem['FIELDS']["DETAIL_PICTURE"]['ID'],
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
                            <a href="<?=$arItem['FIELDS']["DETAIL_PICTURE"]['SRC']?>" data-fancybox="gallery">
                                <img src="<?=$arFile['src']?>" />
                            </a>
                        </td>
                    </tr>
                    </table>
                <? endif;?>
            </div>
            <? endif;?>
        <?endforeach;?>
<?endif?>
            </div>
        </div>
    </section>
</div>

