<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("тест");
?>Text here.... <br>
    <div id="block50" class="block-wrapper">
        <section class="landing-block g-pos-rel g-bg-primary-dark-v1 landing-block-node-bgimg g-bg-size-cover g-bg-img-hero g-bg-cover g-bg-black-opacity-0_7--after g-pt-60 g-pb-60 u-form-alert-v1" data-fileid="-1">

            <div class="container g-z-index-1 g-pos-rel">
                <div class="row align-items-center">

                    <div class="landing-block-form-styles" hidden="">
                        <div class="g-bg-transparent h1 g-color-white g-brd-none g-pa-0" data-form-style-wrapper-padding="1" data-form-style-bg="1" data-form-style-bg-content="1" data-form-style-bg-block="1" data-form-style-header-font-size="1" data-form-style-header-font-weight="1" data-form-style-button-font-color="1" data-form-style-border-block="1">
                        </div>
                        <div class="g-bg-primary g-color-primary g-brd-primary" data-form-style-main-bg="1" data-form-style-main-border-color="1" data-form-style-main-font-color-hover="1">
                        </div>
                        <div class="g-bg-transparent g-brd-none g-brd-bottom g-brd-white" data-form-style-input-bg="1" data-form-style-input-border="1" data-form-style-input-border-radius="1" data-form-style-input-border-color="1">
                        </div>
                        <div class="g-brd-primary g-brd-none g-brd-bottom g-bg-black-opacity-0_7" data-form-style-input-border-hover="1" data-form-style-input-border-color-hover="1" data-form-style-input-select-bg="1">
                        </div>

                        <p class="g-color-white-opacity-0_6" data-form-style-main-font-weight="1" data-form-style-header-text-font-size="1" data-form-style-label-font-weight="1" data-form-style-label-font-size="1" data-form-style-second-font-color="1">
                        </p>

                        <h3 class="h4 g-color-white" data-form-style-main-font-color="1" data-form-style-main-font-family="1">
                        </h3>

                        <p data-form-style-main-font-family="1" data-form-style-main-font-weight="1" data-form-style-header-text-font-size="1">

                        </p></div>


                    <div class="col-12 col-md-6 col-lg-6 mx-auto form-inner">
                        <div class="bitrix24forms g-brd-none g-brd-around--sm g-brd-white-opacity-0_6 g-px-0 g-px-20--sm g-px-45--lg g-py-0 g-py-30--sm g-py-60--lg" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/photo-roses.jpg');" data-b24form="" data-form-style-input-border-color="1" data-b24form-use-style="Y" data-b24form-show-header="Y" data-b24form-original-domain="" data-b24form-connector="Y">

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
                                    "EMAIL_TO" => "kollaps6@yandex.ru",
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
        </section></div><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>