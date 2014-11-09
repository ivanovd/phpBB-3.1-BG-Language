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
	'ALREADY_DEFAULT_GROUP'		=> 'Избраната група вече е групата Ви по подразбиране.',
	'ALREADY_IN_GROUP'			=> 'Вече сте член на избраната група.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Вече сте изпратили искане за присъединяване в избраната група.',

	'CANNOT_JOIN_GROUP'			=> 'Не можете да се присъедините към тази група. Можете да се присъединявате само към свободни и отворени групи.',
	'CANNOT_RESIGN_GROUP'		=> 'Не можете да напуснете тази група. Можете да напускате само свободни и отворени групи.',
	'CHANGED_DEFAULT_GROUP'		=> 'Успешно сменена група по подразбиране.',

	'GROUP_AVATAR'						=> 'Аватар на групата',
	'GROUP_CHANGE_DEFAULT'				=> 'Сигурни ли сте, че искате да смените групата по подразбиране на “%s”?',
	'GROUP_CLOSED'						=> 'Затворена',
	'GROUP_DESC'						=> 'Описание на групата',
	'GROUP_HIDDEN'						=> 'Скрита',
	'GROUP_INFORMATION'					=> 'Информация за групата',
	'GROUP_IS_CLOSED'					=> 'Това е затворена група, нови потребители могат да се присъединят само чрез покана от лидера на групата.',
	'GROUP_IS_FREE'						=> 'Това е свободна група, всички потребители са добре дошли.',
	'GROUP_IS_HIDDEN'					=> 'Това е скрита група, само членове на тази група могат видят потребителите в нея.',
	'GROUP_IS_OPEN'						=> 'Това е отворена група, потребителите могат да изпращят искания за присъединяване към нея.',
	'GROUP_IS_SPECIAL'					=> 'Това е специална група, специалните групи се управляват от администраторите на форума.',
	'GROUP_JOIN'						=> 'Присъедини се към групата',
	'GROUP_JOIN_CONFIRM'				=> 'Сигурни ли сте, че искате да се присъедините към избраната група?',
	'GROUP_JOIN_PENDING'				=> 'Изпрати искане за присъединяване в групата',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Сигурни ли сте, че искате да се присъедините към избраната група?',
	'GROUP_JOINED'						=> 'Успешно се присъединихте към избраната група.',
	'GROUP_JOINED_PENDING'				=> 'Успешно изпратихте искане за присъединяване към групата. Моля, изчакайте лидерът на групата да одобри членството Ви.',
	'GROUP_LIST'						=> 'Управление на потребителите',
	'GROUP_MEMBERS'						=> 'Членове на групата',
	'GROUP_NAME'						=> 'Име на групата',
	'GROUP_OPEN'						=> 'Отворена',
	'GROUP_RANK'						=> 'Ранк в групата',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Напусни групата',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Сигурни ли сте, че искате на напуснете избраната група?',
	'GROUP_RESIGN_PENDING'				=> 'Откажи искането за присъединяване към групата',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Сигурни ли сте, че искате да се откажете от искането за присъединяване към избраната група?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Успешно напуснахте избраната група.',
	'GROUP_RESIGNED_PENDING'			=> 'Успешно се отказахте от искането за присъединяване към избраната група.',
	'GROUP_TYPE'						=> 'Тип на групата',
	'GROUP_UNDISCLOSED'					=> 'Скрита група',
	'FORUM_UNDISCLOSED'					=> 'Модерация на скрит форум(и)',

	'LOGIN_EXPLAIN_GROUP'	=> 'Трябва да влезете за да можете да видите детайлите на групата.',

	'NO_LEADERS'					=> 'Не сте лидер на нито една група.',
	'NOT_LEADER_OF_GROUP'			=> 'Операцията не може да бъде изпълнена, защото не сте лидер на избраната група.',
	'NOT_MEMBER_OF_GROUP'			=> 'Операцията не може да бъде изпълнена, защото не сте член на избраната група или членството Ви все още не е одобрено.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Не можете да напунете групата Ви по подразбиране.',

	'PRIMARY_GROUP'		=> 'Основна група',

	'REMOVE_SELECTED'		=> 'Премахни избраната',

	'USER_GROUP_CHANGE'			=> 'От група “%1$s” към “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Премахни лидера',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Сигурни ли сте, че искате да се премахнете като лидер на избраната група?',
	'USER_GROUP_DEMOTED'		=> 'Успешно бяхте премахнат като лидер на групата.',
));
