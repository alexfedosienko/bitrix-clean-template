<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
if (CModule::IncludeModule("sale") && CModule::IncludeModule("catalog")) {
	if (isset($_POST['id']) && isset($_POST['quantity'])) {
		$PRODUCT_ID = intval($_POST['id']);
		$QUANTITY = intval($_POST['quantity']);
		Add2BasketByProductID($PRODUCT_ID, $QUANTITY);
		unset($_SESSION['bonus_to_payed']);
		$APPLICATION->IncludeComponent(
			"bitrix:sale.basket.basket.line",
			"",
			array(
				"HIDE_ON_BASKET_PAGES" => "N",
				"PATH_TO_AUTHORIZE" => "",
				"PATH_TO_BASKET" => SITE_DIR."basket/",
				"PATH_TO_ORDER" => SITE_DIR."profile/order/make/",
				"PATH_TO_PERSONAL" => SITE_DIR."profile/",
				"PATH_TO_PROFILE" => SITE_DIR."profile/",
				"PATH_TO_REGISTER" => SITE_DIR."login/",
				"POSITION_FIXED" => "N",
				"SHOW_AUTHOR" => "N",
				"SHOW_EMPTY_VALUES" => "Y",
				"SHOW_NUM_PRODUCTS" => "Y",
				"SHOW_PERSONAL_LINK" => "N",
				"SHOW_PRODUCTS" => "N",
				"SHOW_TOTAL_PRICE" => "Y",
				"COMPONENT_TEMPLATE" => ""
			),
			false
		);
	} else {
		echo "Нет параметров";
	}
} else {
	echo "Не подключены модули";
}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>