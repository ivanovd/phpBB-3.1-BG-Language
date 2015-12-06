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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Управление на ботовете',
	'BOTS_EXPLAIN'		=> '“Ботове”, “паяци” или “търсачи” са автоматизирани агенти, най-често използвани от търсачките за да обновяват техните бази данни. Тъй като те рядко използват сесиите правилно, това може да доведе до неправилно отброяване на посетителите, увеличаване на натоварването и понякога грешно индексиране на страниците. От тук можете да дефинирате специални типове потребители за да преодолеете тези проблеми.',
	'BOT_ACTIVATE'		=> 'Активирай',
	'BOT_ACTIVE'		=> 'Ботът е активен',
	'BOT_ADD'			=> 'Добави бот',
	'BOT_ADDED'			=> 'Нов бот беше добавен успешно.',
	'BOT_AGENT'			=> 'Агентът съдържа',
	'BOT_AGENT_EXPLAIN'	=> 'Низ, който се съдържа в името на браузъра на агента, частични съвпадения са позволени.',
	'BOT_DEACTIVATE'	=> 'Деактивирай',
	'BOT_DELETED'		=> 'Ботът е изтрит успешно.',
	'BOT_EDIT'			=> 'Редактирай ботовете',
	'BOT_EDIT_EXPLAIN'	=> 'От тук можете да добавяте или редактирате съществуващи ботове. Можете да дефинирате низове на агента и/или IP адрес или диапазон от адреси, по които да се определя бота. Също така можете да зададете стил и език, с който ботът ще разглежда форума. Това може да Ви позволи да намалите трафика като изберете по-лек и прост стил за ботовете. Не забравяйте да зададете подходящи права за специалната потребителска група на ботовете.',
	'BOT_LANG'			=> 'Език за бота',
	'BOT_LANG_EXPLAIN'	=> 'Този език ще бъде представен на бота, докато разглежда форума.',
	'BOT_LAST_VISIT'	=> 'Последно посещение',
	'BOT_IP'			=> 'IP адрес на бота',
	'BOT_IP_EXPLAIN'	=> 'Разрешени са частични съвпадения, разделяйте адресите със запетая.',
	'BOT_NAME'			=> 'Име на бота',
	'BOT_NAME_EXPLAIN'	=> 'Използва се само за Ваша информация.',
	'BOT_NAME_TAKEN'	=> 'Това потребителско име вече е заето и не може да се ползва от бот.',
	'BOT_NEVER'			=> 'Никога',
	'BOT_STYLE'			=> 'Стил за бота',
	'BOT_STYLE_EXPLAIN'	=> 'Това е стилът, който ще се показва на бота.',
	'BOT_UPDATED'		=> 'Съществуващият бот беше обновен успешно.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Бот агентът, който въведохте е подобен на този, който използвате в момента. Моля настройте агента за този бот.',
	'ERR_BOT_NO_IP'				=> 'IP адресите, които въведохте са невалидни или хостът не може да бъде достигнат.',
	'ERR_BOT_NO_MATCHES'		=> 'Трябва да въведете или агент или IP адрес на бота.',

	'NO_BOT'		=> 'Не е намерен бот с въведеното ID.',
	'NO_BOT_GROUP'	=> 'Не е намерена специална бот група.',
));
