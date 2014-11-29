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
	'ACTION'				=> 'Действие',
	'ACTION_NOTE'			=> 'Действие/Бележка',
	'ADD_FEEDBACK'			=> 'Добави обратна връзка',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ако искате да добавите доклад, моля попълнете следната форма. Използвайте само чист текст; HTML, BBCode и т.н. не са разрешени.',
	'ADD_WARNING'			=> 'Добави предупреждение',
	'ADD_WARNING_EXPLAIN'	=> 'За да изпратите предупреждение на потребителя, моля попълнете следната форма. Използвайте само чист текст; HTML, BBCode и т.н. не са разрешени.',
	'ALL_ENTRIES'			=> 'Всички записи',
	'ALL_NOTES_DELETED'		=> 'Успешно са премахнати всички потребителски бележки.',
	'ALL_REPORTS'			=> 'Всички доклади',
	'ALREADY_REPORTED'		=> 'Това мнение вече е било докладвано.',
	'ALREADY_REPORTED_PM'	=> 'Това лично съобщение вече е било докладвано.',
	'ALREADY_WARNED'		=> 'Вече има сложено предупреждение на това мнение.',
	'APPROVE'				=> 'Одобри',
	'APPROVE_POST'			=> 'Одобри мнението',
	'APPROVE_POST_CONFIRM'	=> 'Сигурни ли сте, че искате да одобрите мнението?',
	'APPROVE_POSTS'			=> 'Одобри мненията',
	'APPROVE_POSTS_CONFIRM'	=> 'Сигурни ли сте, че искате да одобрите избраните мнения?',
	'APPROVE_TOPIC'			=> 'Одобри темата',
	'APPROVE_TOPIC_CONFIRM'	=> 'Сигурни ли сте, че искате да одобрите темата?',
	'APPROVE_TOPICS'		=> 'Одобри темите',
	'APPROVE_TOPICS_CONFIRM'=> 'Сигурни ли сте, че искате да одобрите избраните теми?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Не можете да преместите тема във форум, в който тя вече е.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Не можете да сложите предупреждение на нерегистриран потребител.',
	'CANNOT_WARN_SELF'		=> 'Не можете да предупредите себе си.',
	'CAN_LEAVE_BLANK'		=> 'Това не може да бъде оставено празно.',
	'CHANGE_POSTER'			=> 'Смени автора на мнението',
	'CLOSE_PM_REPORT'		=> 'Затвори ЛС доклада',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Сигурни ли сте, че искате да затворите избрания ЛС доклад?',
	'CLOSE_PM_REPORTS'		=> 'Затоври ЛС докладите',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Сигурни ли сте, че искате да затворите избраните ЛС доклади?',
	'CLOSE_REPORT'			=> 'Затоври доклада',
	'CLOSE_REPORT_CONFIRM'	=> 'Сигурни ли сте, че искате да затворите избрания доклад?',
	'CLOSE_REPORTS'			=> 'Затвори докладите',
	'CLOSE_REPORTS_CONFIRM'	=> 'Сигурни ли сте, че искате да затворите избраните докалди?',

	'DELETE_PM_REPORT'			=> 'Изтрийте ЛС доклада',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Сигурни ли сте, че искате да изтриете избрания ЛС доклад?',
	'DELETE_PM_REPORTS'			=> 'Изтрийте ЛС докладите',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Сигурни ли сте, че искате да изтриете избраните ЛС доклади?',
	'DELETE_POSTS'				=> 'Изтрийте мненията',
	'DELETE_REPORT'				=> 'Изтрийте доклада',
	'DELETE_REPORT_CONFIRM'		=> 'Сигурни ли сте, че искате да изтриете избрания доклад?',
	'DELETE_REPORTS'			=> 'Изтрийте докладите',
	'DELETE_REPORTS_CONFIRM'	=> 'Сигурни ли сте, че искате да изтриете избраните доклади?',
	'DELETE_SHADOW_TOPIC'		=> 'Изтрийте темата в сянка',
	'DELETE_TOPICS'				=> 'Изтрийте избраните теми',
	'DISAPPROVE'				=> 'Не одбрявай',
	'DISAPPROVE_REASON'			=> 'Причина за неодобрение',
	'DISAPPROVE_POST'			=> 'Не одобрявай мнението',
	'DISAPPROVE_POST_CONFIRM'	=> 'Сигурни ли сте, че не искате да одобрите мнението?',
	'DISAPPROVE_POSTS'			=> 'Не одобрявай мненията',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Сигурни ли сте, че не искате да одобрите мненията?',
	'DISPLAY_LOG'				=> 'Покажи предишните записи',
	'DISPLAY_OPTIONS'			=> 'Настройки на показване',

	'EMPTY_REPORT'					=> 'Трябва да въведете описание, когато избирате тази причина.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Една или няколко теми бяха изтрити от базата данни защото са били или са станали празни.',

	'FEEDBACK'				=> 'Обратна връзка',
	'FORK'					=> 'Копирай',
	'FORK_TOPIC'			=> 'Копирай темата',
	'FORK_TOPIC_CONFIRM'	=> 'Сигурни ли сте, че искате да копирате избраната тема?',
	'FORK_TOPICS'			=> 'Копирай избраните теми',
	'FORK_TOPICS_CONFIRM'	=> 'Сигурни ли сте, че искате да копирате избраните теми??',
	'FORUM_DESC'			=> 'Описание',
	'FORUM_NAME'			=> 'Име на форума',
	'FORUM_NOT_EXIST'		=> 'Форумът, който избрахте не съществува.',
	'FORUM_NOT_POSTABLE'	=> 'Не можете да публикувате във форума, който избрахте.',
	'FORUM_STATUS'			=> 'Статус на форума',
	'FORUM_STYLE'			=> 'Стил на форума',

	'GLOBAL_ANNOUNCEMENT'	=> 'Глобално съобщение',

	'IP_INFO'				=> 'Информация за IP адреса',
	'IPS_POSTED_FROM'		=> 'IP адрес, от който е публикувал потребителя',

	'LATEST_LOGS'				=> 'Последни 5 действия',
	'LATEST_REPORTED'			=> 'Последни 5 доклада',
	'LATEST_REPORTED_PMS'		=> 'Последни 5 докладвани ЛС',
	'LATEST_UNAPPROVED'			=> 'Последни 5 мнения, изчакващи одобрение',
	'LATEST_WARNING_TIME'		=> 'Последно дадено предупреждение',
	'LATEST_WARNINGS'			=> 'Последни 5 предупреждения',
	'LEAVE_SHADOW'				=> 'Остави темите в сянка на място',
	'LIST_REPORTS'				=> array(
		1	=> '%d доклад',
		2	=> '%d доклади',
	),
	'LOCK'						=> 'Заключи',
	'LOCK_POST_POST'			=> 'Заключи мнението',
	'LOCK_POST_POST_CONFIRM'	=> 'Сигурни ли сте, че искате да забраните промяната на това мнение?',
	'LOCK_POST_POSTS'			=> 'Заключи избраните мнения',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Сигурни ли сте, че искате да забраните промяната на избраните мнения?',
	'LOCK_TOPIC_CONFIRM'		=> 'Сигурни ли сте, че искате да заключите тази тема?',
	'LOCK_TOPICS'				=> 'Заключи избраните теми',
	'LOCK_TOPICS_CONFIRM'		=> 'Сигурни ли сте, че искате да заключите избраните теми?',
	'LOGS_CURRENT_TOPIC'		=> 'Преглеждане логовете на:',
	'LOGIN_EXPLAIN_MCP'			=> 'За да модерирате този форум трябва да сте влезли в профила са.',
	'LOGVIEW_VIEWTOPIC'			=> 'Виж темата',
	'LOGVIEW_VIEWLOGS'			=> 'Виж логовете на темата',
	'LOGVIEW_VIEWFORUM'			=> 'Виж форума',
	'LOOKUP_ALL'				=> 'Провери всички IP адреси',
	'LOOKUP_IP'					=> 'Провери IP адреса',

	'MARKED_NOTES_DELETED'		=> 'Успешно изтрихте всички избрани потребителски бележки.',

	'MCP_ADD'						=> 'Добави предупреждение',

	'MCP_BAN'					=> 'Изгонвания',
	'MCP_BAN_EMAILS'			=> 'Изгонване по емейл адрес',
	'MCP_BAN_IPS'				=> 'Изгонване по IP адрес',
	'MCP_BAN_USERNAMES'			=> 'Изгонване по потребителско име',

	'MCP_LOGS'						=> 'Модераторски логове',
	'MCP_LOGS_FRONT'				=> 'Начална страница',
	'MCP_LOGS_FORUM_VIEW'			=> 'Логове по форуми',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Логове по теми',

	'MCP_MAIN'						=> 'Начало',
	'MCP_MAIN_FORUM_VIEW'			=> 'Виж форума',
	'MCP_MAIN_FRONT'				=> 'Начална страница',
	'MCP_MAIN_POST_DETAILS'			=> 'Детайли на мнението',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Виж темата',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Промени на “Съобщение”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Сигурни ли сте, че искате да смените типа на темата на “Съобщение”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Промени на “Съобщения”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Сигурни ли сте, че искате да смените типа на избраните теми на “Съобщения”?',
	'MCP_MAKE_GLOBAL'				=> 'Промени на “Глобално съобщение”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на темата на “Глобално съобщение”?',
	'MCP_MAKE_GLOBALS'				=> 'Промени на “Глобални съобщения”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на избраните теми на “Глобални съобщения”?',
	'MCP_MAKE_STICKY'				=> 'Промени на “Закачена”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на темата на “Закачена”?',
	'MCP_MAKE_STICKIES'				=> 'Промени на “Закачени”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на избраните теми на “Закачени”?',
	'MCP_MAKE_NORMAL'				=> 'Промени на “Стандартна тема”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на темата на “Стандартна тема”?',
	'MCP_MAKE_NORMALS'				=> 'Промени на “Стандартни теми”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на избраните теми на “Стандартни теми”?',

	'MCP_NOTES'						=> 'Потребителски бележки',
	'MCP_NOTES_FRONT'				=> 'Начална страница',
	'MCP_NOTES_USER'				=> 'Детайли за потребителя',

	'MCP_POST_REPORTS'				=> 'Доклади за това мнение',

	'MCP_PM_REPORTS'				=> 'Докладвани ЛС',
	'MCP_PM_REPORT_DETAILS'			=> 'Детайли за ЛС доклада',
	'MCP_PM_REPORTS_CLOSED'			=> 'Затворени ЛС доклади',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Това е списък на всички затворени доклади за ЛС.',
	'MCP_PM_REPORTS_OPEN'			=> 'Отворени ЛС доклади',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Това е списък на всички отворени доклади за ЛС, които трябва да се обработят.',

	'MCP_REPORTS'					=> 'Докладвани мнения',
	'MCP_REPORT_DETAILS'			=> 'Детайли за доклада',
	'MCP_REPORTS_CLOSED'			=> 'Затворени доклади',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Това е списък на всички затворени доклади за мнения.',
	'MCP_REPORTS_OPEN'				=> 'Отворени доклади',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Това е списък на всички отворени доклади за мнения, които трябва да се обработят.',

	'MCP_QUEUE'								=> 'Модераторска опашка',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Детайли на одобрението',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Мнения чакащи одобрение',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Това е списък на всички мнения, които трябва да се одобрят преди да бъдат видими за другите потребители.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Теми чакащи одобрение',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Това е списък на всички теми, които трябва да се одобрят преди да бъдат видими за другите потребители.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Изтрити мнения',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Това е списък на всички "меко" изтрити мнения. Можете да възстановите или да изтриете завинаги мненията от този списък.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'Изтрити теми',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Това е списък на всички "меко" изтрити теми. Можете да възстановите или да изтриете завинаги темите от този списък.',

	'MCP_VIEW_USER'			=> 'Виж предупрежденията на даден потребител',

	'MCP_WARN'				=> 'Предупреждения',
	'MCP_WARN_FRONT'		=> 'Начална страница',
	'MCP_WARN_LIST'			=> 'Списък с предупрежденията',
	'MCP_WARN_POST'			=> 'Предупреди за определено мнение',
	'MCP_WARN_USER'			=> 'Предупреди потребителя',

	'MERGE_POSTS_CONFIRM'	=> 'Сигурни ли сте, че искате да преместите избраните мнения?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Използвайки формата по-долу можете да преместите избрани мнения в друга тема. Мненията ще бъдат отделени от тази тема и преместени в другата. Мненията няма да бъдат пренаредени и ще изглежда, че потребителите са ги публикували в новата тема.<br />Моля, въведете ID-то на новата тема или натиснете “Избери тема” за да намерите темата, в която искате да преместите мненията.',
	'MERGE_TOPIC_ID'		=> 'ID на новата тема',
	'MERGE_TOPICS'			=> 'Съединете темите',
	'MERGE_TOPICS_CONFIRM'	=> 'Сигурни ли сте, че искате да съедините избраните теми?',
	'MODERATE_FORUM'		=> 'Модерирай форума',
	'MODERATE_TOPIC'		=> 'Модерирай темата',
	'MODERATE_POST'			=> 'Модерирай мнението',
	'MOD_OPTIONS'			=> 'Модераторски настройки',
	'MORE_INFO'				=> 'Повече информация',
	'MOST_WARNINGS'			=> 'Потребители с най-много предупреждения',
	'MOVE_TOPIC_CONFIRM'	=> 'Сигурни ли сте, че искате да преместите темата в нов форум?',
	'MOVE_TOPICS'			=> 'Премести избраните теми',
	'MOVE_TOPICS_CONFIRM'	=> 'Сигурни ли сте, че искате да преместите избраните теми в нов форум?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Да бъде ли уведомен автора за одобрението?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Да бъде ли уведомен автора за неодобрението?',
	'NOTIFY_USER_WARN'				=> 'Да бъде ли уведомен потребителя за предупреждението?',
	'NOT_MODERATOR'					=> 'Вие не сте модератор на този форум.',
	'NO_DESTINATION_FORUM'			=> 'Моля, изберете нов форум за крайна цел.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Не е намерен такъв форум за крайна цел.',
	'NO_ENTRIES'					=> 'Няма записи в лога за този период.',
	'NO_FEEDBACK'					=> 'Няма обратна връзка за този потребител.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Трябва да изберете нова тема, в която ще бъдат преместени мненията.',
	'NO_MATCHES_FOUND'				=> 'Няма намерени съвпадения.',
	'NO_POST'						=> 'Трябва да изберете мнение, заради което ще сложите предупреждение на потребителя.',
	'NO_POST_REPORT'				=> 'Мнението не е било докладвано.',
	'NO_POST_SELECTED'				=> 'Трябва да изберете поне едно мнение за да изпълните това действие.',
	'NO_POSTS_DELETED'				=> 'Няма изтрити мнения.',
	'NO_POSTS_QUEUE'				=> 'Няма мнения, изчакващи одобрение.',
	'NO_REASON_DISAPPROVAL'			=> 'Моля, напишете причина за неодобрението.',
	'NO_REPORT'						=> 'Няма намерен доклад',
	'NO_REPORTS'					=> 'Няма намерени доклади',
	'NO_REPORT_SELECTED'			=> 'Трябва да изберете поне един доклад за да изпълните това действие.',
	'NO_TOPIC_ICON'					=> 'Без',
	'NO_TOPIC_SELECTED'				=> 'Трябва да изберете поне една тема за да изпълните това действие.',
	'NO_TOPICS_DELETED'				=> 'Няма изтрити теми.',
	'NO_TOPICS_QUEUE'				=> 'Няма теми, изчакващи одобрение.',

	'ONLY_TOPIC'			=> 'Само тема “%s”',
	'OTHER_USERS'			=> 'Други потребители, пишещи от това IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s not allowed as quickmod",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'The selected PM report has been closed successfully.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'The selected PM report has been deleted successfully.',
	'PM_REPORTED_SUCCESS'		=> 'This private message has been successfully reported.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'The selected PM reports have been closed successfully.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'The selected PM reports have been deleted successfully.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'There are no PM reports to review.',
		1	=> 'In total there is <strong>1</strong> PM report to review.',
		2	=> 'In total there are <strong>%d</strong> PM reports to review.',
	),
	'PM_REPORT_DETAILS'			=> 'Private message report details',
	'POSTER'					=> 'Poster',
	'POSTS_APPROVED_SUCCESS'	=> 'The selected posts have been approved.',
	'POSTS_DELETED_SUCCESS'		=> 'The selected posts have been successfully removed from the database.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'The selected posts have been disapproved.',
	'POSTS_LOCKED_SUCCESS'		=> 'The selected posts have been locked successfully.',
	'POSTS_MERGED_SUCCESS'		=> 'The selected posts have been merged.',
	'POSTS_PER_PAGE'			=> 'Posts per page',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Set to 0 to view all posts.)',
	'POSTS_RESTORED_SUCCESS'	=> 'The selected posts have been restored successfully.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'The selected posts have been unlocked successfully.',
	'POST_APPROVED_SUCCESS'		=> 'The selected post has been approved.',
	'POST_DELETED_SUCCESS'		=> 'The selected post has been successfully removed from the database.',
	'POST_DISAPPROVED_SUCCESS'	=> 'The selected post has been disapproved.',
	'POST_LOCKED_SUCCESS'		=> 'Post locked successfully.',
	'POST_NOT_EXIST'			=> 'The post you requested does not exist.',
	'POST_REPORTED_SUCCESS'		=> 'This post has been successfully reported.',
	'POST_RESTORED_SUCCESS'		=> 'This post has been restored successfully.',
	'POST_UNLOCKED_SUCCESS'		=> 'Post unlocked successfully.',

	'READ_USERNOTES'			=> 'User notes',
	'READ_WARNINGS'				=> 'User warnings',
	'REPORTER'					=> 'Reporter',
	'REPORTED'					=> 'Reported',
	'REPORTED_BY'				=> 'Reported by',
	'REPORTED_ON_DATE'			=> 'on',
	'REPORTS_CLOSED_SUCCESS'	=> 'The selected reports have been closed successfully.',
	'REPORTS_DELETED_SUCCESS'	=> 'The selected reports have been deleted successfully.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'There are no reports to review.',
		1	=> 'In total there is <strong>1</strong> report to review.',
		2	=> 'In total there are <strong>%d</strong> reports to review.',
	),
	'REPORT_CLOSED'				=> 'This report has already been closed.',
	'REPORT_CLOSED_SUCCESS'		=> 'The selected report has been closed successfully.',
	'REPORT_DELETED_SUCCESS'	=> 'The selected report has been deleted successfully.',
	'REPORT_DETAILS'			=> 'Report details',
	'REPORT_MESSAGE'			=> 'Report this message',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Use this form to report the selected private message. Reporting should generally be used only if the message breaks forum rules. <strong>Reporting a private message will make its contents visible to all moderators.</strong>',
	'REPORT_NOTIFY'				=> 'Notify me',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informs you when your report is dealt with.',
	'REPORT_POST_EXPLAIN'		=> 'Use this form to report the selected post to the forum moderators and board administrators. Reporting should generally be used only if the post breaks forum rules.',
	'REPORT_REASON'				=> 'Report reason',
	'REPORT_TIME'				=> 'Report time',
	'RESTORE'					=> 'Restore',
	'RESTORE_POST'				=> 'Restore post',
	'RESTORE_POST_CONFIRM'		=> 'Are you sure you want to restore this post?',
	'RESTORE_POSTS'				=> 'Restore posts',
	'RESTORE_POSTS_CONFIRM'		=> 'Are you sure you want to restore the selected posts?',
	'RESTORE_TOPIC'				=> 'Restore topic',
	'RESTORE_TOPIC_CONFIRM'		=> 'Are you sure you want to restore this topic?',
	'RESTORE_TOPICS'			=> 'Restore topics',
	'RESTORE_TOPICS_CONFIRM'	=> 'Are you sure you want to restore the selected topics?',
	'RESYNC'					=> 'Resync',
	'RETURN_MESSAGE'			=> '%sReturn to the message%s',
	'RETURN_NEW_FORUM'			=> '%sGo to the new forum%s',
	'RETURN_NEW_TOPIC'			=> '%sGo to the new topic%s',
	'RETURN_PM'					=> '%sReturn to the private message%s',
	'RETURN_POST'				=> '%sReturn to the post%s',
	'RETURN_QUEUE'				=> '%sReturn to the queue%s',
	'RETURN_REPORTS'			=> '%sReturn to the reports%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sReturn to the topic%s',

	'SEARCH_POSTS_BY_USER'				=> 'Search posts by',
	'SELECT_ACTION'						=> 'Select desired action',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Please select the forum you wish this global announcement to be displayed.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'One or more of the selected topics are global announcements. Please select the forum you wish these to be displayed.',
	'SELECT_MERGE'						=> 'Select for merge',
	'SELECT_TOPICS_FROM'				=> 'Select topics from',
	'SELECT_TOPIC'						=> 'Select topic',
	'SELECT_USER'						=> 'Select user',
	'SORT_ACTION'						=> 'Log action',
	'SORT_DATE'							=> 'Date',
	'SORT_IP'							=> 'IP address',
	'SORT_WARNINGS'						=> 'Warnings',
	'SPLIT_AFTER'						=> 'Split topic from selected post onwards',
	'SPLIT_FORUM'						=> 'Forum for new topic',
	'SPLIT_POSTS'						=> 'Split selected posts',
	'SPLIT_SUBJECT'						=> 'New topic title',
	'SPLIT_TOPIC_ALL'					=> 'Split topic from selected posts',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Are you sure you want to split this topic?',
	'SPLIT_TOPIC_BEYOND'				=> 'Split topic at selected post',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Are you sure you want to split this topic at the selected post?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Using the form below you can split a topic in two, either by selecting the posts individually or by splitting at a selected post.',

	'THIS_PM_IP'				=> 'IP for this private message',
	'THIS_POST_IP'				=> 'IP for this post',
	'TOPICS_APPROVED_SUCCESS'	=> 'The selected topics have been approved.',
	'TOPICS_DELETED_SUCCESS'	=> 'The selected topics have been successfully removed from the database.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'The selected topics have been disapproved.',
	'TOPICS_FORKED_SUCCESS'		=> 'The selected topics have been copied successfully.',
	'TOPICS_LOCKED_SUCCESS'		=> 'The selected topics have been locked.',
	'TOPICS_MOVED_SUCCESS'		=> 'The selected topics have been moved successfully.',
	'TOPICS_RESTORED_SUCCESS'	=> 'The selected topics have been restored successfully.',
	'TOPICS_RESYNC_SUCCESS'		=> 'The selected topics have been resynchronised.',
	'TOPICS_TYPE_CHANGED'		=> 'Topic types changed successfully.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'The selected topics have been unlocked.',
	'TOPIC_APPROVED_SUCCESS'	=> 'The selected topic has been approved.',
	'TOPIC_DELETED_SUCCESS'		=> 'The selected topic has been successfully removed from the database.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'The selected topic has been disapproved.',
	'TOPIC_FORKED_SUCCESS'		=> 'The selected topic has been copied successfully.',
	'TOPIC_LOCKED_SUCCESS'		=> 'The selected topic has been locked.',
	'TOPIC_MOVED_SUCCESS'		=> 'The selected topic has been moved successfully.',
	'TOPIC_NOT_EXIST'			=> 'The topic you selected does not exist.',
	'TOPIC_RESTORED_SUCCESS'	=> 'The selected topic has been restored successfully.',
	'TOPIC_RESYNC_SUCCESS'		=> 'The selected topic has been resynchronised.',
	'TOPIC_SPLIT_SUCCESS'		=> 'The selected topic has been split successfully.',
	'TOPIC_TIME'				=> 'Topic time',
	'TOPIC_TYPE_CHANGED'		=> 'Topic type changed successfully.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'The selected topic has been unlocked.',
	'TOTAL_WARNINGS'			=> 'Total Warnings',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'There are no posts waiting for approval.',
		1	=> 'In total there is <strong>1</strong> post waiting for approval.',
		2	=> 'In total there are <strong>%d</strong> posts waiting for approval.',
	),
	'UNLOCK'						=> 'Отключи',
	'UNLOCK_POST'					=> 'Отключи мнението',
	'UNLOCK_POST_EXPLAIN'			=> 'Позволи промяна',
	'UNLOCK_POST_POST'				=> 'Отключи мнението',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Are you sure you want to allow editing this post?',
	'UNLOCK_POST_POSTS'				=> 'Unlock selected posts',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Are you sure you want to allow editing the selected posts?',
	'UNLOCK_TOPIC'					=> 'Unlock topic',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Are you sure you want to unlock this topic?',
	'UNLOCK_TOPICS'					=> 'Unlock selected topics',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Are you sure you want to unlock all selected topics?',
	'USER_CANNOT_POST'				=> 'You cannot post in this forum.',
	'USER_CANNOT_REPORT'			=> 'You cannot report posts in this forum.',
	'USER_FEEDBACK_ADDED'			=> 'User feedback added successfully.',
	'USER_WARNING_ADDED'			=> 'User warned successfully.',

	'VIEW_DETAILS'			=> 'View details',
	'VIEW_PM'				=> 'View private message',
	'VIEW_POST'				=> 'View post',

	'WARNED_USERS'			=> 'Warned users',
	'WARNED_USERS_EXPLAIN'	=> 'This is a list of users with unexpired warnings issued to them.',
	'WARNING_PM_BODY'		=> 'The following is a warning which has been issued to you by an administrator or moderator of this site.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Board warning issued',
	'WARNING_POST_DEFAULT'	=> 'This is a warning regarding the following post made by you: %s .',
	'NO_WARNINGS'	=> 'No warnings exist.',

	'YOU_SELECTED_TOPIC'	=> 'You selected topic number %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Пиратско съдържание',
			'SPAM'		=> 'Спам/Реклама',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Друго',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Докладваното мнение съдържа връзки към нелегален или пиратски софтуер.',
			'SPAM'		=> 'Докладваното мнение рекламира уебсайт или друг друг продукт.',
			'OFF_TOPIC'	=> 'Докладваното мнение няма връзка с темата.',
			'OTHER'		=> 'Докладваното мнение не попада в никоя от другите категории, моля използвайте полето за да опишете нарушението.',
		),
	),
));
