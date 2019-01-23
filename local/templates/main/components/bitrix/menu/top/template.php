<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul id="horizontal-multilevel-menu" class="landing-block-node-menu-list js-scroll-nav navbar-nav text-uppercase g-font-weight-700
				g-font-size-18 g-pt-20 g-pt-0--lg g-mb-20 g-mb-0--lg ml-auto g-mr-20">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="landing-block-node-menu-list-item nav-item g-mr-3--lg g-mb-5 g-mb-0--lg<?if ($arItem["SELECTED"]):?> active<?endif?>">
                <a href="<?=$arItem["LINK"]?>" class="landing-block-node-menu-list-item-link nav-link" target="_self"><?=$arItem["TEXT"]?></a>
				<ul class="invbl bg_patt3">
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="active"<?endif?>>
                <a href="<?=$arItem["LINK"]?>" class="landing-block-node-menu-list-item-link nav-link" target="_self"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="landing-block-node-menu-list-item nav-item g-mr-3--lg g-mb-5 g-mb-0--lg<?if ($arItem["SELECTED"]):?> active<?endif?>">
                    <a href="<?=$arItem["LINK"]?>" class="landing-block-node-menu-list-item-link nav-link" target="_self">
                        <?=$arItem["TEXT"]?>
                    </a>
                </li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="active"<?endif?>><a href="<?=$arItem["LINK"]?>" class="landing-block-node-menu-list-item-link nav-link"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
</ul>
<?endif?>