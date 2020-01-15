'use strict';
// Генератор разделов
// Использование: node csection.js [название раздела] [заголовок раздела]
const fs = require('fs');
const section_name = process.argv[2]; // получим имя раздела
const section_title = process.argv[3]; // получим имя раздела на русском

if (section_name) {
	if (!fs.existsSync(section_name)) {
		fs.mkdirSync(section_name);
		fs.writeFileSync(section_name+'/index.php', '<?php\nrequire($_SERVER[\'DOCUMENT_ROOT\'].\'/bitrix/header.php\');\n$APPLICATION->SetPageProperty("description", "");\n$APPLICATION->SetPageProperty("keywords", "");\n$APPLICATION->SetPageProperty("title", "'+section_title+'");\n$APPLICATION->SetTitle("'+section_title+'");\n?>\n\n<?php\nrequire($_SERVER[\'DOCUMENT_ROOT\'].\'/bitrix/footer.php\');\n?>');
		fs.writeFileSync(section_name+'/.section.php', '<?php\n$sSectionName = "'+section_title+'";\n$arDirProperties = array();\n?>');
	} else {
		console.log('Отмена операции: раздел уже создан');
	}
} else {
	console.log('Отмена операции: не указано название раздела');
}