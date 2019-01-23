<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$arPost = array_map(array('\Sepro\Helpers', 'rhtmlspecialchars'), $_POST);

if(!empty($arPost['AJAX']))
{
    \Sepro\App::getInstance()->RestartBuffer();

    $text = '';

    switch ($arPost['AJAX'])
    {
        case 'ADD2BASKET':

            if (intval($arPost['NID']) > 0) {
                $count = intval($_SESSION['BASKET'][$arPost['NID']]);

                $_SESSION['BASKET'][$arPost['NID']] = $count + 1;
            }

            echo json_encode(true);

            break;
    }
}