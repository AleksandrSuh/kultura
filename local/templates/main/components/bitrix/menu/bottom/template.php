<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="landing-block-card-list3 list-unstyled g-mb-30">
    <?
    $previousLevel = 0;
    foreach($arResult as $arItem):?>

        <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
            <?=str_repeat("</li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?endif?>


            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="landing-block-card-list3-item g-mb-10<?if ($arItem["SELECTED"]):?> active<?endif?>">
                    <a class="landing-block-node-list-item g-color-gray-dark-v5" href="<?=$arItem["LINK"]?>" target="_self">
                        <?=$arItem["TEXT"]?>
                    </a>
            <?else:?>

                <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                    <li class="landing-block-node-menu-list-item nav-item g-mr-3--lg g-mb-5 g-mb-0--lg<?if ($arItem["SELECTED"]):?> active<?endif?>">
                        <a href="<?=$arItem["LINK"]?>" class="landing-block-node-menu-list-item-link nav-link" target="_self">
                            <?=$arItem["TEXT"]?>
                        </a>
                    </li>
                <?else:?>
                    <li<?if ($arItem["SELECTED"]):?> class="active"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?endif?>
            <?endif?>
        <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

    <?endforeach?>

    <?if ($previousLevel > 1)://close last item tags?>
        <?=str_repeat("</li>", ($previousLevel-1) );?>
    <?endif?>
    </ul>
<?endif?>