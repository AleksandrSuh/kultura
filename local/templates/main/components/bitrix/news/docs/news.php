<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div id="block117" class="block-wrapper">
    <section class="landing-block g-bg-pattern-gray-v1 js-animation fadeInUp top_padd_rem g-pb-20"
             style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
        <div class="container">
            <div class="landing-block-node-inner text-uppercase text-center u-heading-v2-4--bottom g-brd-primary">
                <h4 class="landing-block-node-subtitle h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-mb-20 g-color-gray-dark-v5">
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR . "include/docs_headh4.php",
                        Array(),
                        Array("MODE" => "html", "NAME" => "заголовок")
                    ); ?>
                </h4>
                <h2 class="landing-block-node-title h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10 g-font-size-27">
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR . "include/docs_headh2.php",
                        Array(),
                        Array("MODE" => "html", "NAME" => "заголовок")
                    ); ?>
                </h2>
            </div>
        </div>
    </section>
</div>
<? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "docs_sections", Array(
    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
    "CACHE_GROUPS" => "N",    // Учитывать права доступа
    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
    "CACHE_TYPE" => "A",    // Тип кеширования
    "COUNT_ELEMENTS" => "Y",    // Показывать количество элементов в разделе
    "HIDE_SECTION_NAME" => "N",    // Не показывать названия подразделов
    "IBLOCK_ID" => $arParams['IBLOCK_ID'],    // Инфоблок
    "IBLOCK_TYPE" => "sections",    // Тип инфоблока
    "SECTION_CODE" => "",    // Код раздела
    "SECTION_FIELDS" => array(    // Поля разделов
        0 => "NAME",
        1 => "",
    ),
    "SECTION_ID" => $_REQUEST["SECTION_ID"],    // ID раздела
    "SECTION_URL" => $arParams['SECTION_URL'],    // URL, ведущий на страницу с содержимым раздела
    "SECTION_USER_FIELDS" => array(    // Свойства разделов
        0 => "",
        1 => "",
    ),
    "SHOW_PARENT_NAME" => "Y",    // Показывать название раздела
    "TOP_DEPTH" => "2",    // Максимальная отображаемая глубина разделов
    "VIEW_MODE" => "TILE",    // Вид списка подразделов
),
    $component,
    "HI"
); ?>