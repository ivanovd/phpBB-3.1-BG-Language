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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Администратори',
	'ACP_ADMIN_LOGS'			=> 'Админ лог',
	'ACP_ADMIN_ROLES'			=> 'Админ роли',
	'ACP_ATTACHMENTS'			=> 'Прикачени файлове',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Настройки на прикачените файлове',
	'ACP_AUTH_SETTINGS'			=> 'Удостоверяване',
	'ACP_AUTOMATION'			=> 'Автоматизация',
	'ACP_AVATAR_SETTINGS'		=> 'Настройки на аватарите',

	'ACP_BACKUP'				=> 'Резервно копие',
	'ACP_BAN'					=> 'Изгонване',
	'ACP_BAN_EMAILS'			=> 'Изгони по емейл',
	'ACP_BAN_IPS'				=> 'Изгони по IP адрес',
	'ACP_BAN_USERNAMES'			=> 'Изгони по потребителско име',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Конфигурация на форума',
	'ACP_BOARD_FEATURES'		=> 'Настройки на функциите',
	'ACP_BOARD_MANAGEMENT'		=> 'Управление на форума',
	'ACP_BOARD_SETTINGS'		=> 'Настройки на форума',
	'ACP_BOTS'					=> 'Паяци/Роботи',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Персонализация',
	'ACP_CAT_DATABASE'			=> 'База данни',
	'ACP_CAT_DOT_MODS'			=> 'Разширения',
	'ACP_CAT_FORUMS'			=> 'Форуми',
	'ACP_CAT_GENERAL'			=> 'Общи',
	'ACP_CAT_MAINTENANCE'		=> 'Поддръжка',
	'ACP_CAT_PERMISSIONS'		=> 'Права',
	'ACP_CAT_POSTING'			=> 'Публикуване',
	'ACP_CAT_STYLES'			=> 'Стилове',
	'ACP_CAT_SYSTEM'			=> 'Система',
	'ACP_CAT_USERGROUP'			=> 'Потребители и Групи',
	'ACP_CAT_USERS'				=> 'Потребители',
	'ACP_CLIENT_COMMUNICATION'	=> 'Комуникация',
	'ACP_COOKIE_SETTINGS'		=> 'Настройки на бисквитките',
	'ACP_CONTACT'				=> 'Страница за контакт',
	'ACP_CONTACT_SETTINGS'		=> 'Настройки на страницата за контакт',
	'ACP_CRITICAL_LOGS'			=> 'Лог с грешки',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Допълнителни профилни полета',

	'ACP_DATABASE'				=> 'Управление на базата данни',
	'ACP_DISALLOW'				=> 'Забрани',
	'ACP_DISALLOW_USERNAMES'	=> 'Забранени потребителски имена',

	'ACP_EMAIL_SETTINGS'		=> 'Емейл настройки',
	'ACP_EXTENSION_GROUPS'		=> 'Управление на групите разширения',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Управление на разширенията',
	'ACP_EXTENSIONS'			=> 'Управление на разширенията',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Права на ниво форум',
	'ACP_FORUM_LOGS'				=> 'Логове на форума',
	'ACP_FORUM_MANAGEMENT'			=> 'Управление на форума',
	'ACP_FORUM_MODERATORS'			=> 'Модератори на форум',
	'ACP_FORUM_PERMISSIONS'			=> 'Права на форум',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Копирай правата на форума',
	'ACP_FORUM_ROLES'				=> 'Роли във форума',

	'ACP_GENERAL_CONFIGURATION'		=> 'Общи настройки',
	'ACP_GENERAL_TASKS'				=> 'Общи задачи',
	'ACP_GLOBAL_MODERATORS'			=> 'Глобални модератори',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Глобални права',
	'ACP_GROUPS'					=> 'Групи',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Форумни права на групите',
	'ACP_GROUPS_MANAGE'				=> 'Управление на групите',
	'ACP_GROUPS_MANAGEMENT'			=> 'Управление на групите',
	'ACP_GROUPS_PERMISSIONS'		=> 'Права на групите',
	'ACP_GROUPS_POSITION'			=> 'Управление позицията на групите',

	'ACP_ICONS'					=> 'Икони на темите',
	'ACP_ICONS_SMILIES'			=> 'Икони на темите/усмивки',
	'ACP_INACTIVE_USERS'		=> 'Неактивни потребители',
	'ACP_INDEX'					=> 'АКП начало',

	'ACP_JABBER_SETTINGS'		=> 'Jabber настройки',

	'ACP_LANGUAGE'				=> 'Управление на езиците',
	'ACP_LANGUAGE_PACKS'		=> 'Езикови пакети',
	'ACP_LOAD_SETTINGS'			=> 'Настройки на натоварването',
	'ACP_LOGGING'				=> 'Водене на логове',

	'ACP_MAIN'					=> 'АКП начало',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Управление на прикачените файлове',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Тук можете да видите списък с прикачените файлове и да изтривате файлове прикачени към мнения и лични съобщения.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Управление на разширенията',
	'ACP_MANAGE_FORUMS'			=> 'Управление на форумите',
	'ACP_MANAGE_RANKS'			=> 'Управление на ранговете',
	'ACP_MANAGE_REASONS'		=> 'Управление на докладите/причините за отхвърляне',
	'ACP_MANAGE_USERS'			=> 'Управление на потребителите',
	'ACP_MASS_EMAIL'			=> 'Масов емейл',
	'ACP_MESSAGES'				=> 'Съобщения',
	'ACP_MESSAGE_SETTINGS'		=> 'Настройки на личните съобщения',
	'ACP_MODULE_MANAGEMENT'		=> 'Управление на модулите',
	'ACP_MOD_LOGS'				=> 'Модераторски лог',
	'ACP_MOD_ROLES'				=> 'Модераторски роли',

	'ACP_NO_ITEMS'				=> 'There are no items yet.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Неизползвани прикачени файлове',

	'ACP_PERMISSIONS'			=> 'Права',
	'ACP_PERMISSION_MASKS'		=> 'Маски на правата',
	'ACP_PERMISSION_ROLES'		=> 'Права на роли',
	'ACP_PERMISSION_TRACE'		=> 'Прослядяване на правата',
	'ACP_PHP_INFO'				=> 'PHP информация',
	'ACP_POST_SETTINGS'			=> 'Настройки на писането',
	'ACP_PRUNE_FORUMS'			=> 'Почистване на форума',
	'ACP_PRUNE_USERS'			=> 'Почистване на потребители',
	'ACP_PRUNING'				=> 'Изчистване',

	'ACP_QUICK_ACCESS'			=> 'Бърз достъп',

	'ACP_RANKS'					=> 'Рангове',
	'ACP_REASONS'				=> 'Причини за доклад/отхвърляне',
	'ACP_REGISTER_SETTINGS'		=> 'Настройки на регистрацията на потребители',

	'ACP_RESTORE'				=> 'Възстановяване',

	'ACP_FEED'					=> 'Управление на хранилката',
	'ACP_FEED_SETTINGS'			=> 'Настройки на хранилката',

	'ACP_SEARCH'				=> 'Конфигурация на търсачката',
	'ACP_SEARCH_INDEX'			=> 'Индекс на търсачката',
	'ACP_SEARCH_SETTINGS'		=> 'Настройки на търсенето',

	'ACP_SECURITY_SETTINGS'		=> 'Настройки на сигурността',
	'ACP_SEND_STATISTICS'		=> 'Изпращане на статистическа информация',
	'ACP_SERVER_CONFIGURATION'	=> 'Конфигурация на сървъра',
	'ACP_SERVER_SETTINGS'		=> 'Настройки на сървъра',
	'ACP_SIGNATURE_SETTINGS'	=> 'Настройки на подписите',
	'ACP_SMILIES'				=> 'Усмивки',
	'ACP_STYLE_MANAGEMENT'		=> 'Управление на стиловете',
	'ACP_STYLES'				=> 'Стилове',
	'ACP_STYLES_CACHE'			=> 'Изчисти кеша',
	'ACP_STYLES_INSTALL'		=> 'Инсталиране на стил',

	'ACP_SUBMIT_CHANGES'		=> 'Запази промените',

	'ACP_TEMPLATES'				=> 'Шаблони',
	'ACP_THEMES'				=> 'Теми',

	'ACP_UPDATE'					=> 'Обновяване',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Права на потребител във форум',
	'ACP_USERS_LOGS'				=> 'Потребителски логове',
	'ACP_USERS_PERMISSIONS'			=> 'Права на потребител',
	'ACP_USER_ATTACH'				=> 'Прикачени файлове',
	'ACP_USER_AVATAR'				=> 'Аватар',
	'ACP_USER_FEEDBACK'				=> 'Обратна връзка',
	'ACP_USER_GROUPS'				=> 'Групи',
	'ACP_USER_MANAGEMENT'			=> 'Управление на потребители',
	'ACP_USER_OVERVIEW'				=> 'Преглед',
	'ACP_USER_PERM'					=> 'Права',
	'ACP_USER_PREFS'				=> 'Настройки',
	'ACP_USER_PROFILE'				=> 'Профил',
	'ACP_USER_RANK'					=> 'Ранг',
	'ACP_USER_ROLES'				=> 'Потребителски роли',
	'ACP_USER_SECURITY'				=> 'Потребителска сигурност',
	'ACP_USER_SIG'					=> 'Подпис',
	'ACP_USER_WARNINGS'				=> 'Предупреждения',

	'ACP_VC_SETTINGS'					=> 'Мерки против спам-ботове',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Преглед на CAPTCHA изображение',
	'ACP_VERSION_CHECK'					=> 'Провери за обновления',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Виж административните права',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Виж правата на модераторите на форуми',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Виж форум-базираните права',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Виж правата на глобалните модератори',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Виж потребител-базираните права',

	'ACP_WORDS'					=> 'Цензуриране на думи',

	'ACTION'				=> 'Действие',
	'ACTIONS'				=> 'Действия',
	'ACTIVATE'				=> 'Активирай',
	'ADD'					=> 'Добави',
	'ADMIN'					=> 'Администриране',
	'ADMIN_INDEX'			=> 'Начало админ панел',
	'ADMIN_PANEL'			=> 'Административен Контролен Панел',

	'ADM_LOGOUT'			=> 'Излез от&nbsp;АКП',
	'ADM_LOGGED_OUT'		=> 'Успешно излязохте от Административния Контролен Панел',

	'BACK'					=> 'Назад',

	'COLOUR_SWATCH'			=> 'Web-безопасна цветна четка',
	'CONFIG_UPDATED'		=> 'Конфигурацията беше обновена успешно.',
	'CRON_LOCK_ERROR'		=> 'Не може да бъде получен cron lock.',
	'CRON_NO_SUCH_TASK'		=> 'Cron задачата “%s” не може да бъде намерена.',
	'CRON_NO_TASK'			=> 'Няма cron задачи, които да трябва да се изпълнят в момента.',
	'CRON_NO_TASKS'			=> 'Няма намерени cron задачи.',

	'DEACTIVATE'				=> 'Деактивирай',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Въведеният път “%s” не съществува.',
	'DIRECTORY_NOT_DIR'			=> 'Въведеният път “%s” не е директория.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Въведеният път “%s” няма права за запис.',
	'DISABLE'					=> 'Забрани',
	'DOWNLOAD'					=> 'Свали',
	'DOWNLOAD_AS'				=> 'Свали като',
	'DOWNLOAD_STORE'			=> 'Свали или запази файла',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Можете директно да свалите файла или да го запазите във Вашата <samp>store/</samp> папка.',
	'DOWNLOADS'					=> 'Сваляния',

	'EDIT'					=> 'Промени',
	'ENABLE'				=> 'Разреши',
	'EXPORT_DOWNLOAD'		=> 'Свали',
	'EXPORT_STORE'			=> 'Запази',

	'GENERAL_OPTIONS'		=> 'Общи опции',
	'GENERAL_SETTINGS'		=> 'Общи настройки',
	'GLOBAL_MASK'			=> 'Глабална маска на правата',

	'INSTALL'				=> 'Инсталиране',
	'IP'					=> 'Потребителски IP адрес',
	'IP_HOSTNAME'			=> 'IP адреси или хостове',

	'LOAD_NOTIFICATIONS'			=> 'Показване на известията',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Показване на списъка с известия на всяка страница (обикновено в хедъра).',
	'LOGGED_IN_AS'			=> 'Влезли сте като:',
	'LOGIN_ADMIN'			=> 'За да администрирате форума трябва да сте влезли в профила си.',
	'LOGIN_ADMIN_CONFIRM'	=> 'За да администрирате форума трябва да влезнете повторно в профила си.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Успешно влезнахте в профила си и ще бъдете пренасочени към Административния Контролен Панел.',
	'LOOK_UP_FORUM'			=> 'Изберете форум',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Можете да избирате повече от един форум.',

	'MANAGE'				=> 'Промени',
	'MENU_TOGGLE'			=> 'Скрий или покажи страничното меню',
	'MORE'					=> 'Повече',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Повече информация »',
	'MOVE_DOWN'				=> 'Премести надолу',
	'MOVE_UP'				=> 'Премести нагоре',

	'NOTIFY'				=> 'Известие',
	'NO_ADMIN'				=> 'Не сте упълномощен да администрирате този форум.',
	'NO_EMAILS_DEFINED'		=> 'Не са намерени валидни емейл адреси.',
	'NO_FILES_TO_DELETE'	=> 'Прикачените файлове, който избрахте за изтриване не съществуват.',
	'NO_PASSWORD_SUPPLIED'	=> 'Трябва да въведете паролата си за да достъпите Административния Контролен Панел.',

	'OFF'					=> 'Изключено',
	'ON'					=> 'Включено',

	'PARSE_BBCODE'						=> 'Парсване на BBCode',
	'PARSE_SMILIES'						=> 'Парсване на усмивки',
	'PARSE_URLS'						=> 'Парсване на връзки',
	'PERMISSIONS_TRANSFERRED'			=> 'Правата са прехвърлени',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'В момента ползвате правата на %1$s. Можете да разглеждате форума с правата на този потребител, но не и да достъпвате административния контролен панел, тъй като админ правата не бяха прехвърлени. Можете да <a href="%2$s"><strong>върнете правата си</strong></a> по всяко време.',
	'PROCEED_TO_ACP'					=> '%sПреминете към АКП%s',

	'REMIND'							=> 'Напомни',
	'RESYNC'							=> 'Синхронизирай',

	'RUNNING_TASK'			=> 'Задача вървяща в момента: %s.',
	'SELECT_ANONYMOUS'		=> 'Избери анонимния потребител',
	'SELECT_OPTION'			=> 'Избери опция',

	'SETTING_TOO_LOW'		=> 'Зададената стойност за “%1$s” е твърде ниска. Минималната приемлива стойност е %2$d.',
	'SETTING_TOO_BIG'		=> 'Зададената стойност за  “%1$s” е твърде висока. Максималната приемлива стойност е %2$d.',
	'SETTING_TOO_LONG'		=> 'Зададената стойност за “%1$s” е твърде дълга. Максималната приемлива дължина е %2$d.',
	'SETTING_TOO_SHORT'		=> 'Зададената стойност за “%1$s” е твърде къса. Минималната приемлива дължина е %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Покажи всички операции',

	'TASKS_NOT_READY'			=> 'Задачи, които не са готови:',
	'TASKS_READY'			=> 'Готови задачи:',
	'TOTAL_SIZE'			=> 'Общ размер',

	'UCP'					=> 'Потребителски панел',
	'USERNAMES_EXPLAIN'		=> 'Въведете всяко потребителско име на отделен ред.',
	'USER_CONTROL_PANEL'	=> 'Потребителски Контролен Панел',

	'WARNING'				=> 'Предупреждение',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'На тази страница можете да видите информация за версията на PHP, която е инсталирана на този сървър. Тя съдържа информация за заредените модули, променливите, които са на разположение и настройките по подразбиране. Тази информация може да е полезна при диагностициране на проблеми. Моля, обърнете внимание, че някои хостинг компании могат да ограничат информацията която се показва тук от съображения за сигурност. Съветваме Ви да не споделяте информация от тази страница освен когато сте помолени от <a href="https://www.phpbb.com/about/team/">официален член на екипа</a> във форума за поддръжка.',

	'NO_PHPINFO_AVAILABLE'	=> 'Неуспешно извличане на информация за Вашата PHP конфигурация. Функцията Phpinfo() е забранена от съображения за сигурност.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Това е списък с всички действия извършени от администраторите на форума. Можете да сортирате по потребителско име, дата, IP адрес или действие. Ако имате подходящите права, можете да изтривате индивидуални записи или целия лог.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Това е списък с всички дейтвия, които форумът сам е извършил. Този лог дава информация, която би била полезна при решаване на специфични проблеми, например, недоставени емейл съобщения. Можете да сортирате по потребителско име, дата, IP адрес или действие. Ако имате подходящите права, можете да изтривате индивидуални записи или целия лог.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Това е списък с всички дествия извършени във форумите, темите, мненията, както и действията на модераторите, включително и изгонванията. Можете да сортирате по потребителско име, дата, IP адрес или действие. Ако имате подходящите права, можете да изтривате индивидуални записи или целия лог.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Това е списък с всички действия извършени от потребителите или върху потребителите (доклади, предупреждения и бележки).',
	'ALL_ENTRIES'				=> 'Всички записи',

	'DISPLAY_LOG'	=> 'Покажи предишните записи',

	'NO_ENTRIES'	=> 'Няма записи в лога за този период.',

	'SORT_IP'		=> 'IP адрес',
	'SORT_DATE'		=> 'Дата',
	'SORT_ACTION'	=> 'Записано действие',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Благодарим Ви, че избрахте phpBB за платформа на Вашия форум. На тази страница можете да намерите информация за различни статистики на форума. Връзките от ляво Ви позволяват да контролирате всеки аспект от функционирането на форума. Всяка отделна страница ще има подробни инструкции за използване на инструментите в нея.',
	'ADMIN_LOG'					=> 'Действия на администраторите',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Това е извадка с последните пет действия на администраторите. Пълният списък с действия може да се види от съответното меню или като последвате връзката по-долу.',
	'AVATAR_DIR_SIZE'			=> 'Размер на директорията с аватари',

	'BOARD_STARTED'		=> 'Начална дата на форума',
	'BOARD_VERSION'		=> 'Версия на форума',

	'DATABASE_SERVER_INFO'	=> 'Сървър на базите данни',
	'DATABASE_SIZE'			=> 'Размер на базата данни',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Функцията overloading е неправилно конфигурирана',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> трябва да е настроена на 0 или 4. Можете да проверите моментната стойност на страницата с <samp>PHP информация</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent character encoding е неправилно конфигурирана',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> трябва да е настроена на 0. Можете да проверите моментната стойност на страницата с <samp>PHP информация</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP input character conversion е неправилно конфигурирана',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> трябва да е настроена на <samp>pass</samp>. Можете да проверите моментната стойност на страницата с <samp>PHP информация</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion е неправилно конфигурирана',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> трябва да е настроена на <samp>pass</samp>. Можете да проверите моментната стойност на страницата с <samp>PHP информация</samp>.',

	'FILES_PER_DAY'		=> 'Прикачени файлове на ден',
	'FORUM_STATS'		=> 'Статистика на форума',

	'GZIP_COMPRESSION'	=> 'GZip компресия',

	'NO_SEARCH_INDEX'	=> 'Избраният метод за търсене няма създаден индекс.<br />Моля, създайте индекс за “%1$s” в секцията %2$sИндекс на търсачката%3$s.',
	'NOT_AVAILABLE'		=> 'Не е наличен',
	'NUMBER_FILES'		=> 'Брой прикачени файлове',
	'NUMBER_POSTS'		=> 'Брой мнения',
	'NUMBER_TOPICS'		=> 'Брой теми',
	'NUMBER_USERS'		=> 'Брой потребители',
	'NUMBER_ORPHAN'		=> 'Неизползвани прикачени файлове',

	'PHP_VERSION_OLD'	=> 'Версията на PHP, инсталирана на този сървър няма да бъде поддържана от бъдещите версии на phpBB. %sПовече информация%s',

	'POSTS_PER_DAY'		=> 'Мнения на ден',

	'PURGE_CACHE'			=> 'Изчистване на кеша',
	'PURGE_CACHE_CONFIRM'	=> 'Сигурни ли сте, че искате да изчистите кеша?',
	'PURGE_CACHE_EXPLAIN'	=> 'Изчиства всички кеширани елементи, включително кешовете на стиловете и заявките.',
	'PURGE_CACHE_SUCCESS'	=> 'Кеша беше успешно почистен.',

	'PURGE_SESSIONS'			=> 'Изчистване на всички сесии',
	'PURGE_SESSIONS_CONFIRM'	=> 'Сигурни ли сте, че искате да изчистите всички сесии? Това ще принуди всички потребители да излезнат от профила си.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Изчистване на всички сесии. Това ще принуди всички потребители да излезнат от профила си като изпразни таблицата със сесиите.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Сесиите бяха успешно почистени.',

	'RESET_DATE'					=> 'Нулирай началната дата на форума',
	'RESET_DATE_CONFIRM'			=> 'Сигурни ли сте, че искате да нулирате началната дата на форума?',
	'RESET_DATE_SUCCESS'				=> 'Началната дата на форума беше нулирана',
	'RESET_ONLINE'					=> 'Нулирай брояча за най-много потребители на линия',
	'RESET_ONLINE_CONFIRM'			=> 'Сигурни ли сте, че искате да нулирате брояча за най-много потребители на линия?',
	'RESET_ONLINE_SUCCESS'				=> 'Брояча за най-много потребители на линия беше нулиран',
	'RESYNC_POSTCOUNTS'				=> 'Синхронизирай броячите на мнения',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Само съществуващите мнения ще бъдат преброени. Изтритите мнения няма да се броят.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Сигурни ли сте, че искате да синхронизирате броя мнения?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Броячът на мнения беше синхронизиран',
	'RESYNC_POST_MARKING'			=> 'Синхронизирай точкуваните теми',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Сигурни ли сте, че искате да синхронизирате точкуваните теми?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Първо всички теми ще бъдат размаркирани и след това ще бъдат маркирани само темите, в които е имало някаква активност през последните шест месеца.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Точкуваните теми бяха синхронизирани',
	'RESYNC_STATS'					=> 'Синхронизация на статистиките',
	'RESYNC_STATS_CONFIRM'			=> 'Сигурни ли сте, че искате да синхронизирате статистиките?',
	'RESYNC_STATS_EXPLAIN'			=> 'Преброяване на общия брой мнения, теми, потребители и файлове.',
	'RESYNC_STATS_SUCCESS'			=> 'Статистиките са синхронизирани',
	'RUN'							=> 'Пусни',

	'STATISTIC'					=> 'Статистика',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Синхронизиране или нулиране на статистиките',

	'TIMEZONE_INVALID'	=> 'Часовата зона, която сте избрали е неправилна.',
	'TIMEZONE_SELECTED'	=> '(избрана в момента)',
	'TOPICS_PER_DAY'	=> 'Теми на ден',

	'UPLOAD_DIR_SIZE'	=> 'Общ размер на прикачените файлове',
	'USERS_PER_DAY'		=> 'Потребители на ден',

	'VALUE'						=> 'Стойност',
	'VERSIONCHECK_FAIL'			=> 'Възникна грешка при проверката за нова версия.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'провери за по-нова версия',
	'VIEW_ADMIN_LOG'			=> 'Виж админ лога',
	'VIEW_INACTIVE_USERS'		=> 'Виж неактивните потребители',

	'WELCOME_PHPBB'			=> 'Добре дошли в phpBB',
	'WRITABLE_CONFIG'		=> 'Вашият конфигурационен файл (config.php) може да бъде променян от всички. Съветваме Ви незабавно да промените правата на 640 или на 644 (например: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Неактивен от',
	'INACTIVE_REASON'				=> 'Причина',
	'INACTIVE_REASON_MANUAL'		=> 'Потребителят е деактивиран от администратор',
	'INACTIVE_REASON_PROFILE'		=> 'Промяна в детайлите на профила',
	'INACTIVE_REASON_REGISTER'		=> 'Новорегистриран профил',
	'INACTIVE_REASON_REMIND'		=> 'Поискана повторна активация',
	'INACTIVE_REASON_UNKNOWN'		=> 'Незнайна',
	'INACTIVE_USERS'				=> 'Неактивни потребители',
	'INACTIVE_USERS_EXPLAIN'		=> 'Това е списък с потребителите, които са се регистрирали, но профилите им не са активирани. Можете да активирате или изтривате тези потребители или да им напомняте (с изпращане на емейл) да активират профилите си.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Това е извадка с последните десет потребителя с неактивни профили. Профилите са неактивни защото активирането на профилите е било включено в настройките за регистрация на потребители и те все още не са ги активирали или защото тези профили са били деактивирани ръчно или автоматично. Пълният списък можете да видите като последвате връзката по-долу, като там можете да активирате или изтривате тези потребители или да им напомняте (с изпращане на емейл) да активират профилите си.',

	'NO_INACTIVE_USERS'	=> 'Няма неактивни потребители',

	'SORT_INACTIVE'		=> 'Неактивен от',
	'SORT_LAST_VISIT'	=> 'Последно посещение',
	'SORT_REASON'		=> 'Причина',
	'SORT_REG_DATE'		=> 'Дата на регистрация',
	'SORT_LAST_REMINDER'=> 'Последно напомняне',
	'SORT_REMINDER'		=> 'Изпратено напомняне',

	'USER_IS_INACTIVE'		=> 'Потребителят е неактивен',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Моля, изпратете информация за Вашия сървър и конфигурацията на форума на phpBB за статистически анализ. Цялата информация, която би могла да идентифицира Вас или вашият сайт е премахната - данните са напълно <strong>анонимни</strong>. Базирайки се на тази информация ние правим решения за бъдещите phpBB версии. Статистиките са публично достъпни. Също така споделяме тази информация с PHP проекта, програмният език, на който е написан phpBB.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'От бутона по-долу можете да видите всички променливи, които ще бъдат изпратени.',
	'DONT_SEND_STATISTICS'		=> 'Върнете се в АКП ако не искате да изпратите статистическа информация на phpBB.',
	'GO_ACP_MAIN'				=> 'Отиди на началната АКП страница',
	'HIDE_STATISTICS'			=> 'Скрий детайлите',
	'SEND_STATISTICS'			=> 'Изпрати статистическа информация',
	'SHOW_STATISTICS'			=> 'Покажи детайлите',
	'THANKS_SEND_STATISTICS'	=> 'Благодарим Ви за изпращането на информацията.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Добави или промени потребителските права на потребител</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Добави или промени потребителските права на група</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Добави или промени глобалните модераторски права на потребител</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Добави или промени глобалните модераторски права на група</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Добави или промени администраторските права на потребител</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Добави или промени администраторските права на група</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Добави или промени Администратор</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Добави или промени Глобален модератор</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Добави или промени достъпа до форум на потребител</strong> от %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Добави или промени модераторския достъп до форум на потребител</strong> от %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Добави или промени достъпа до форум на група</strong> от %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Добави или промени модераторския достъп до форум на група</strong> от %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Добави или промени Модератор</strong> от %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Добави или промени права на форум</strong> от %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Премахна Администратор</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Премахна Глобален модератор</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Премахна Модератор</strong> от %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Премахна форум права на Потребител/Група</strong> от %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Прехвърлени права от</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Връщане на собствените права, след използване правата на</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Неуспешен опит за вход на администратор</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Успешен вход на администратор</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Изтриване на прикачени от потребителя файлове</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Добави или промени разширение на прикачените файлове</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Премахна разширение на прикачените файлове</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Обнови разширение на прикачените файлове</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Добави група разширения</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Промени група разширения</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Премахна група разширения</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Прикачи неизползван прикачен файл към мнение</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Изтри неизползвани прикачени файлове</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Изключи потребител от изгонване</strong>, причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Изключи IP адрес от изгонване</strong>, причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Изключи емейл адрес от изгонване</strong>, причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Изгони потребител</strong>, причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Изгони IP адрес</strong>, причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Изгони емейл адрес</strong>, причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Отмени изгонването на потребител</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Отмени изгонването на IP адрес</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Отмени изгонването на емейл адрес</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Добави нов BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Промени BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Изтри BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Добави нов бот</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Изтри бот</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Промени съществуващ бот</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Изчисти админ лога</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Изчисти лога с грешки</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Изчисти модераторския лог</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Изчисти потребителския лог</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Изчисти потребителските логове</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Промени настройките на прикачените файлове</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Промени настройките за удостоверяване</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Промени настройките на аватарите</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Промени настройките на бисквитките</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Промени емейл настройките</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Промени настройките на функциите</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Промени настройките на натоварването</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Промени настройките на личните съобщения</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Промени настройките на писането</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Промени настройките на регистрацията на потребители</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Промени настройките на хранилката</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Промени настройките на търсенето</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Промени настройките на сигурността</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Промени настройките на сървъра</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Промени настройките на форума</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Промени настройките на подписите</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Промени настройките на мерките против спам-ботове</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Одобри тема</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Потребителят избута тема</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Изтри мнение “%1$s” публикувано от “%2$s” поради следната причина</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Изтри тема в сянка</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Изтри темата “%1$s” публикувана от “%2$s” поради следната причина</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Копира тема</strong><br />» от %s',
	'LOG_LOCK'					=> '<strong>Заключите тема</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Заключи мнение</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Премести мнения</strong> в тема<br />» %s',
	'LOG_MOVE'					=> '<strong>Премести тема</strong><br />» от %1$s в %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Затвори ЛС доклад</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Изтри ЛС доклад</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Одобри мнение</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Не одобри мнение “%1$s” публикувано от “%3$s” поради следната причина</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Промени мнение “%1$s” публикувано от “%2$s” поради следната причина</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Възстанови мнение</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Затвори доклад</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Изтри доклад</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Възстанови тема “%1$s” публикувана от</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Меко изтри мнение “%1$s” публикувано от “%2$s” поради следната причина</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Меко изтри тема “%1$s” публикувана от “%2$s” поради следната причина</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Премести отделени мнения</strong><br />» в %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Отдели мнения</strong><br />» от %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Одобри тема</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Възстанови тема</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Не одобри тема “%1$s” публикувана от “%3$s” поради следната причина</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Синхронизира броячите на теми</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Промени типа на тема</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Отключи тема</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Отключи мнение</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Добави забранено потребителско име</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Премахна забранено потребителско име</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Направи резервно копие на базата данни</strong>',
	'LOG_DB_DELETE'			=> '<strong>Изтри резервно копие на базата данни</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Възстанови базата данни от резервно копие</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Изключи IP адрес/хост от листа за сигурни сваляния</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Добави IP адрес/хост към листа за сигурни сваляния</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Премахна IP адрес/хост от листа за сигурни сваляния</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber грешка</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Емейл грешка</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Създаде нов форум</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Копира правата на форум</strong> от %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Изтри форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Изтри форум и неговите подфоруми</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Изтри форум и премести подфорумите му</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Изтри форум и премести мненията от него</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Изтри форум и подфорумите му и премести мненията от тях</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Изтри форум, премести мненията от него</strong> в %1$s <strong>и подфорумите</strong> в %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Изтри форум и мненията в него</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Изтри форум, мненията в него и подфорумите му</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Изтри форум и мненията в него и премести подфорумите му</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Промени детайлите на форум</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Премести форум</strong> %1$s <strong>под</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Премести форум</strong> %1$s <strong>над</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Синхронизира форум</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Възникна обща грешка</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Създаде нова потребителска група</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Група “%1$s” направена група по подразбиране за потребители</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Изтри потребителска група</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Лидери на потребителска група понижени</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Потребители повишени в лидери на потребителска група</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Потребители премахнати от потребителска група</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Променени детайли на потребителска група</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Добави нови лидери към потребителска група</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Добави нови потребители към потребителска група</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Одобри членство на потребител в потребителска група</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Потребители заявиха желание да се присъединят към потребителска група “%1$s” и това трябва да бъде одобрено</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Грешка при създаване на изображение</strong><br />» Грешка в %1$s на ред %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Активира неактивни потребители</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Изтри неактивни потребители</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Изпрати напомнящи мейли на неактивните потребители</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Конвертира от %1$s към phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Инсталира phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Проверка за IP адрес на сесията/браузър/X_FORWARDER_FOR е неуспешна</strong><br />»IP адрес на потребителя “<em>%1$s</em>” сравнен с IP адреса на сесията “<em>%2$s</em>”, браузър низ “<em>%3$s</em>” сравнен с браузър низ “<em>%4$s</em>” и потребителски X_FORWARDED_FOR низ “<em>%5$s</em>” сравнен с X_FORWARDED_FOR низ на сесията “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Променен Jabber профил</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Променена Jabber парола</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Регистриран Jabber профил</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Променени Jabber настройки</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Изтри езиков пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Инсталира езиков пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Обнови детайлите на езиков пакет</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Замени езиков файл</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Качи езиков файл в store папката</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Изпрати масов емейл</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Промени автора на тема “%1$s”</strong><br />» от %2$s на %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Изключи модул</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Включи модул</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Модул преместен надолу</strong><br />» %1$s под %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Модул преместен нагоре</strong><br />» %1$s над %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Изтри модул</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Добави модул</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Промени модул</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Добави админ роля</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Промени админ роля</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Премахна админ роля</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Добави форум роля</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Промени форум роля</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Премахна форум роля</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Добави модераторска роля</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Промени модераторска роля</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Премахна модераторска роля</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Добави потребителска роля</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Промени потребителска роля</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Премахна потребителска роля</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Файлът %1$s не може да бъде отворен за почистване, проверете правата.</strong><br />Грешка: %2$s<br />Следа: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Активира профилно поле</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Добави профилно поле</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Деактивира профилно поле</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Промени профилно поле</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Премахна профилно поле</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Изчисти форуми</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Автоматично изчистване на форуми</strong><br />» %s',
	'LOG_PRUNE_SHADOW'			=> '<strong>Автоматично изчистване на теми в сянка</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Деактивира потребители</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Изтри потребители и техните мнения</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Изтри потребители и запази техните мнения</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Изчисти кеша</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Изчисти сесиите</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Добави нов ранг</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Премахна ранг</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Промени ранг</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Добави причина за доклад/отхвърляне</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Премахна причина за доклад/отхвърляне</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Промени причина за доклад/отхвърляне</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Неуспешна проверка на референт</strong><br />»Референт “<em>%1$s</em>”. Запитването беше отхвърлено и сесията прекратена.',
	'LOG_RESET_DATE'			=> '<strong>Нулира началната дата на форума</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Нулира брояча за най-много потребители на линия</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Синхронизира файловите статистики</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Синхронизира брояча на мнения</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Синхронизира точкуваните теми</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Синхронизира статистиките</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Създаде индекс на търсачката за</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Премахна индекс на търсачката за</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx грешка</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Добави нов стил</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Премахна стил</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Промени стил</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Експортира стил</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Добави нов шаблон в базата данни</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Добави нов шаблон във файловата система</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Изтри кеширани версии на шаблоните <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Премахна шаблони</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Промени шаблони <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Промени детайли на шаблон</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Експортира шаблони</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Обнови шаблони</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Добави нова тема в базата данни</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Добави нова тема във файловата система</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Изтри тема</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Промени детайлите на тема</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Промени тема <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Промени тема <em>%1$s</em></strong><br />» Модифицира файл <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Експортира тема</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Опресни тема</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Обнови базата данни от версия %1$s до версия %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Обнови phpBB от версия %1$s до версия %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Активира потребител</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Изгони потребител</strong> поради следната причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Изгони IP адрес</strong> поради следната причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Изгони емейл адрес</strong> поради следната причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Изтри потребител</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Изтри всички прикачени файлове на потребител</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Изтри аватара на потребител</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Изтри изходящата кутия на потребител</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Изтри всички мнения на потребител</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Изтри подписа на потребител</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Деактивира потребител</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Премести мненията на потребител</strong><br />» мнения на “%1$s” във форум “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Промяна на потребителска парола</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Изиска реактивация на потребителски профил</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Премахна флага за новорегистриран профил от потребител</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Потребител “%1$s” промени емейла си</strong><br />» от “%2$s” на “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Промени потребителското име</strong><br />» от “%1$s” на “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Промени потребителски детайли</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Активира потребителския си профил</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Изтри аватара си</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>изтри подписа си</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Добави обратна връзка</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Добави нов запис:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Реактивиране на профил</strong>',
	'LOG_USER_LOCK'				=> '<strong>Потребителят заключи собствената си тема</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Премести всички мнения във форум</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Изискана реактивация на потребителски профил</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Потребителят отключи собствената си тема</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Направи предупреждение на потребител</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Следното предупреждение е било издадено на потребителя</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Потребителят промени групата си по подразбиране</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Потребителят е понижен е лидери на потребителската група</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Потребителят се присъедини към потребителска група</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Потребителят се присъедини към потребителска група и трябва да бъде одобрено членството му</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Потребителят напусна потребителска група</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Изтри потребителско предупреждение</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Изтри потребителско предупреждени</strong><br />» %1$s',
		2 => '<strong>Изтри %2$d потребителски предупреждения</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Изтри всички потребителски предупреждения</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Добави цензурирана дума</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Изтри цензурирана дума</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Промени цензурирана дума</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Включи разширение</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Изключи разширение</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Изтри данните на разширение</strong><br />» %s',
));
