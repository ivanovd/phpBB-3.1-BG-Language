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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'От тук можете да пращате емейл на всички потребители или на определена група от потребители <strong>стига тази група да е разрешила получаването на масови емейли</strong>. Изпратеният емейл ще е адресиран до административния адрес, който е посочен в настройките, а всички други потребители ще са в скрито копие. Настройката по подразбиране е емейлът да се изпраща само до 20 получателя, а при повече получатели ще се изпратят повече емейли. Ако изпращате съобщение до голяма група, моля бъдете търпеливи и не спирайте процеса по средата. Нормално е изпращането на масов емейл да отнема дълго време, ще бъдете уведомени, когато скриптът приключи изпращането.',
	'ALL_USERS'						=> 'Всички потребители',

	'COMPOSE'				=> 'Състави',

	'EMAIL_SEND_ERROR'		=> 'Имаше една или повече грешки при изпращането на емейла. Моля проверете %sЛога с грешки%s за подробно описание на грешките.',
	'EMAIL_SENT'			=> 'Съобщението беше изпратено.',
	'EMAIL_SENT_QUEUE'		=> 'Съобщението беше добавено в опашката за изпращане.',

	'LOG_SESSION'			=> 'Записвай мейл сесиите в лога',

	'SEND_IMMEDIATELY'		=> 'Изпрати веднага',
	'SEND_TO_GROUP'			=> 'Изпрати до група',
	'SEND_TO_USERS'			=> 'Изпрати до потребители',
	'SEND_TO_USERS_EXPLAIN'	=> 'Добавянето на имена тук, ще отмени избраната група и ще изпрати емейла само до изброените потребители. Всяко потребителско име трябва да е на нов ред.',

	'MAIL_BANNED'			=> 'Изпрати и до изгонените потребители',
	'MAIL_BANNED_EXPLAIN'	=> 'Когато изпращате масов емейл до група можете да избирате дали изгонените потребители да го получат или не.',
	'MAIL_HIGH_PRIORITY'	=> 'Висок',
	'MAIL_LOW_PRIORITY'		=> 'Нисък',
	'MAIL_NORMAL_PRIORITY'	=> 'Нормален',
	'MAIL_PRIORITY'			=> 'Приоритет',
	'MASS_MESSAGE'			=> 'Вашето съобщение',
	'MASS_MESSAGE_EXPLAIN'	=> 'Обърнете внимание, че можете да въвеждате само чист текст. Всяко форматиране ще бъде премахнато преди изпращане.',

	'NO_EMAIL_MESSAGE'		=> 'Трябва да въведете съобщение.',
	'NO_EMAIL_SUBJECT'		=> 'Трябва да въведете заглавие на съобщението.',
));
