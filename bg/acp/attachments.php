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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'От тук можете да променяте основните настройки на прикачените файлове и съответните специални категории.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'От тук можете да добавяте, изтривате, променяте или забранявате групи разширения. Могат да се настройват допълнителни опции като определяне на специална категория, смяна на механизма за сваляне и избиране на икона, която ще се показва до всички файлове от категорията по време на качване.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'От тук можете да управлявате позволените разширения. За да разрешите вашите разширения, моля използвайте панела за управление на групите разширения. Силно Ви препоръчваме да не позволявате скриптови разширения (като <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, и т.н.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Тук можете да видите неизползваните прикачени файлове. Обикновено такива файлове се прикачват към мнение, но потребителят не го публикува или мнение или тема с прикачени файлове е изтрито. Можете да изтриете тези файлове или да ги прикачите към съществуващо мнение. Прикачането към мнение изисква валидно ID на мнението.',
	'ADD_EXTENSION'						=> 'Добави разширение',
	'ADD_EXTENSION_GROUP'				=> 'Добави група разширения',
	'ADMIN_UPLOAD_ERROR'				=> 'Грешки при опит да се прикачи файл: “%s”.',
	'ALLOWED_FORUMS'					=> 'Позволени форуми',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Може да публикува даденото разширение в избраните (или всички, ако е избрано) форуми.',
	'ALLOWED_IN_PM_POST'				=> 'Разрешено',
	'ALLOW_ATTACHMENTS'					=> 'Разреши прикачените файлове',
	'ALLOW_ALL_FORUMS'					=> 'Разреши във всички форуми',
	'ALLOW_IN_PM'						=> 'Разреши в личните съобщения',
	'ALLOW_PM_ATTACHMENTS'				=> 'Разреши прикачените файлове в личните съобщения',
	'ALLOW_SELECTED_FORUMS'				=> 'Само избраните по-долу форуми',
	'ASSIGNED_EXTENSIONS'				=> 'Добавени разширения',
	'ASSIGNED_GROUP'					=> 'Назначена група разширения',
	'ATTACH_EXTENSIONS_URL'				=> 'Разширения',
	'ATTACH_EXT_GROUPS_URL'				=> 'Групи разширения',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Максимален размер на файла',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Максимален размер на всеки файл. Ако стойността е 0, то максималния размер ще се определя само от Вашата PHP конфигурация.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Максимален размер на файла в лично съобщение',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Максимален размер на всеки файл, като 0 означава неограничено, прикачен към лично съобщение.',
	'ATTACH_ORPHAN_URL'					=> 'Неизползвани прикачени файлове',
	'ATTACH_POST_ID'					=> 'ID на мнение',
	'ATTACH_POST_TYPE'					=> 'Тип на мнението',
	'ATTACH_QUOTA'						=> 'Обща квота на прикачените файлове',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Максимално пространство на хард-диска, което е на разположение за прикачени файлове в целия форум, като 0 означава неограничено.',
	'ATTACH_TO_POST'					=> 'Прикачи файл към мнение',

	'CAT_FLASH_FILES'			=> 'Flash файлове',
	'CAT_IMAGES'				=> 'Изображения',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime медия файлове',
	'CAT_RM_FILES'				=> 'RealMedia медия файлове',
	'CAT_WM_FILES'				=> 'Windows Media медия файлове',
	'CHECK_CONTENT'				=> 'Проверка на прикачените файлове',
	'CHECK_CONTENT_EXPLAIN'		=> 'Някои браузъри могат да бъдат залъгани и да приемат грешен mimetype на прикачения файл. Включването на тази опция гарантира, че такива файлове ще бъдат отхвърляни.',
	'CREATE_GROUP'				=> 'Създаване на нова група',
	'CREATE_THUMBNAIL'			=> 'Създаване на тъмбнейл',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Създаване на тъмбнейл във всички възможни ситуации.',

	'DEFINE_ALLOWED_IPS'			=> 'Определяне на разрешени IP адреси/хостове',
	'DEFINE_DISALLOWED_IPS'			=> 'Определяне на забранени IP адреси/хостове',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'За да добавите няколко различни IP адреса или хостове въвеждайте всеки от тях на нов ред. За да добавите диапазон IP адреси разделете началния и крайния адрес с тире (-) или използвайте заместващия символ “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Можете да премахвате няколко IP адреса наведнъж използвайки съответните комбинации с клавиатура и мишка за Вашия компютър и браузър. Маркираните IP адреси имат син фон.',
	'DISPLAY_INLINED'				=> 'Показвай изображенията',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Ако е избрано Не, прикачените изображения ще се показват като връзка.',
	'DISPLAY_ORDER'					=> 'Подредба на прикачените файлове',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Подредба на прикачените файлове по време.',

	'EDIT_EXTENSION_GROUP'			=> 'Промяна на група разширения',
	'EXCLUDE_ENTERED_IP'			=> 'Разрешете това за да премахнете въведения IP адрес/хост.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Прамахнете IP адреса от разрешените IP адреси/хостове',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Премахнете IP адреса от забранените IP адреси/хостове',
	'EXTENSIONS_UPDATED'			=> 'Разширенията са успешно обновени.',
	'EXTENSION_EXIST'				=> 'Разширението %s вече съществува.',
	'EXTENSION_GROUP'				=> 'Група разширения',
	'EXTENSION_GROUPS'				=> 'Групи разширения',
	'EXTENSION_GROUP_DELETED'		=> 'Групата разширения е успешно изтрита.',
	'EXTENSION_GROUP_EXIST'			=> 'Групата разширения %s вече съществува.',

	'EXT_GROUP_ARCHIVES'			=> 'Архиви',
	'EXT_GROUP_DOCUMENTS'			=> 'Документи',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Файлове за сваляне',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash файлове',
	'EXT_GROUP_IMAGES'				=> 'Изображения',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Текст',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime медия',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real медия',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows медия',

	'FILES_GONE'			=> 'Някои от прикачените файлове, които сте избрали за изтриване не съществуват. Възможно е те вече да са били изтрити. Останалите прикачени файлове бяха изтрити.',
	'FILES_STATS_WRONG'		=> 'Възможно е статистиката на файловете да не е точна и трябва да бъде синхронизирана. Реални данни: брой прикачени файлове = %1$d, общ размер на прикачените файлове = %2$s.<br />Щракнете %3$sтук%4$s за синхронизиране.',

	'GO_TO_EXTENSIONS'		=> 'Отиди в раздела за управление на разширения',
	'GROUP_NAME'			=> 'Име на групата',

	'IMAGE_LINK_SIZE'			=> 'Размери на изображението за показване като връзка',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Показване на изображението като текстова връзка, ако то е по-голямо от посочените размери. За да изключите това поведение, въведете стойности 0px на 0px.',
	'IMAGICK_PATH'				=> 'Път към Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Пълния път към приложението imagemagick, например <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Максимален брой прикачени файлове на мнение',
	'MAX_ATTACHMENTS_PM'			=> 'Максимален брой прикачени файлове на лично съобщение',
	'MAX_EXTGROUP_FILESIZE'			=> 'Максимален размер на файла',
	'MAX_IMAGE_SIZE'				=> 'Максимални размери на изображенията',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Максимален размер на прикачените изображения. Въведете стойности 0px на 0px за да изключите проверката за размер.',
	'MAX_THUMB_WIDTH'				=> 'Максимална ширина на тъмбнейла в пиксели',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Генерираният тъмбнейл няма да преминава ширината въведена тук.',
	'MIN_THUMB_FILESIZE'			=> 'Минимална големина на файла за създаване на тъмбнейл',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Не създавай тъмбнейл за изображения по-малки от този.',
	'MODE_INLINE'					=> 'В една линия',
	'MODE_PHYSICAL'					=> 'Физически',

	'NOT_ALLOWED_IN_PM'			=> 'Разрешено само в мнения',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Не е разрешено',
	'NOT_ASSIGNED'				=> 'Не е назначено',
	'NO_ATTACHMENTS'			=> 'Не са намерени прикачени файлове за този период.',
	'NO_EXT_GROUP'				=> 'Няма',
	'NO_EXT_GROUP_NAME'			=> 'Не е въведено име на групата',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Не е избрана група разширения.',
	'NO_FILE_CAT'				=> 'Няма',
	'NO_IMAGE'					=> 'Няма икона',
	'NO_THUMBNAIL_SUPPORT'		=> 'Поддръжката на тъмбнейли е забранена. За правилно функциониране или добавката GD трябва да е налична или imagemagick да бъде инсталиран. И двете не бяха намерени.',
	'NO_UPLOAD_DIR'				=> 'Въведената директория за качване не съществува.',
	'NO_WRITE_UPLOAD'			=> 'В избраната директория за качване не може да бъде записвано. Моля, променете разрешенията (permissions) на директорията за да позволите на уебсървъра да записва в нея.',

	'ONLY_ALLOWED_IN_PM'	=> 'Разрешено само в лични съобщения',
	'ORDER_ALLOW_DENY'		=> 'Разреши',
	'ORDER_DENY_ALLOW'		=> 'Забрани',

	'REMOVE_ALLOWED_IPS'			=> 'Премахни <em>разрешени</em> IP адреси/хостове',
	'REMOVE_DISALLOWED_IPS'			=> 'Премахни <em>забранени</em> IP адреси/хостове',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Сигурни ли сте, че искате да синхронизирате файловите статистики?',

	'SEARCH_IMAGICK'				=> 'Намери Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Списък Разрешени/Забранени',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Променете поведението по подразбиране на списъка за разрешаване/забраняване, когато сигурните сваляния са включени - <strong>бял лист</strong> (Разреши) или <strong>черен списък</strong> (Забрани).',
	'SECURE_DOWNLOADS'				=> 'Разреши сигурните сваляния',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Когато тази настройка е включена, свалянията са лимитирани само до IP адресите/хостовете, които Вие изберете.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Сигурните сваляния не са включени. Настройките по-долу ще бъдат приложени след като бъдат включени сигурните сваляния.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Списъкът с IP адреси беше успешно обновен.',
	'SECURE_EMPTY_REFERRER'			=> 'Позволи празен референт',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Сигурните сваляния се базират на референти. Искате ли да разрешите свалянията за тези, които нямат референт?',
	'SETTINGS_CAT_IMAGES'			=> 'Настройки на категория изображения',
	'SPECIAL_CATEGORY'				=> 'Специална категория',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Специалните категории се отличават по начина на представяне в мненията.',
	'SUCCESSFULLY_UPLOADED'			=> 'Успешно качен.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Групата разширения беше успешно добавена.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Групата разширения беше успешно обновена.',

	'UPLOADING_FILES'				=> 'Прикачване на файлове',
	'UPLOADING_FILE_TO'				=> 'Прикачване на файл “%1$s” към мнение номер %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Нямате право да прикачвате файлове във форум “%s”.',
	'UPLOAD_DIR'					=> 'Директория за качване',
	'UPLOAD_DIR_EXPLAIN'			=> 'Път към директорията за съхранение на прикачените файлове. Обърнете внимание на това, че ако смените директорията, когато в нея вече има прикачени файлове, то ще трябва ръчно да копирате тези файлове в новата директория.',
	'UPLOAD_ICON'					=> 'Икона при качване',
	'UPLOAD_NOT_DIR'				=> 'Мястото за качване, което посочихте не е директория.',
));
