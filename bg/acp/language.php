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
	'ACP_FILES'						=> 'Административни езикови файлове',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'От тук можете да инсталирате/премахвате езикови пакети. Езикът по подразбиране е маркиран с астериск (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Сигурни ли сте, че искате да изтриете “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Инсталирани езикови пакети',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Детайлите на езика бяха успешно обновени.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Този езиков пакет е вече инсталиран.',
	'LANGUAGE_PACK_DELETED'				=> 'Езиковият пакет “%s” беше успешно премахнат. Всички потребители използващи този език бяха прехвърлени към езика по подразбиране за форума.',
	'LANGUAGE_PACK_DETAILS'				=> 'Детайли на езиковия пакет',
	'LANGUAGE_PACK_INSTALLED'			=> 'Езиковият пакет “%s” беше успешно инсталиран.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Стойностите на допълнителните полета бяха копирани от езика по подразбиране. Моля, сменете ги ако е нужно.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Местно име',
	'LANGUAGE_PACK_NAME'				=> 'Име',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Избраният езиков пакет не съществува.',
	'LANGUAGE_PACK_USED_BY'				=> 'Използван от (включително ботове)',
	'LANGUAGE_VARIABLE'					=> 'Езикови променливи',
	'LANG_AUTHOR'						=> 'Автор на езиковия пакет',
	'LANG_ENGLISH_NAME'					=> 'Име на английски',
	'LANG_ISO_CODE'						=> 'ISO код',
	'LANG_LOCAL_NAME'					=> 'Местно име',

	'MISSING_LANG_FILES'		=> 'Липсващи езикови файлове',
	'MISSING_LANG_VARIABLES'	=> 'Липсващи езикови променливи',

	'NO_FILE_SELECTED'				=> 'Не сте избрали езиков файл.',
	'NO_LANG_ID'					=> 'Не сте избрали езиков пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Не можете да премахнете езиковия пакет по подразбиране.<br />Ако искате да премахнете този езиков пакет, то ще трябва първо да смените езика по подразбиране на форума.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Няма премахнати езикови пакети',

	'THOSE_MISSING_LANG_FILES'			=> 'Следните езикови файлове липсват в папката на “%s” езиковия пакет',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Следните езикови променливи липсват от “%s” езиковия пакет',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Премахнати езикови пакети',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Търси в базата данни с езикови пакети',
));
