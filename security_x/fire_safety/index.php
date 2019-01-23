<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пожарная безопасность");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_DIR."/include/security_txt.php"
	),
false,
    Array(
        'HIDE_ICONS' => 'Y'
    )
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>