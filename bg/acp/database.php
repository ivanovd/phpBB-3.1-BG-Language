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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'От тук можете да направите резервно копие на всички данни свързани с phpBB. Можете да съхраните създадения архив във Вашата <samp>store/</samp> папка или да го свалите директно. В зависимост от конфигурацията на сървъра бихте могли да компресирате файла в различни формати.',
	'ACP_RESTORE_EXPLAIN'	=> 'Този процес ще започне пълно възстановяване на всички phpBB таблици от запазен файл. Ако сървърът Ви го поддържа, то можете да използвате  gzip или bzip2 компресиран текстов файл и той ще бъде автоматично декомпресиран. <strong>ВНИМАНИЕ</strong> Това действие ще презапише всички съществуващи данни. Възстановяването може да отнеме дълго време, затова, моля не затваряйте тази страница докато процеса не е приключил. Резервните копия се съхраняват в папката <samp>store/</samp> и се генерират от функцията на phpBB за създаване на резервни копия. Възстановяването от резервно копие, което не е създадено от системата може както да сработи така и да не сработи.',

	'BACKUP_DELETE'		=> 'Резервното копие беше изтрито успешно.',
	'BACKUP_INVALID'	=> 'Избраният файл за създаване на резервно копие е невалиден.',
	'BACKUP_OPTIONS'	=> 'Настройки на резервното копие',
	'BACKUP_SUCCESS'	=> 'Резервното копие беше създадено успешно.',
	'BACKUP_TYPE'		=> 'Вид на резервното копие',

	'DATABASE'			=> 'Инструменти на базата данни',
	'DATA_ONLY'			=> 'Само данните',
	'DELETE_BACKUP'		=> 'Изтрий резервното копие',
	'DELETE_SELECTED_BACKUP'	=> 'Сигурни ли сте, че искате да изтриете избраното резервно копие?',
	'DESELECT_ALL'		=> 'Размаркирай всички',
	'DOWNLOAD_BACKUP'	=> 'Свали резервното копие',

	'FILE_TYPE'			=> 'Тип на файла',
	'FILE_WRITE_FAIL'	=> 'Неуспешен запис на файла в папката за съхранение.',
	'FULL_BACKUP'		=> 'Пълно',

	'RESTORE_FAILURE'		=> 'Резервното копие може да е повредено.',
	'RESTORE_OPTIONS'		=> 'Настройки на възстановяването',
	'RESTORE_SELECTED_BACKUP'	=> 'Сигурни ли сте, че искате да възстановите избраното резервно копие?',
	'RESTORE_SUCCESS'		=> 'Базата данни беше успешно възстановена.<br /><br />Форумът трябва да се е върнал в състоянието, в което е бил, когато е нправено резервното копие.',

	'SELECT_ALL'			=> 'Маркирай всички',
	'SELECT_FILE'			=> 'Изберете файл',
	'START_BACKUP'			=> 'Създай резервно копие',
	'START_RESTORE'			=> 'Започни възстановяване',
	'STORE_AND_DOWNLOAD'	=> 'Запази и свали',
	'STORE_LOCAL'			=> 'Запази файла локално',
	'STRUCTURE_ONLY'		=> 'Само структурата',

	'TABLE_SELECT'		=> 'Избор на таблица',
	'TABLE_SELECT_ERROR'=> 'Трябва да изберете поне една таблица.',
));
