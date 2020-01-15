<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
	<title><?$APPLICATION->ShowTitle();?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate" />
	<?php
		Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/style..min.css'); // Стили шаблона
		Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/script.min.js'); // Скрипты шаблона
		Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/scripts.js'); // Скрипты управления
	?>
	<?$APPLICATION->ShowHead();?>
</head>
<body>
	<div class="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>

	<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"",
		array(
			"COMPONENT_TEMPLATE" => "",
			"ROOT_MENU_TYPE" => "MENU_NAME",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"MENU_CACHE_GET_VARS" => array(),
			"MAX_LEVEL" => "1",
			"CHILD_MENU_TYPE" => "left",
			"USE_EXT" => "Y",
			"DELAY" => "N",
			"ALLOW_MULTI_SELECT" => "N"
		),
		false
	);?>