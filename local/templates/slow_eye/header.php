<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($GLOBALS["APPLICATION"]->GetCurPage() == "/") {
    $IsMain = true;
}
if (strpos($GLOBALS["APPLICATION"]->GetCurDir(),"/docs/")  !== false ) {
    $IsDocs = true;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="robots" content="index, follow">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead(); ?>
    <script type="text/javascript">
        window.obPage = window.obPage || {};
    </script>
</head>
<body>
<? $APPLICATION->ShowPanel() ?>
<div class="contain">
<div class="access">
    <dl class="a-fontsize">
        <dt>Размер шрифта:</dt>
        <dd><a href="#" rel="fontsize-small" class="a-fontsize-small"></a></dd>
        <dd><a rel="fontsize-normal" href="#" class="a-fontsize-normal"></a></dd>
        <dd><a href="#" rel="fontsize-big" class="a-fontsize-big"></a></dd>
    </dl>
    <dl class="a-colors">
        <dt>Цвет сайта</dt>
        <dd><a href="#" rel="color1" class="a-color1"></a></dd>
        <dd><a href="#" rel="color2" class="a-color2"></a></dd>
        <dd><a href="#" rel="color3" class="a-color3"></a></dd>
    </dl>
    <dl class="a-images">
        <dt>Картинки</dt>
        <dd><a rel="imagesoff" href="#" class="a-imagesoff"></a></dd>
    </dl>
    <p class="a-settings"><a href="#">Settings</a></p>

    <div class="popped">
        <h2>Настройки шрифта:</h2>

        <p class="choose-font-family">Выберите шрифт <a class="font-family" id="sans-serif" rel="sans-serif" href="#">Arial</a> <a class="font-family" rel="serif" id="serif" href="#">Times New Roman</a></p>
        <p class="choose-letter-spacing">Пробел межсимвольный: <a class="letter-spacing" id="spacing-small" rel="spacing-small" href="#">Standard</a> <a rel="spacing-normal" class="letter-spacing" id="spacing-normal" href="#">Medium</a> <a rel="spacing-big" class="letter-spacing" id="spacing-big" href="#">Large</a></p>

        <h2>Выбор цветовой схемы:</h2>
        <ul class="choose-colors">
            <li id="color1"><a rel="color1" href="#"><span>—</span>Чёрный на белом</a></li>
            <li id="color2"><a rel="color2" href="#"><span>—</span>Белый на чёрном</a></li>
            <li id="color3"><a rel="color3" href="#"><span>—</span>Тёмно синий на голубом</a></li>
            <li id="color4"><a rel="color4" href="#"><span>—</span>Коричневый на бежевом</a></li>
            <li id="color5"><a rel="color5" href="#"><span>—</span>Зелёный на тёмно коричневом</a></li>
        </ul>
        <p class="saveit"><a class="closepopped" href="#"><span>Закрыть панель</span></a> <a class="default" href="#"><span>Настройки по умолчанию</span></a></p>
    </div>

    <div class="search">
        <p><a href="/">Обычная версия сайта</a></p>
    </div>

</div>
</div>
<div class="container slow_eye">