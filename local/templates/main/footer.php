<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<? if(!$IsMain):?>
</div>
</section>
</div>
<? endif?>
<div id="block50" class="block-wrapper">
    <section class="landing-block g-bg-pattern-gray-v1 js-animation fadeInUp g-pt-20 g-pb-20" style="animation-duration: 1000ms; animation-play-state: running; animation-name: none;">
        <div class="container">
            <div class="landing-block-node-inner text-uppercase text-center u-heading-v2-4--bottom g-brd-primary">
                <h4 class="landing-block-node-subtitle h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-mb-20 g-color-gray-dark-v5">
                    Напишите нам                    </h4>
                <h2 class="landing-block-node-title h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10 g-font-size-27">
                    Виртуальная приёмная
                </h2>
            </div>
        </div>
    </section>
</div>

<div class="block-wrapper">
    <section class="landing-block g-pos-rel g-bg-pattern-gray-v1 js-animation fadeInUp g-font-size-18--md g-pb-60 u-form-alert-v1" data-fileid="-1">

        <div class="container g-z-index-1 g-pos-rel">
            <div class="row align-items-center">

                <div style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/photo-roses1.jpg'); background-size: cover" class="col-12 col-md-6 col-lg-6 mx-auto form-inner">
                    <div class="bitrix24forms g-brd-none g-brd-around--sm <?//g-brd-white-opacity-0_6?> g-px-0 g-px-20--sm g-px-45--lg g-py-0 g-py-30--sm g-py-60--lg" data-b24form="" data-form-style-input-border-color="1" data-b24form-use-style="Y" data-b24form-show-header="Y" data-b24form-original-domain="" data-b24form-connector="Y">

                        <?$APPLICATION->IncludeComponent(
                            "api:feedbackex",
                            "form",
                            //"uikit",
                            array(
                                "API_FEX_FORM_ID" => "FORM1",
                                "BCC" => "udarnik71@list.ru",
                                "COLOR" => "default",
                                "CONFIG_PATH" => "",
                                "DATETIME" => "",
                                "DIR_URL" => "",
                                "DISABLE_CHECK_SESSID" => "N",
                                "DISABLE_SEND_MAIL" => "N",
                                "DISPLAY_FIELDS" => array(
                                    0 => "TITLE",
                                    1 => "EMAIL",
                                    2 => "MESSAGE",
                                ),
                                "EMAIL_ERROR_MESS" => "Указанный E-mail некорректен",
                                "EMAIL_TO" => "vpuprkult@mail.ru",
                                "FIELD_ERROR_MESS" => "#FIELD_NAME# обязательное",
                                "FIELD_NAME_POSITION" => "stacked",
                                "FIELD_SIZE" => "default",
                                "FORM_AUTOCOMPLETE" => "Y",
                                "FORM_CLASS" => "",
                                "FORM_FIELD_WIDTH" => "",
                                "FORM_LABEL_TEXT_ALIGN" => "left",
                                "FORM_LABEL_WIDTH" => "150px",
                                "FORM_SUBMIT_CLASS" => "uk-button uk-width-1-1",
                                "FORM_SUBMIT_STYLE" => "",
                                "FORM_SUBMIT_VALUE" => "Отправить",
                                "FORM_TEXTAREA_ROWS" => "5",
                                "FORM_TITLE" => "Виртуальная приёмная",
                                "FORM_TITLE_LEVEL" => "3",
                                "FORM_WIDTH" => "",
                                "HIDE_ASTERISK" => "N",
                                "HIDE_FIELD_NAME" => "N",
                                "MAIL_SEND_USER" => "N",
                                "MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
                                "MAIL_SUBJECT_USER" => "#SITE_NAME#: Копия сообщения из формы обратной связи",
                                "OK_TEXT" => "Сообщение успешно отправлено",
                                "OK_TEXT_AFTER" => "Спасибо! Мы рассмотрим сообщение и обязательно свяжемся с Вами.<br>Пожалуйста, дождитесь ответа.",
                                "PAGE_TITLE" => "",
                                "PAGE_URL" => "",
                                "REPLACE_FIELD_FROM" => "N",
                                "REQUIRED_FIELDS" => array(
                                    0 => "TITLE",
                                    1 => "EMAIL",
                                    2 => "MESSAGE",
                                ),
                                "SCROLL_SPEED" => "1000",
                                "THEME" => "gradient",
                                "TITLE_DISPLAY" => "N",
                                "USE_AUTOSIZE" => "Y",
                                "USE_EULA" => "N",
                                "USE_FLATPICKR" => "Y",
                                "USE_JQUERY" => "N",
                                "USE_MODAL" => "N",
                                "USE_PLACEHOLDER" => "N",
                                "USE_PRIVACY" => "Y",
                                "USE_SCROLL" => "Y",
                                "WRITE_MESS_DIV_STYLE" => "padding:10px;border-bottom:1px dashed #dadada;",
                                "WRITE_MESS_DIV_STYLE_NAME" => "font-weight:bold;",
                                "WRITE_MESS_DIV_STYLE_VALUE" => "",
                                "WRITE_MESS_FILDES_TABLE" => "N",
                                "WRITE_MESS_TABLE_STYLE" => "border-collapse: collapse; border-spacing: 0;",
                                "WRITE_MESS_TABLE_STYLE_NAME" => "max-width: 200px; color: #848484; vertical-align: middle; padding: 5px 30px 5px 0px; border-bottom: 1px solid #e0e0e0; border-top: 1px solid #e0e0e0;",
                                "WRITE_MESS_TABLE_STYLE_VALUE" => "vertical-align: middle; padding: 5px 30px 5px 0px; border-bottom: 1px solid #e0e0e0; border-top: 1px solid #e0e0e0;",
                                "COMPONENT_TEMPLATE" => "uikit",
                                "MODAL_ID" => "#API_FEX_MODAL_FORM1",
                                "MODAL_BTN_TEXT" => "Обратная связь",
                                "MODAL_BTN_CLASS" => "api_button",
                                "MODAL_BTN_ID" => "",
                                "MODAL_BTN_SPAN_CLASS" => "api_icon",
                                "MODAL_HEADER_TEXT" => "Обратная связь",
                                "MODAL_FOOTER_TEXT" => "",
                                "MESS_PRIVACY" => "Я согласен на обработку персональных данных",
                                "MESS_PRIVACY_LINK" => "/privacy_policy/",
                                "MESS_PRIVACY_CONFIRM" => "Для продолжения вы должны принять соглашение на обработку персональных данных"
                            ),
                            false
                        );?>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<div id="block51" class="block-wrapper"><section class="g-pt-60 g-pb-60 g-bg-blackkkk g-bg-indigo">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-10 g-mb-25 g-mb-0--lg">
                    <h2 class="landing-block-node-title text-uppercase g-color-white g-font-weight-700 g-font-size-16 g-mb-20">
                        Наши контакты</h2>
                    <div class="landing-block-node-text g-font-size-default g-color-gray-light-v1 g-mb-20">
                        <p>
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR."include/foot_txt.php",
                                Array(),
                                Array("MODE"=>"html", "NAME"=>"текст")
                            );?>
                        </p></div>

                    <address class="g-mb-20">
                        <div class="landing-block-card-contact g-pos-rel g-pl-20 g-mb-7" data-card-preset="text">
                            <div class="landing-block-node-card-contact-icon-container g-color-gray-light-v1 g-absolute-centered--y g-left-0">
                                <i class="landing-block-node-card-contact-icon fa fa-home"></i>
                            </div>
                            <div class="landing-block-node-card-contact-text g-color-gray-light-v1">
                                Адрес: <span style="font-weight: bold;">
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR."include/foot_addr.php",
                                Array(),
                                Array("MODE"=>"html", "NAME"=>"текст")
                            );?></span>
                            </div>
                        </div>

                        <div class="landing-block-card-contact g-pos-rel g-pl-20 g-mb-7" data-card-preset="text">
                            <div class="landing-block-node-card-contact-icon-container g-color-gray-light-v1 g-absolute-centered--y g-left-0">
                                <i class="landing-block-node-card-contact-icon fa fa-phone"></i>
                            </div>
                            <div class="landing-block-node-card-contact-text g-color-gray-light-v1">
                                Телефон: <span style="font-weight: bold;">
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR."include/foot_phone.php",
                                Array(),
                                Array("MODE"=>"html", "NAME"=>"текст")
                            );?></span>
                            </div>
                        </div>

                        <div class="landing-block-card-contact g-pos-rel g-pl-20 g-mb-7" data-card-preset="link">
                            <div class="landing-block-node-card-contact-icon-container g-color-gray-light-v1 g-absolute-centered--y g-left-0">
                                <i class="landing-block-node-card-contact-icon fa fa-envelope"></i>
                            </div>
                            <div>
                                <div class="landing-block-node-card-contact-text g-color-gray-light-v1">
                                    Email: <span style="font-weight: bold;">
                                        <?$APPLICATION->IncludeFile(
                                            SITE_DIR."include/foot_mail.php",
                                            Array(),
                                            Array("MODE"=>"html", "NAME"=>"текст")
                                        );?></span>
                                </div>
                            </div>
                        </div>
                    </address>

                </div>

                <div class="col-sm-12 col-md-2 col-lg-2">
                    <h2 class="landing-block-node-title text-uppercase g-color-white g-font-weight-700 g-font-size-16 g-mb-20">Ссылки</h2>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "N",
                            "ROOT_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N"
                        )
                    );?>
                </div>

            </div>
        </div>
            </section>
        </div>
        <div id="block52" class="block-wrapper">
            <section class="landing-block g-brd-top g-brd-gray-dark-v2 g-bg-blackkkk g-bg-indigo js-animation animation-none animated" style="animation-duration: 1000ms; animation-play-state: running;">
        <div class="text-center text-md-left g-py-40 g-color-gray-dark-v5 container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center g-mb-15 g-mb-0--md w-100 mb-0">
                    <div class="landing-block-node-text mr-1 js-animation animation-none animated" style="animation-duration: 1000ms; animation-play-state: running;">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/copyright.php",
                            Array(),
                            Array("MODE"=>"html", "NAME"=>"копирайт")
                        );?>
                    </div>
                </div>

                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section></div>
    </div>
</div>
<?php
if (\Bitrix\Main\Loader::includeModule('landing'))
{
    \Bitrix\Landing\Manager::setTheme();
}
?>

<? $APPLICATION->ShowProperty('FooterJS'); ?>


<script>
    BX.ready(function() {
        var elements = [].slice.call(document.querySelectorAll("h1, h2, h3, h4, h5"));
        new BX.Landing.UI.Tool.autoFontScale(elements);
    });
</script>
</main>
<? /*script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/custom.js"></script>
<$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js");*/?>
<?/*script src="<?=SITE_TEMPLATE_PATH?>/assets/vendor/vendors_base.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/helpers/onscroll-animation_init.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/helpers/go_to_init.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/helpers/popup_init.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/helpers/hamburgers_init.js"></script*/?>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/helpers/header_menu_init.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/components/hs.carousel.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/helpers/carousel_helper.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/helpers/base_carousel_init.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/helpers/gallery_cards_init.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/helpers/form_init.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/custom.js"></script>
</body>
</html>
