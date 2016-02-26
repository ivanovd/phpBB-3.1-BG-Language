<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'От тук ще можете да управлявате всички видове модули. Моля, обърнете внимание, че АКП има тринивова структура на менюто (Категория -> Категория -> Модул), докато другите имат само две нива (Категория -> Модул) която трябва да се запази. Също така имайте предвид, че можете да си заключите достъпа ако забраните или изтриете модулите отговорни за управление на самите модули.',
	'ADD_MODULE'					=> 'Добави модул',
	'ADD_MODULE_CONFIRM'			=> 'Сигурни ли сте, че искате да добавите избрания модул с избрания режим?',
	'ADD_MODULE_TITLE'				=> 'Добавяне на модул',

	'CANNOT_REMOVE_MODULE'	=> 'Модулът има присвоени деца и не може да бъде изтрит. Моля, изтрийте или преместете всички деца преди да извършите това действие.',
	'CATEGORY'				=> 'Категория',
	'CHOOSE_MODE'			=> 'Изберете вид на модула',
	'CHOOSE_MODE_EXPLAIN'	=> 'Изберете вида на модула, който ще се използва.',
	'CHOOSE_MODULE'			=> 'Изберете модул',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Изберете файла, който ще се извиква от този модул.',
	'CREATE_MODULE'			=> 'Създайте нов модул',

	'DEACTIVATED_MODULE'	=> 'Деактивиран модул',
	'DELETE_MODULE'			=> 'Изтрий модула',
	'DELETE_MODULE_CONFIRM'	=> 'Сигурни ли сте, че искате да изтриете този модул?',

	'EDIT_MODULE'			=> 'Промени модула',
	'EDIT_MODULE_EXPLAIN'	=> 'От можете да задавате специфични настройки на модула.',

	'HIDDEN_MODULE'			=> 'Скрит модул',

	'MODULE'					=> 'Модул',
	'MODULE_ADDED'				=> 'Модулът беше успешно добавен.',
	'MODULE_DELETED'			=> 'Модулът беше успешно изтрит.',
	'MODULE_DISPLAYED'			=> 'Модулът е видим',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Ако не искате да показвате този модул, но искате да го използвате, изберете Не.',
	'MODULE_EDITED'				=> 'Модулът беше успешно променен.',
	'MODULE_ENABLED'			=> 'Модулът е включен',
	'MODULE_LANGNAME'			=> 'Име на модула',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Въведете име на модула. Използвайте езикова променлива ако името се взима от езиков файл.',
	'MODULE_TYPE'				=> 'Вид на модула',

	'NO_CATEGORY_TO_MODULE'	=> 'Не можете да превръщате категория в модул. Моля, изтрийте/преместете всички деца преди да извършите това действие.',
	'NO_MODULE'				=> 'Не е намерен модул.',
	'NO_MODULE_ID'			=> 'Не е зададено id на модул.',
	'NO_MODULE_LANGNAME'	=> 'Не е зададено име на модула.',
	'NO_PARENT'				=> 'Няма зададен родител',

	'PARENT'				=> 'Родител',
	'PARENT_NO_EXIST'		=> 'Родителя не съществува.',

	'SELECT_MODULE'			=> 'Изберете модул',
));
