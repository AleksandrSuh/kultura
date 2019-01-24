<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//IncludeTemplateLangFile(__FILE__);
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']))
{
    $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH."/ajax.php"
        ),
        false,
        array('HIDE_ICONS'=>'Y')
    );
}
if ($GLOBALS["APPLICATION"]->GetCurPage() == "/") {
    $IsMain = true;
}
if (strpos($GLOBALS["APPLICATION"]->GetCurDir(),"/docs/")  !== false || strpos($GLOBALS["APPLICATION"]->GetCurDir(),"/security/")  !== false) {
    $IsDocs = true;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Fonts -->
        <!--link rel="stylesheet" as="style" data-font="g-font-open-sans" data-protected="true" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic">
        <link rel="stylesheet" as="style" data-font="g-font-roboto" data-protected="true" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic,cyrillic-ext,latin-ext">
        <link rel="stylesheet" as="style" data-font="g-font-roboto-slab" data-protected="true" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext">
        <link rel="stylesheet" as="style" data-font="g-font-ek-mukta" data-protected="true" href="https://fonts.googleapis.com/css?family=Ek+Mukta:400,600,700">
        <link rel="stylesheet" as="style" data-font="g-font-montserrat" data-protected="true" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,900&amp;subset=cyrillic"-->
        <link rel="stylesheet" as="style" data-font="g-font-alegreya-sans" data-protected="true" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,900&amp;subset=cyrillic-ext,latin-ext">
        <!--link rel="stylesheet" as="style" data-font="g-font-cormorant-infant" data-protected="true" href="https://fonts.googleapis.com/css?family=Comfortaa:400,400i,600,600i,700,700i&amp;subset=cyrillic-ext,latin-ext"-->
        <!--link rel="stylesheet" as="style" data-font="g-font-pt-sans-caption" data-protected="true" href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic-ext,latin-ext">
        <link rel="stylesheet" as="style" data-font="g-font-pt-sans-narrow" data-protected="true" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Sans:400,700&amp;subset=cyrillic-ext,latin-ext">
        <link rel="stylesheet" as="style" data-font="g-font-pt-sans" data-protected="true" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic-ext,latin-ext">
        <link rel="stylesheet" as="style" data-font="g-font-lobster" data-protected="true" href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic-ext,latin-ext"-->

        <noscript>
            <!--link data-font="g-font-open-sans" data-protected="true" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=cyrillic" rel="stylesheet">
            <link data-font="g-font-roboto" data-protected="true" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
            <link data-font="g-font-roboto-slab" data-protected="true" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
            <link data-font="g-font-ek-mukta" data-protected="true" href="https://fonts.googleapis.com/css?family=Ek+Mukta:400,600,700" rel="stylesheet">
            <link data-font="g-font-montserrat" data-protected="true" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,900&subset=cyrillic" rel="stylesheet"-->
            <link data-font="g-font-alegreya-sans" data-protected="true" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,900&subset=cyrillic-ext,latin-ext" rel="stylesheet">
            <!--link data-font="g-font-cormorant-infant" data-protected="true" href="https://fonts.googleapis.com/css?family=Comfortaa:400,400i,600,600i,700,700i&subset=cyrillic-ext,latin-ext" rel="stylesheet"-->
            <!--link data-font="g-font-pt-sans-caption" data-protected="true" href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=cyrillic-ext,latin-ext" rel="stylesheet">
            <link data-font="g-font-pt-sans-narrow" data-protected="true" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Sans:400,700&subset=cyrillic-ext,latin-ext" rel="stylesheet">
            <link data-font="g-font-pt-sans" data-protected="true" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic-ext,latin-ext" rel="stylesheet">
            <link data-font="g-font-lobster" data-protected="true" href="https://fonts.googleapis.com/css?family=Lobster&subset=cyrillic-ext,latin-ext" rel="stylesheet"-->
        </noscript>
        <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="robots" content="index, follow">

    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/vendor/vendors_base.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/vendor/icon-awesome/css/font-awesome.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/vendor/icon-line/css/simple-line-icons.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/vendor/icon-line-pro/style.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/vendor/icon-hs/style.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/vendor/icon-etlinefont/style.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/vendor/slick-carousel/slick/slick.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/themes/themes_core.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/css/custom.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/css/themes_custom.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/themes/gym/gym_custom.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/themes/gym/gym.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/themes-typo/courses/courses-typo.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/template_styles.css', true); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/custom.css', true); ?>
    <? $APPLICATION->ShowHead(); ?>
    <?
    $APPLICATION->ShowProperty('BeforeHeadClose');


    if (\Bitrix\Main\Loader::includeModule('landing'))
    {
    CUtil::InitJSCore(array(
    'landing_core'
    ));
    }
    ?>
    <script type="text/javascript">
        window.obPage = window.obPage || {};
    </script>
