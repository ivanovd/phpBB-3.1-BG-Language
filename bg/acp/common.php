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
	'LOG_CONFIG_POST'			=> '<strong>Промени настройите на писането</strong>',
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

	'LOG_GROUP_CREATED'		=> '<strong>New usergroup created</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Group “%1$s” made default for members</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Usergroup deleted</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Leaders demoted in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Members promoted to leader in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Members removed from usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Usergroup details updated</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Added new leaders to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Added new members to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Users approved in usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Users requested to join group “%1$s” and need to be approved</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Error while creating image</strong><br />» Error in %1$s on line %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activated inactive users</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Deleted inactive users</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sent reminder emails to inactive users</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Converted from %1$s to phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installed phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR check failed</strong><br />»User IP “<em>%1$s</em>” checked against session IP “<em>%2$s</em>”, user browser string “<em>%3$s</em>” checked against session browser string “<em>%4$s</em>” and user X_FORWARDED_FOR string “<em>%5$s</em>” checked against session X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber account changed</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber password changed</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber account registered</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber settings changed</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Deleted language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installed language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Updated language pack details</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Replaced language file</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Submitted language file and placed in store folder</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sent mass email</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Changed poster in topic “%1$s”</strong><br />» from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Module disabled</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Module enabled</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module moved down</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module moved up</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Module removed</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Module added</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Module edited</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Admin role added</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Admin role edited</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Admin role removed</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forum role added</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forum role edited</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forum role removed</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderator role added</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderator role edited</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderator role removed</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>User role added</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>User role edited</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>User role removed</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Unable to open %1$s for tidying, check permissions.</strong><br />Exception: %2$s<br />Trace: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profile field activated</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profile field added</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profile field deactivated</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profile field changed</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profile field removed</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Pruned forums</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-pruned forums</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Auto-pruned shadow topics</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Users deactivated</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Users pruned and posts deleted</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Users pruned and posts retained</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Purged cache</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Purged sessions</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Added new rank</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Removed rank</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Updated rank</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Added report/denial reason</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Removed report/denial reason</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Updated report/denial reason</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Referrer validation failed</strong><br />»Referrer was “<em>%1$s</em>”. The request was rejected and the session killed.',
	'LOG_RESET_DATE'			=> '<strong>Board start date reset</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Most users online reset</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>File statistics resynchronised</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>User post counts resynchronised</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Dotted topics resynchronised</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Post, topic and user statistics resynchronised</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Created search index for</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Removed search index for</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx Error</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Added new style</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Deleted style</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Edited style</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exported style</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Added new template set to database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Add new template set on filesystem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Deleted cached versions of template files in template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Deleted template set</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Edited template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Edited template details</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exported template set</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Refreshed template set</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Added new theme to database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Add new theme on filesystem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Theme deleted</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Edited theme details</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Edited theme <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Edited theme <em>%1$s</em></strong><br />» Modified file <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exported theme</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Refreshed theme</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Updated Database from version %1$s to version %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Updated phpBB from version %1$s to version %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>User activated</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Banned User via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Banned IP via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Banned email via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Deleted user</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Removed all attachments made by the user</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Removed user avatar</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Emptied user outbox</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Removed all posts made by the user</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Removed user signature</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>User deactivated</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Moved user posts</strong><br />» posts by “%1$s” to forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Changed user password</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forced user account reactivation</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Removed newly registered flag from user</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>User “%1$s” changed email</strong><br />» from “%2$s” to “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Changed username</strong><br />» from “%1$s” to “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Updated user details</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>User account activated</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>User avatar removed</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>User signature removed</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Added user feedback</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Entry added:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>User account de-activated</strong>',
	'LOG_USER_LOCK'				=> '<strong>User locked own topic</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Moved all posts to forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Forced user account reactivation</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>User unlocked own topic</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Added user warning</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Следното предупреждение е било издадено на потребителя</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>User changed default group</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>User demoted as leaders from usergroup</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>User joined group</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>User joined group and needs to be approved</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>User resigned membership from group</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Deleted user warning</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Deleted user warning</strong><br />» %1$s',
		2 => '<strong>Deleted %2$d user warnings</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Deleted all user warnings</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Added word censor</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Deleted word censor</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Edited word censor</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Extension enabled</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Extension disabled</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Extension’s data deleted</strong><br />» %s',
));
