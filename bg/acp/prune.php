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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Тази секция Ви позволява да изтривате или деактивирате потребители във Вашия форум. Потребителите могат да бъдат филтрирани по много начини; по брой мнения, последна активност и т.н. Критериите могат да бъдат комбинирани за да стеснят кръга от засегнати потребители. Например, можете да изтриете всички потребители с по-малко от 10 мнения, които не са били активни от 2002-01-01. Можете да използвате * като заместващ символ в текстовите полета. Също така можете да пропуснете задаването на критерии като въведете списък с потребителски имена (всяко на отделен ред) в текстовото поле. Внимавайте с тези действия, те са необратими! Веднъж изтрито, потребителското име не може да бъде възстановено.',

	'CRITERIA'				=> 'Критерии',

	'DEACTIVATE_DELETE'			=> 'Деактивиране или изтриване',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Изберете дали да деактивирате или изтриете потребителите напълно. Обърнете внимание, че изтритите потребители не могат да бъдат възстановени!',
	'DELETE_USERS'				=> 'Изтрий',
	'DELETE_USER_POSTS'			=> 'Премахни мненията на изтритите потребители',
	'DELETE_USER_POSTS_EXPLAIN' => 'Премахва мненията публикувани от изтритите потребители, не се прилага, ако потребителите са деактивирани.',

	'JOINED_EXPLAIN'			=> 'Въведете дата във формат <kbd>ГГГГ-ММ-ДД</kbd>. Можете да използвате двете полета за задаване на интервал или да оставите едно от тях празно за отворен интервал.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Въведете дата във формат <kbd>ГГГГ-ММ-ДД</kbd>. Въведете <kbd>0000-00-00</kbd> за да изтриете потребителите, които никога не са влизали в профила си, условията <em>Преди</em> и <em>След</em> ще бъдат игнорирани.',

	'POSTS_ON_QUEUE'			=> 'Мнения, изчакващи одобрение',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Ограничаване действието до потребители от следната група.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Всички групи',
	'PRUNE_USERS_LIST'				=> 'Списък с потребители за деактивиране/изтриване',
	'PRUNE_USERS_LIST_DELETE'		=> 'Според избраните критерии, следните потребители ще бъдат изтрити. Можете да премахнете единични потребители от списъка за изтриване като размаркирате кутийката до тяхното потребителско име.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Според избраните критерии, следните потребители ще бъдат деактивирани. Можете да премахнете единични потребители от списъка за деактивиране като размаркирате кутийката до тяхното потребителско име.',

	'SELECT_USERS_EXPLAIN'		=> 'Въведете избрани потребителски имена. При въвеждане на отделни потребителски имена в списъка, горните критерии не се взимат под внимание. Създателите на форума не могат да бъдат изтривани.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Избраните потребители бяха успешно деактивирани.',
	'USER_DELETE_SUCCESS'		=> 'Избраните потребители бяха успешно изтрити.',
	'USER_PRUNE_FAILURE'		=> 'Не бяха намери потребители, които да отговарят на критериите.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Въведената дата е грешна, очакваният формат е <kbd>ГГГГ-ММ-ДД</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Тази секция Ви позволява да изтриете всяка тема, в която не е публикувано или не е била посещавана от определеното от Вас време. Ако не въведете никакви стойности, тогава всички теми ще бъдат изтрити. По подразбиране, няма да бъдат изтривани теми с активни анкети, закачени теми или глобални съобщения.',

	'FORUM_PRUNE'		=> 'Зачистване на форум',

	'NO_PRUNE'			=> 'Няма зачистени форуми.',

	'SELECTED_FORUM'	=> 'Избран форум',
	'SELECTED_FORUMS'	=> 'Избрани форуми',

	'POSTS_PRUNED'					=> 'Posts pruned',
	'PRUNE_ANNOUNCEMENTS'			=> 'Изтрий глобалните съобщения',
	'PRUNE_FINISHED_POLLS'			=> 'Изтрий завършените анкети',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Изтрива теми с анкети, които са завършили.',
	'PRUNE_FORUM_CONFIRM'			=> 'Сигурни ли сте, че искате да зачистите избраните форуми според критериите, които сте задали? Веднъж изтрити, изчистените теми и мнения не могат да бъдат възстановени.',
	'PRUNE_NOT_POSTED'				=> 'Брой дни, откакто не е публикувано',
	'PRUNE_NOT_VIEWED'				=> 'Брой дни, откакто не е посещаван',
	'PRUNE_OLD_POLLS'				=> 'Изтрий старите анкети',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Изтрива теми, в които не е гласувано от броя дни, посочен по-горе.',
	'PRUNE_STICKY'					=> 'Изтриване на закачени теми',
	'PRUNE_SUCCESS'					=> 'Зачистването на форумите беше успешно.',

	'TOPICS_PRUNED'		=> 'Изтрити теми',
));
