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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 час',
	'30_MINS'		=> '30 минути',
	'6_HOURS'		=> '6 часа',

	'ACP_BAN_EXPLAIN'	=> 'От тук можете да контролирате изгонването на потребители по потребителско име, IP адрес или емейл адрес. Тези методи предотвратяват достигането на коя да е част от форума от потребителя. Можете да укажете кратка (до 3000 символа) причина за изгонването, ако желаете. Това ще бъде отразено в админ лога. Времетраенето на изгонването също може да бъде зададено. Ако искате изгонването да бъде до специфична дата, вместо определен период от време, то изберете <span style="text-decoration: underline;">До -&gt;</span> за продължителност на изгонването и въведете датата във формат <kbd>ГГГГ-ММ-ДД</kbd>.',

	'BAN_EXCLUDE'			=> 'Изключи от изгонване',
	'BAN_LENGTH'			=> 'Продължителност на изгонването',
	'BAN_REASON'			=> 'Причина за изгонването',
	'BAN_GIVE_REASON'		=> 'Причина, която се показва на изгонения',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Списъкът с изгонени беше обновен успешно.',
	'BANNED_UNTIL_DATE'		=> 'до %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (до %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Изгони един или повече емейл адреса',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Включете това за да изключите въведения емейл адрес от всички изгонвания.',
	'EMAIL_BAN_EXPLAIN'			=> 'За да укажете повече от един емейл адрес въведете всеки адрес на отделен ред. Можете да използвате * като заместващ символ, например <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, и т.н.',
	'EMAIL_NO_BANNED'			=> 'Няма изгонени емейл адреси',
	'EMAIL_UNBAN'				=> 'Отмени изгонване или изключи емейл адреси',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Можете да отмените изгонване (или да изключите) на няколко емейл адреса наведнъж, използвайки съответните комбинации с клавиатура и мишка за Вашия компютър и браузър. Маркираните емейл адреси имат син фон.',

	'IP_BAN'					=> 'Изгони един или повече IP адреса',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Включете това за да изключите въведения IP адрес от всички изгонвания.',
	'IP_BAN_EXPLAIN'			=> 'За да укажете повече от един IP адрес или хост въведете всеки адрес на отделен ред. За да зададете диапазон IP адреси разделете началния и крайния адрес с тире (-) или използвайте заместващия символ “*”',
	'IP_HOSTNAME'				=> 'IP адреси или хостове',
	'IP_NO_BANNED'				=> 'Няма изгонени IP адреси',
	'IP_UNBAN'					=> 'Отмени изгонване или изключи IP адрес',
	'IP_UNBAN_EXPLAIN'			=> 'Можете да отмените изгонване (или да изключите) на няколко IP адреса наведнъж, използвайки съответните комбинации с клавиатура и мишка за Вашия компютър и браузър. Маркираните IP адреси имат син фон.',

	'LENGTH_BAN_INVALID'		=> 'Датата трябва да е във формат <kbd>ГГГГ-ММ-ДД</kbd>.',

	'OPTIONS_BANNED'			=> 'Изгонени',
	'OPTIONS_EXCLUDED'			=> 'Изключен',

	'PERMANENT'		=> 'За постоянно',

	'UNTIL'						=> 'До',
	'USER_BAN'					=> 'Изгони едно или повече потребителски имена',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Включете това за да изключите въведените потребителски имена от всички изгонвания.',
	'USER_BAN_EXPLAIN'			=> 'Можете да изгонвате повече от едно потребителско име наведнъж като въвеждате всяко от тях на нов ред. Използвайте <span style="text-decoration: underline;">Намери потребител</span> функцията за да намерите и добавите един или повече потребители автоматично.',
	'USER_NO_BANNED'			=> 'Няма изгонени потребителски имена',
	'USER_UNBAN'				=> 'Отмени изгонване или изключи по потребителско име',
	'USER_UNBAN_EXPLAIN'		=> 'Можете да отмените изгонване (или да изключите) на няколко потребителя наведнъж, използвайки съответните комбинации с клавиатура и мишка за Вашия компютър и браузър. Маркираните потребителски имена имат син фон.',
));
