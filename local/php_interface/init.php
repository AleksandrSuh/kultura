<?use \Bitrix\Main\Loader;

Loader::includeModule('sepro.helper');
Loader::includeModule("iblock");
Loader::includeModule("highloadblock");
//CJSCore::Init(array('window'));

global $arTopMenuInner;
$arTopMenuInner =Array(
    Array(
        "О нас",
        "/about/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Новости",
        "/news/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Учреждения",
        "/institutions/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Безопасность",
        "/security/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Галерея",
        "/gallery/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Документы",
        "/docs/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Наша гордость",
        "/our_pride/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Виртуальная приёмная",
        "#block50",
        Array(),
        Array(),
        ""
    )
);