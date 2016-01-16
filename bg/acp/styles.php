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
	'ACP_STYLES_EXPLAIN'	=> 'От тук можете да управлявате наличните стилове на Вашия форум. Можете да променяте съществуващи стилове, да изтривате, деактивирате, активирате и да инсталирате нови стилове. Също така ще можете да видите как би изглеждал даден стил с функцията за предварителен преглед. Изписан е и общият брой потребители, използващи всеки стил, броят потребители със заместен стил няма да бъдат отбелязани тук.',

	'CANNOT_BE_INSTALLED'			=> 'Не може да бъде инсталиран',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Сигурни ли сте, че искате да деинсталирате избраните стилове?',
	'COPYRIGHT'						=> 'Авторско право',

	'DEACTIVATE_DEFAULT'		=> 'Не можете да деактивирате стилът по подразбиране.',
	'DELETE_FROM_FS'			=> 'Изтрий от файловата система',
	'DELETE_STYLE_FILES_FAILED'	=> 'Грешка при изтриването на файловете на стила "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Файловете на стила "%s" бяха изтрити.',
	'DETAILS'					=> 'Детайли',

	'INHERITING_FROM'			=> 'Наследен от',
	'INSTALL_STYLE'				=> 'Инсталирай стила',
	'INSTALL_STYLES'			=> 'Инсталирай стиловете',
	'INSTALL_STYLES_EXPLAIN'	=> 'От тук можете да инсталирате нови стилове.<br />Ако не можете да намерите даден стил в списъка по-долу, проверете дали стилът не е вече инсталиран. Ако не е инсталиран, проверете дали е качен правилно.',
	'INVALID_STYLE_ID'			=> 'Грешено ID на стила.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Няма намерени стилове, които да отговарят на Вашатазаявка.',
	'NO_UNINSTALLED_STYLE'		=> 'Няма намерени деинсталирани стилове.',

	'PURGED_CACHE'				=> 'Кешът беше изчистен.',

	'REQUIRES_STYLE'			=> 'Този стил изисква стилът "%s" да бъде инсталиран.',

	'STYLE_ACTIVATE'			=> 'Активирай',
	'STYLE_ACTIVE'				=> 'Активен',
	'STYLE_DEACTIVATE'			=> 'Деактивирай',
	'STYLE_DEFAULT'				=> 'Направи стил по подразбиране',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Трябва първо да активирате стила преди да го направите стил по подразбиране.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Грешен стил-родител.',
	'STYLE_ERR_NAME_EXIST'		=> 'Стил със същото име вече съществува.',
	'STYLE_ERR_STYLE_NAME'		=> 'Трябва да зададете име на този стил.',
	'STYLE_INSTALLED'			=> 'Стилът "%s" беше инсталиран.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Връщане в списъка с инсталирани стилове',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Инсталиране на още стилове',
	'STYLE_NAME'				=> 'Име на стила',
	'STYLE_NOT_INSTALLED'		=> 'Стилът "%s" не беше инсталиран.',
	'STYLE_PATH'				=> 'Папка на стила',
	'STYLE_UNINSTALL'			=> 'Деинсталирай',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Стилът "%s" не може да бъде деинсталиран защото има едно или повече деца-стилове.',
	'STYLE_UNINSTALLED'			=> 'Стилът "%s" беше успешно деинсталиран.',
	'STYLE_USED_BY'				=> 'Използван от (включително ботове)',

	'UNINSTALL_DEFAULT'		=> 'Не можете да деинсталирате стилът по подразбиране.',
	'BROWSE_STYLES_DATABASE' => 'Търси в базата данни със стилове',
));