</head>
<body class="g-upper-show">
<? $APPLICATION->ShowPanel() ?>
    <a href="/" class="head_link">
        <div id="header">
            <div class="container for_logo">
                <div class="ukvp_logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo2.jpg" />
                </div>
                <div class="site_head">
                    <span>Управление культуры</span><br><span>городского округа Верхняя Пышма</span>
                </div>
                <div class="ukvp_logo theater">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo2019.png" />
                </div>
            </div>
        </div>
    </a>
    <main class="landing-public-mode">
    <div class="landing-main">
    <div id="block104" class="block-wrapper">
<header class="landing-block landing-block-menu <?//g-bg-white?>bg_patt3 u-header u-header--floating g-z-index-9999">
    <div class="u-header__section u-header__section--light u-shadow-v27 g-transition-0_3 g-py-17" data-header-fix-moment-exclude="g-py-17" data-header-fix-moment-classes="g-py-12">
        <nav class="navbar navbar-expand-lg g-py-0">
            <div class="container">
                <? $href = '/';
                if($IsMain)
                {
                    $href = '#';
                }?>
                <!-- Logo -->
                <a href="<?=$href?>" class="landing-block-node-menu-logo-link navbar-brand u-header__logo p-0<? if($IsMain):?> js-go-to<? endif;?>">
                    <div class="site_head">
                        <span>Управление культуры</span><br><span>городского округа Верхняя Пышма</span>
                    </div>
                    <!--img class="landing-block-node-menu-logo u-header__logo-img u-header__logo-img--main g-max-width-180" src="<?//https://cdn.bitrix24.site/bitrix/images/landing/logos/courses-logo-dark.png?><?=SITE_TEMPLATE_PATH.'/images/logo.jpg'?>" alt="Управление культуры городского округа Верхняя Пышма"-->
                </a>
                <!-- End Logo -->

                <!-- Navigation -->
                <div class="navbar-collapse align-items-center flex-sm-row collapse" id="navBar83" style="">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "2",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "N",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "Y"
                        )
                    );?>
                </div>
                <!-- End Navigation -->

                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 ml-auto g-flex-centered-item--center collapsed" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar83" data-toggle="collapse" data-target="#navBar83">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
                </button>
                <!-- End Responsive Toggle Button -->
            </div>
        </nav>
    </div>
    <div id="bigeye">
        <p> Версия для слабовидящих </p>
    </div>
</header>
</div>
<? if($IsMain):?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "main_slides",
        array(
            "ACTIVE_DATE_FORMAT" => "j M Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "N",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "DETAIL_PICTURE",
                1 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "5",
            "IBLOCK_TYPE" => "news",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "20",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "LINK",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "Y",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "SORT",
            "SORT_BY2" => "ACTIVE_FROM",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "DESC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "main_slides"
        ),
        false
    );?>
    <? endif?>
    <div class="content">
        <? if(!$IsMain):?>
        <div class="block-wrapper">
            <section class="landing-block g-pt-60 g-bg-gray-light-v5 js-animation fadeInUp" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
                <div class="text-left g-max-width-1200 g-font-size-20--md">
                    <? if(!$IsDocs):?>
                    <div class="container top_padd">
                        <div class="landing-block-node-inner text-uppercase text-center u-heading-v2-4--bottom g-brd-primary">
                            <h1 class="landing-block-node-title h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10 g-font-size-27">
                                <?$APPLICATION->ShowTitle(false);?>
                            </h1>
                        </div>
                    </div>
                        <?endif;?>
        <? endif?>

