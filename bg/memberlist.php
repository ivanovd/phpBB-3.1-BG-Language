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
	'ABOUT_USER'			=> 'Профил',
	'ACTIVE_IN_FORUM'		=> 'Най-активен във форум',
	'ACTIVE_IN_TOPIC'		=> 'Най-активен в тема',
	'ADD_FOE'				=> 'Добави в списъка с врагове',
	'ADD_FRIEND'			=> 'Добави в списъка с приятели',
	'AFTER'					=> 'След',

	'ALL'					=> 'Всички',

	'BEFORE'				=> 'Преди',

	'CC_EMAIL'				=> 'Изпрати копие на емейла до мен.',
	'CONTACT_ADMIN'			=> 'Свържи се с администратора на форума',

	'DEST_LANG'				=> 'Език',
	'DEST_LANG_EXPLAIN'		=> 'Изберете съответният език (ако съществува) според получателя на това съобщение.',

	'EDIT_PROFILE'			=> 'Промени профила',

	'EMAIL_BODY_EXPLAIN'	=> 'Това съобщение ще бъде изпратено като чист текст, не включвайте HTML или BBCode. Обратният адрес на това съобщение ще бъде Вашият емейл адрес.',
	'EMAIL_DISABLED'		=> 'Съжаляваме, но всички емейл функции са изключени.',
	'EMAIL_SENT'			=> 'Емейлът беше изпратен.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Това съобщение ще бъде изпратено като чист текст, не включвайте HTML или BBCode. Имайте предвид, че информация за темата вече е включена в съобщението. Обратният адрес на това съобщение ще бъде Вашият емейл адрес.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Трябва да въведете валиден емейл адрес на получателя.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Трябва да въведете съобщение, което да бъде изпратено.',
	'EMPTY_MESSAGE_IM'		=> 'Трябва да въведете съобщение, което да бъде изпратено.',
	'EMPTY_NAME_EMAIL'		=> 'Трябва да въведете истинското име на получателя.',
	'EMPTY_SENDER_EMAIL'	=> 'Трябва да въведете валиден емейл адрес.',
	'EMPTY_SENDER_NAME'		=> 'Трябва да въведете име.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Трябва да съседете тема на емейла.',
	'EQUAL_TO'				=> 'Равно на',

	'FIND_USERNAME_EXPLAIN'	=> 'Използвайте тази форма за да намерите даден потребител. Не е нужно да попълвате всички полета. За да търсите по част от данните, можете да използвате * за заместване. Когато въвеждате данни, използвайте следният формат <kbd>ГГГГ-ММ-ДД</kbd>, например <samp>2004-02-29</samp>. Използвайте чекбокс кутийките за да изберете едно или повече потребителски имена (няколко потребителски имена могат да се изберат в зависимост от самата форма) и натиснете бутона Избери за да се върнете в предишната форма.',
	'FLOOD_EMAIL_LIMIT'		=> 'В момента не можете да изпратите друг емейл. Моля, опитайте по-късно.',

	'GROUP_LEADER'			=> 'Лидер на групата',

	'HIDE_MEMBER_SEARCH'	=> 'Скрий търсачката на потребители',

	'IM_ADD_CONTACT'		=> 'Добави контакта',
	'IM_DOWNLOAD_APP'		=> 'Свали приложението',
	'IM_JABBER'				=> 'Имайте предвид, че потребителите може да са избрали да не получават съобщения от непознати потребители.',
	'IM_JABBER_SUBJECT'		=> 'Това е автоматично съобщение, моля не отговаряйте! Съобщение от потребител %1$s в %2$s.',
	'IM_MESSAGE'			=> 'Вашето съобщение',
	'IM_NAME'				=> 'Вашето име',
	'IM_NO_DATA'			=> 'Няма подходяща контактна информация за този потребител.',
	'IM_NO_JABBER'			=> 'Съжаляваме, директното изпращане на съобщение до Jabber потребители не се поддържа от този форум. Ще трябва да инсталирате Jabber на вашата система за да се свържете с потребителя по-горе.',
	'IM_RECIPIENT'			=> 'Получател',
	'IM_SEND'				=> 'Изпрати съобщение',
	'IM_SEND_MESSAGE'		=> 'Изпрати съобщение',
	'IM_SENT_JABBER'		=> 'Вашето съобщение до %1$s беше изпратено успешно.',
	'IM_USER'				=> 'Изпрати моментално съобщение',

	'LAST_ACTIVE'				=> 'Последно активен',
	'LESS_THAN'					=> 'По-малко от',
	'LIST_USERS'				=> array(
		1	=> '%d потребител',
		2	=> '%d потребителя',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Трябва да сте регистрирани и влезли в профила си за да видите потребителите от екипа.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Трябва да сте регистрирани и влезли в профила си за да видите списъка с потребителите.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Трябва да сте регистрирани и влезли в профила си за да можете да търсите потребители.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Трябва да сте регистрирани и влезли в профила си за да разглеждате профили.',

	'MORE_THAN'				=> 'Повече от',

	'NO_CONTACT_FORM'		=> 'Формата за контакт с администратора е забранена.',
	'NO_CONTACT_PAGE'		=> 'Страницата за контакт с администратора е забранена.',
	'NO_EMAIL'				=> 'Нямате права да изпратите емейл на този потребител.',
	'NO_VIEW_USERS'			=> 'Нямате права да преглеждате списъка с потребителите или профилите.',

	'ORDER'					=> 'Подреждане',
	'OTHER'					=> 'Други',

	'POST_IP'				=> 'Публикувано от IP/домейн',

	'REAL_NAME'				=> 'Име на получателя',
	'RECIPIENT'				=> 'Получател',
	'REMOVE_FOE'			=> 'Премахни от враговете',
	'REMOVE_FRIEND'			=> 'Премахни от приятелите',

	'SELECT_MARKED'			=> 'Избери маркираните',
	'SELECT_SORT_METHOD'	=> 'Избери метод за сортиране',
	'SENDER_EMAIL_ADDRESS'	=> 'Вашият емейл адрес',
	'SENDER_NAME'			=> 'Вашето име',
	'SEND_ICQ_MESSAGE'		=> 'Изпрати ICQ съобщение',
	'SEND_IM'				=> 'Моментално съобщение',
	'SEND_JABBER_MESSAGE'	=> 'Изпрати Jabber съобщение',
	'SEND_MESSAGE'			=> 'Изпрати съобщение',
	'SEND_YIM_MESSAGE'		=> 'Изпрати YIM съобщение',
	'SORT_EMAIL'			=> 'Емейл',
	'SORT_LAST_ACTIVE'		=> 'Последна активност',
	'SORT_POST_COUNT'		=> 'Брой мнения',

	'USERNAME_BEGINS_WITH'	=> 'Потребителското име започва с',
	'USER_ADMIN'			=> 'Администрирай потребителя',
	'USER_BAN'				=> 'Изгонване',
	'USER_FORUM'			=> 'Потребителски статистики',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Няма изпратени напомняния до момента',
		1		=> '%1$d напомняне изпратено<br />» %2$s',
		2		=> '%1$d напомняния изпратени<br />» %2$s',
	),
	'USER_ONLINE'			=> 'На линия',
	'USER_PRESENCE'			=> 'Присъствие във форума',
	'USERS_PER_PAGE'		=> 'Потребителя на страница',

	'VIEWING_PROFILE'		=> 'Преглеждане профила на - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Виж Facebook профила',
	'VIEW_SKYPE_PROFILE'	=> 'Виж Skype профила',
	'VIEW_TWITTER_PROFILE'	=> 'Виж Twitter профила',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Виж YouTube канала',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Виж Google+ профила',
));
