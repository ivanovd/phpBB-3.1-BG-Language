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
	'CAPTCHA_QA'				=> 'В&amp;О',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Целта на този въпрос е да предотврати автоматичните регистрации на ботове.',
	'CONFIRM_QUESTION_WRONG'	=> 'Отговорихте неправилно на въпроса.',

	'QUESTION_ANSWERS'			=> 'Отговори',
	'ANSWERS_EXPLAIN'			=> 'Моля, въведете правилните отговори на въпроса. Един отговор на ред.',
	'CONFIRM_QUESTION'			=> 'Въпрос',

	'ANSWER'					=> 'Отговор',
	'EDIT_QUESTION'				=> 'Промени въпроса',
	'QUESTIONS'					=> 'Въпроси',
	'QUESTIONS_EXPLAIN'			=> 'За всяка форма, където сте разрешили добавката за В&amp;О, потребителите ще трябва да отговорят на един от въпросите дефинирани тук. За да използвате тази добавка, поне един въпрос трябва да бъде дефиниран за езика по подразбиране. Въпросите трябва да имат лесен отговор за Вашата аудитория, но труден за намиране от ботовете с търсене в Google. Използването на голям набор от въпроси, които се сменят често ще постигнете най-добри резултати. Разрешете стриктния режим, ако отговорът на въпроса изисква използването на малки/големи букви, пунктуация или разстояния.',
	'QUESTION_DELETED'			=> 'Въпросът е изтрит',
	'QUESTION_LANG'				=> 'Език',
	'QUESTION_LANG_EXPLAIN'		=> 'Езикът, на който е написан въпросът и отговорът.',
	'QUESTION_STRICT'			=> 'Стриктен режим',
	'QUESTION_STRICT_EXPLAIN'	=> 'Разрешете, за да пуснете проверка за малки/големи букви, пунктуация и разстояния.',

	'QUESTION_TEXT'				=> 'Въпрос',
	'QUESTION_TEXT_EXPLAIN'		=> 'Въпросът, който ще бъде зададен на потребителя.',

	'QA_ERROR_MSG'				=> 'Моля, въведете всички полета и поне един отговор.',
	'QA_LAST_QUESTION'			=> 'Не можете да изтриете всички въпроси, докато добавката е активна.',

));
