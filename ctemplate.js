'use strict';
// Генератор разделов
// Использование: node ctemplate.js [тип операции] [разработчик компонента] [название компонента] [название шаблона]
const fs = require('fs');
const dev_name = process.argv[2]; // разработчик компонента
const component_name = process.argv[3]; // название компонента
const template_name = (process.argv[4]) ? process.argv[4] : '.default'; // название шаблона
const template_path = 'local/templates/template_name/components';

if (dev_name && component_name) {
	// Если папка компонента не существует
	if (!fs.existsSync(template_path + '/' + dev_name + '/' + component_name)) {
		console.log('Создаю папку: ' + template_path + '/' + dev_name + '/' + component_name);
		fs.mkdirSync(template_path + '/' + dev_name + '/' + component_name);
	}
	// Если шаблон уже существует
	if (!fs.existsSync(template_path + '/' + dev_name + '/' + component_name + '/' + template_name)) {
		console.log('Создаю папку: ' + template_path + '/' + dev_name + '/' + component_name + '/' + template_name);
		fs.mkdirSync(template_path + '/' + dev_name + '/' + component_name + '/' + template_name);
		console.log('Создаю файл: ' + template_path + '/' + dev_name + '/' + component_name + '/' + template_name + '/template.php');
		fs.writeFileSync(template_path + '/' + dev_name + '/' + component_name + '/' + template_name + '/template.php', '<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>\n<pre>\n	<?print_r($arResult);?>\n</pre>\n');
	} else {
		console.log('Отмена операции: шаблон уже существует');
	}
} else {
	console.log('Отмена операции: нужно указать разработчика и название компонента');
}