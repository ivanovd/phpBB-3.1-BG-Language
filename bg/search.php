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
	'ALL_AVAILABLE'			=> 'Всички налични',
	'ALL_RESULTS'			=> 'Всички резултати',

	'DISPLAY_RESULTS'		=> 'Покажи резултатите като',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Търсенето намери %d резултат за',
		2	=> 'Търсенето намери %d резултата за',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Търсенето намери повече от %d съвпадение',
		2	=> 'Търсенето намери повече от %d съвпадения',
	),

	'GLOBAL'				=> 'Глобално съобщение',

	'IGNORED_TERMS'			=> 'игнорирани',
	'IGNORED_TERMS_EXPLAIN'	=> 'Следните думи в заявката Ви за търсене бяха игнорирани защото са твърде често срещани думи: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Виж мнението',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Трябва да сте регистрирани и влезли в профила си за да прегледате собствените си мнения.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Трябва да сте регистрирани и влезли в профила си за да прегледате непрочетените мнения.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Трябва да сте регистрирани и влезли в профила си за да прегледате новите мнения от последното Ви посещение.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Въведохте твърде много ключови думи за търсене. Моля, не въвеждайте повече от %1$d дума.',
		2	=> 'Въведохте твърде много ключови думи за търсене. Моля, не въвеждайте повече от %1$d думи.',
	),

	'NO_KEYWORDS'			=> 'Трябва да въведете поне една дума, за която да търсите. Всяка дума трябва да съдържа поне %s и не трявба да съдържа повече от %s изключвайки заместващите символи.',
	'NO_RECENT_SEARCHES'	=> 'Няма скорошни търсения.',
	'NO_SEARCH'				=> 'Съжаляваме, но не Ви е позволено да ползвате системата за търсене.',
	'NO_SEARCH_RESULTS'		=> 'Не бяха намерени подходящи съвпадения.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Съжаляваме, но не можете да ползвате търсачката в момента. Моля, опитайте отново след %d секунда.',
		2	=> 'Съжаляваме, но не можете да ползвате търсачката в момента. Моля, опитайте отново след %d секунди.',
	),
	'NO_SEARCH_UNREADS'		=> 'Съжаляваме, но търсенето за непрочетени мнения е забранено в този форум.',
	'WORD_IN_NO_POST'		=> 'Не бяха намерени резултати, защото думата <strong>%s</strong> не се съдържа в нито едно мнение.',
	'WORDS_IN_NO_POST'		=> 'Не бяха намерени резултати, защото думите <strong>%s</strong> не се съдържат в нито едно мнение.',

	'POST_CHARACTERS'		=> 'символа от мненията',
	'PHRASE_SEARCH_DISABLED'	=> 'Търсене на точна фраза не се поддържа от този форум.',

	'RECENT_SEARCHES'		=> 'Скорошни търсения',
	'RESULT_DAYS'			=> 'Ограничи резултатите до последните',
	'RESULT_SORT'			=> 'Сортирай резултатите по',
	'RETURN_FIRST'			=> 'Покажи първите',
	'GO_TO_SEARCH_ADV'	=> 'Премини към разширено търсене',

	'SEARCHED_FOR'				=> 'Търсена дума',
	'SEARCHED_TOPIC'			=> 'Търсена тема',
	'SEARCHED_QUERY'			=> 'Търсене на',
	'SEARCH_ALL_TERMS'			=> 'Търси за всички думи или използвай заявката както е въведена',
	'SEARCH_ANY_TERMS'			=> 'Търси за която и да е от въведените думи',
	'SEARCH_AUTHOR'				=> 'Търси по автор',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Използвайте * за заместващ символ.',
	'SEARCH_FIRST_POST'			=> 'Само в първото мнение на темите',
	'SEARCH_FORUMS'				=> 'Търси в следните форуми',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Изберете форумът или форумите, в които искате да търсите. Подфорумите се претърсват автоматично, освен ако не изключите долната опция за търсене в подфорумите.',
	'SEARCH_IN_RESULTS'			=> 'Търси в резултатите',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Сложете <strong>+</strong> пред думата, която трябва да бъде намерена и <strong>-</strong> пред думата, която искате да изключите от търсенето. Можете да изредите думи оргадени в скоби и разделени с <strong>|</strong> ако само една от тези думи трябва да бъде намерена. Използвайте * като заместващ символ за частични търсения.',
	'SEARCH_MSG_ONLY'			=> 'Само в текста на мнението',
	'SEARCH_OPTIONS'			=> 'Настройки на търсенето',
	'SEARCH_QUERY'				=> 'Заявка за търсене',
	'SEARCH_SUBFORUMS'			=> 'Търси в подфорумите',
	'SEARCH_TITLE_MSG'			=> 'Заглавията и текста на мненията',
	'SEARCH_TITLE_ONLY'			=> 'Само в заглавията на темите',
	'SEARCH_WITHIN'				=> 'Търси в',
	'SORT_ASCENDING'			=> 'Възходящ',
	'SORT_AUTHOR'				=> 'Автор',
	'SORT_DESCENDING'			=> 'Низходящ',
	'SORT_FORUM'				=> 'Форум',
	'SORT_POST_SUBJECT'			=> 'Заглавие на мнението',
	'SORT_TIME'					=> 'Дата',
	'SPHINX_SEARCH_FAILED'		=> 'Грешка при търсене: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Съжаляваме, търсенето не може да бъде изпълнено. Повече информация за грешката е записана в лога с грешки.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Трябва да въведете поне %d символ от потребителското име на автора.',
		2	=> 'Трябва да въведете поне %d символа от потребителското име на автора.',
	),
));
