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
	'APPROVE'								=> 'Одобри',
	'ATTACHMENT'						=> 'Прикачен файл',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Прикачването на файлове е забранено.',

	'BOOKMARK_ADDED'		=> 'Темата успешно е добавена в любими.',
	'BOOKMARK_ERR'			=> 'Неуспешно добавяне на темата в любими. Моля, опитайте отново.',
	'BOOKMARK_REMOVED'		=> 'Темата беше премахната от любими.',
	'BOOKMARK_TOPIC'		=> 'Добави темата в любими',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Премахни темата от любими',
	'BUMPED_BY'				=> 'Последно избутана от %1$s на %2$s.',
	'BUMP_TOPIC'			=> 'Избутай темата',

	'CODE'					=> 'Код',

	'DELETE_TOPIC'			=> 'Изтрий темата',
	'DELETED_INFORMATION'	=> 'Изтрита от %1$s на %2$s',
	'DISAPPROVE'					=> 'Не одобрявай',
	'DOWNLOAD_NOTICE'		=> 'Нямате нужните права за да преглеждате прикачените към това мнение файлове.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Последна промяна от %2$s на %3$s, променено общо %1$d път.',
		2	=> 'Последна промяна от %2$s на %3$s, променено общо %1$d пъти.',
	),
	'EMAIL_TOPIC'			=> 'Прати темата по емейл',
	'ERROR_NO_ATTACHMENT'	=> 'Избраният прикачен файл вече не съществува.',

	'FILE_NOT_FOUND_404'	=> 'Файлът <strong>%s</strong> не съществува.',
	'FORK_TOPIC'			=> 'Копирай темата',
	'FULL_EDITOR'			=> 'Пълен редактор &amp; Преглед',

	'LINKAGE_FORBIDDEN'		=> 'Нямате нужните права за да преглеждате, сваляте или споделяте/взимате връзки от този сайт.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Бяхте уведомен за тази тема, моля влезте в профила си за да я видите.',
	'LOGIN_VIEWTOPIC'		=> 'Трябва да сте регистриран и да сте влезли в профила си за да видите тази тема.',

	'MAKE_ANNOUNCE'				=> 'Промени на “Важно съобщение”',
	'MAKE_GLOBAL'				=> 'Промени на “Глобално съобщение”',
	'MAKE_NORMAL'				=> 'Промени на “Нормална тема”',
	'MAKE_STICKY'				=> 'Промени на “Закачена тема”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Можете да изберете само <strong>%d</strong> отговор',
		2	=> 'Можете да изберете до <strong>%d</strong> отговора',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Прикаченият файл <strong>%s</strong> вече не е достъпен',
	'MOVE_TOPIC'				=> 'Премести темата',

	'NO_ATTACHMENT_SELECTED'=> 'Не сте избрали прикачен файл за сваляне или разглеждане.',
	'NO_NEWER_TOPICS'		=> 'Няма по-нови теми в този форум.',
	'NO_OLDER_TOPICS'		=> 'Няма по-стари теми в този форум.',
	'NO_UNREAD_POSTS'		=> 'Няма нови непрочетени съобщения в тази тема.',
	'NO_VOTE_OPTION'		=> 'Трябва да изберете отговор когато гласувате.',
	'NO_VOTES'				=> 'Няма гласове',

	'POLL_ENDED_AT'			=> 'Анкетата завърши на %s',
	'POLL_RUN_TILL'			=> 'Анкетата е активна до %s',
	'POLL_VOTED_OPTION'		=> 'Гласувахте за този отговор',
	'POST_DELETED_RESTORE'	=> 'Мнението беше изтрито и не може да бъде възстановено.',
	'PRINT_TOPIC'			=> 'Изглед за принтиране',

	'QUICK_MOD'				=> 'Инструменти за бързо модериране',
	'QUICKREPLY'			=> 'Бърз отговор',
	'QUOTE'					=> 'Цитат',

	'REPLY_TO_TOPIC'		=> 'Отговори',
	'RESTORE'				=> 'Възстанови',
	'RESTORE_TOPIC'			=> 'Възстанови темата',
	'RETURN_POST'			=> '%sВърни се към мненията%s',

	'SUBMIT_VOTE'			=> 'Гласувай',

	'TOPIC_TOOLS'			=> 'Инструменти за темата',
	'TOTAL_VOTES'			=> 'Общо гласове',

	'UNLOCK_TOPIC'			=> 'Отключи темата',

	'VIEW_INFO'				=> 'Детайли за мнението',
	'VIEW_NEXT_TOPIC'		=> 'Следваща тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Предишна тема',
	'VIEW_RESULTS'			=> 'Виж резултатите',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d мнение',
		2	=> '%d мнения',
	),
	'VIEW_UNREAD_POST'		=> 'Първо непрочетено мнение',
	'VOTE_SUBMITTED'		=> 'Гласувахте успешно.',
	'VOTE_CONVERTED'		=> 'Смяната на гласа не се поддържа за конвертирани анкети.',

));
