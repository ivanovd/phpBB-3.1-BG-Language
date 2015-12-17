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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Разширение',
	'EXTENSIONS'				=> 'Разширения',
	'EXTENSIONS_ADMIN'			=> 'Управление на разширенията',
	'EXTENSIONS_EXPLAIN'		=> 'Инструмента за управление на разширенията във Вашият phpBB форум ще Ви помогне да включвате и изключвате разширения, да проверявате статуса им и да преглеждате информацията за тях.',
	'EXTENSION_INVALID_LIST'	=> 'Разширението “%s” е невалидно.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Избраното разширение не е налично за този форум, моля проверете дали Вашата версия на phpBB и PHP се поддържат (вижте страницата с детайлите на разширението).',
	'EXTENSION_DIR_INVALID'		=> 'Избраното разширение има невалидна структура на директориите и не може да бъде включено.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Избраното разширение не може да бъде включено, моля проверете изискванията на разширението.',

	'DETAILS'				=> 'Детайли',

	'EXTENSIONS_DISABLED'	=> 'Изключени разширения',
	'EXTENSIONS_ENABLED'	=> 'Включени разширения',

	'EXTENSION_DELETE_DATA'	=> 'Изтрий данните',
	'EXTENSION_DISABLE'		=> 'Изключи',
	'EXTENSION_ENABLE'		=> 'Включи',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Изтриването на данните на разширение премахва всички негови данни и настройки. Файловете на разширението се запазват и то може да бъде включено отново.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Изключването на разширение запазва файловете му, данните и настройките, но премахва функционалността добавена от разширението.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Включването на разширение позволява използването му във форума.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'В момента се изтриват данните на разширението. Моля, не напускайте или опреснявайте страницата докато процеса не завърши.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Разширението се изключва. Моля, не напускайте или опреснявайте страницата докато процеса не завърши.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Разширението се включва. Моля, не напускайте или опреснявайте страницата докато процеса не завърши.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Данните на разширението бяха успешно изтрити',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Разширението беше успешно изключено',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Разширението беше успешно изключено',

	'EXTENSION_NAME'			=> 'Име на разширението',
	'EXTENSION_ACTIONS'			=> 'Действия',
	'EXTENSION_OPTIONS'			=> 'Настройки',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Обновяване на разширение',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Изключете разширението</li>
			<li>Изтрийте файловете на разширението от файловата система</li>
			<li>Качете файловете на новата версия</li>
			<li>Включете разширението</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Изтриване на разширение от форума',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Изключете разширението</li>
			<li>Изтрийте данните на разширението</li>
			<li>Изтрийте файловете на разширението от файловата система</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Сигурни ли сте, че искате да изтриете данните свързани с “%s”?<br /><br />Това ще премахне всички данни и настройки и те не могат да бъдат върнати!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Сигурни ли сте, че искате да изключите разширението “%s”?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Сигурни ли сте, че искате да включите разширението “%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Сигурни ли сте, че искате да използвате нестабилна версия?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Върни се в списъка с разширения',

	'EXT_DETAILS'			=> 'Детайли на разширението',
	'DISPLAY_NAME'			=> 'Име',
	'CLEAN_NAME'			=> 'Системно име',
	'TYPE'					=> 'Тип',
	'DESCRIPTION'			=> 'Описание',
	'VERSION'				=> 'Версия',
	'HOMEPAGE'				=> 'Страница',
	'PATH'					=> 'Път към файла',
	'TIME'					=> 'Дата на публикуване на версията',
	'LICENSE'				=> 'Лиценз',

	'REQUIREMENTS'			=> 'Изисквания',
	'PHPBB_VERSION'			=> 'Версия на phpBB',
	'PHP_VERSION'			=> 'PHP версия',
	'AUTHOR_INFORMATION'	=> 'Информация за автора',
	'AUTHOR_NAME'			=> 'Име',
	'AUTHOR_EMAIL'			=> 'Емейл',
	'AUTHOR_HOMEPAGE'		=> 'Страница',
	'AUTHOR_ROLE'			=> 'Роля',

	'NOT_UP_TO_DATE'		=> '%s не е актуално',
	'UP_TO_DATE'			=> '%s е актуално',
	'ANNOUNCEMENT_TOPIC'	=> 'Съобщение за нова версия',
	'DOWNLOAD_LATEST'		=> 'Свали новата версия',
	'NO_VERSIONCHECK'		=> 'Не е предоставена информация за проверка на версията.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Проверка за нови версии',
	'FORCE_UNSTABLE'					=> 'Винаги проверявай за нестабилни версии',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Настройки на проверката',

	'META_FIELD_NOT_SET'	=> 'Задължителното мета поле %s не е било попълнено.',
	'META_FIELD_INVALID'	=> 'Мета полето %s е невалидно.',
	'BROWSE_EXTENSIONS_DATABASE' => 'Търси в базата данни с разширения',
	'EXTENSION_INSTALL_HEADLINE'=> 'Инсталиране на разширение',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Свалете разширение от базата данни с разширения на phpBB</li>
			<li>Разархивирайте разширението и го качете в папката <samp>ext/</samp> на Вашия форум</li>
			<li>Включете разширението от тази секция</li>
		</ol>',
));
