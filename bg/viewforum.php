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
	'ACTIVE_TOPICS'			=> 'Активни теми',
	'ANNOUNCEMENTS'			=> 'Важни съобщения',

	'FORUM_PERMISSIONS'		=> 'Права на форума',

	'ICON_ANNOUNCEMENT'		=> 'Важно съобщение',
	'ICON_STICKY'			=> 'Закачена',

	'LOGIN_NOTIFY_FORUM'	=> 'Бяхте уведомен за този форум, моля влезте в профила си за да го прегледате.',

	'MARK_TOPICS_READ'		=> 'Маркирай темите като прочетени',

	'NEW_POSTS_HOT'			=> 'New posts [ Popular ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'New posts [ Locked ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'No new posts [ Popular ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'No new posts [ Locked ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Нямате необходимите права за да разглеждате теми в този форум.',
	'NO_UNREAD_POSTS_HOT'		=> 'Няма непрочетени мнения [ Популярни ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Няма непрочетени мнения [ Заключени ]',

	'POST_FORUM_LOCKED'		=> 'Форумът е заключен',

	'TOPICS_MARKED'			=> 'Темите в този форум бяха маркирани като прочетени.',

	'UNREAD_POSTS_HOT'		=> 'Непрочетени мнения [ Популярни ]',
	'UNREAD_POSTS_LOCKED'	=> 'Непрочетени мнения [ Заключени ]',

	'VIEW_FORUM'			=> 'Виж форума',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d тема',
		2	=> '%d теми',
	),
));
