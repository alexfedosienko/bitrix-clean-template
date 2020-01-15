<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
global $APPLICATION;

$extend_menu = array();
$extend_menu[] = array('Название пункта меню',
					   '/',
					   array('/'),
					   array('FROM_IBLOCK' => 1,
					  		 'IS_PARENT' => '',
					  		 'DEPTH_LEVEL' => 2));

$aMenuLinks = array_merge($extend_menu, $aMenuLinks);
?>