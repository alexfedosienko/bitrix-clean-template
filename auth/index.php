<?php
define("NEED_AUTH", true);
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "");
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("title", "Авторизация");
$APPLICATION->SetTitle("Авторизация");

$request = Bitrix\Main\Context::getCurrent()->getRequest();
(isset($request["backurl"]) && strlen($request["backurl"]) > 0) ? LocalRedirect($request["backurl"]) : LocalRedirect('/profile/');

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
