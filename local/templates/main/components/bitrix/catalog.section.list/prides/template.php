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

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<?
			foreach ($arResult['SECTIONS'] as &$arSection)
			{
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

				if (false === $arSection['PICTURE'])
					$arSection['PICTURE'] = array(
						'SRC' => $arCurView['EMPTY_IMG'],
						'ALT' => (
							'' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
							? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
							: $arSection["NAME"]
						),
						'TITLE' => (
							'' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
							? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
							: $arSection["NAME"]
						)
					);
				?>
                <div class="landing-block-card col-sm-6 col-md-4 g-mb-20 js-animation fadeIn" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                    <article class="u-shadow-v28 g-bg-white ">
                        <div class="h_block">
                        <a href="<?=$arSection['SECTION_PAGE_URL']?>">
                        <img class="landing-block-node-img img-fluid w-100" src="<? echo $arSection['PICTURE']['SRC']; ?>" alt="" data-fileid="-1" data-filehash="9eef207add73028ae50f74a9033c20cb">
                        </a>
                        </div>
                        <div class="g-pos-rel">
                            <div class="g-pos-rel g-z-index-1 g-pa-30">
                                <h3 class="h5 mb-3 my_upper text-center">
                                    <a class="landing-block-node-link u-link-v5 g-color-main g-color-primary--hover" href="<? echo $arSection['SECTION_PAGE_URL']; ?>" target="_self"> <?=$arSection["NAME"]?></a>
                                </h3>
                            </div>
                        </div>
                    </article>
                </div>
                <?
			}
			unset($arSection);