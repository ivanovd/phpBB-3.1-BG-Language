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

	'EDIT_EXTENSION_GROUP'			=> 'Edit extension group',
	'EXCLUDE_ENTERED_IP'			=> 'Enable this to exclude the entered IP/hostname.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Exclude IP from allowed IPs/hostnames',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Exclude IP from disallowed IPs/hostnames',
	'EXTENSIONS_UPDATED'			=> 'Extensions successfully updated.',
	'EXTENSION_EXIST'				=> 'The extension %s already exists.',
	'EXTENSION_GROUP'				=> 'Extension group',
	'EXTENSION_GROUPS'				=> 'Extension groups',
	'EXTENSION_GROUP_DELETED'		=> 'Extension group successfully deleted.',
	'EXTENSION_GROUP_EXIST'			=> 'The extension group %s already exists.',

	'EXT_GROUP_ARCHIVES'			=> 'Архиви',
	'EXT_GROUP_DOCUMENTS'			=> 'Документи',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Файлове за сваляне',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash файлове',
	'EXT_GROUP_IMAGES'				=> 'Изображения',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Текс',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime медия',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real медия',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows медия',

	'FILES_GONE'			=> 'Some of the attachments you selected for deletion do not exist. They may have been already deleted. Attachments that did exist were deleted.',
	'FILES_STATS_WRONG'		=> 'Your file statistics are likely inaccurate and need to be resynchronised. Actual values: number of attachments = %1$d, total size of attachments = %2$s.<br />Click %3$shere%4$s to resynchronise them.',

	'GO_TO_EXTENSIONS'		=> 'Go to extension management screen',
	'GROUP_NAME'			=> 'Group name',

	'IMAGE_LINK_SIZE'			=> 'Image link dimensions',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Display image attachment as an inline text link if image is larger than this. To disable this behaviour, set the values to 0px by 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick path',
	'IMAGICK_PATH_EXPLAIN'		=> 'Full path to the imagemagick convert application, e.g. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maximum number of attachments per post',
	'MAX_ATTACHMENTS_PM'			=> 'Maximum number of attachments per private message',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximum file size',
	'MAX_IMAGE_SIZE'				=> 'Maximum image dimensions',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximum size of image attachments. Set both values to 0px by 0px to disable dimension checking.',
	'MAX_THUMB_WIDTH'				=> 'Maximum thumbnail width in pixel',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'A generated thumbnail will not exceed the width set here.',
	'MIN_THUMB_FILESIZE'			=> 'Minimum thumbnail file size',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Do not create a thumbnail for images smaller than this.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'Only allowed in posts',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Not allowed',
	'NOT_ASSIGNED'				=> 'Not assigned',
	'NO_ATTACHMENTS'			=> 'No attachments found for this period.',
	'NO_EXT_GROUP'				=> 'None',
	'NO_EXT_GROUP_NAME'			=> 'No group name entered',
	'NO_EXT_GROUP_SPECIFIED'	=> 'No extension group specified.',
	'NO_FILE_CAT'				=> 'None',
	'NO_IMAGE'					=> 'No image',
	'NO_THUMBNAIL_SUPPORT'		=> 'Thumbnail support has been disabled. For proper functionality either the GD extension need to be available or imagemagick being installed. Both were not found.',
	'NO_UPLOAD_DIR'				=> 'The upload directory you specified does not exist.',
	'NO_WRITE_UPLOAD'			=> 'The upload directory you specified cannot be written to. Please alter the permissions to allow the webserver to write to it.',

	'ONLY_ALLOWED_IN_PM'	=> 'Only allowed in private messages',
	'ORDER_ALLOW_DENY'		=> 'Allow',
	'ORDER_DENY_ALLOW'		=> 'Deny',

	'REMOVE_ALLOWED_IPS'			=> 'Remove or un-exclude <em>allowed</em> IPs/hostnames',
	'REMOVE_DISALLOWED_IPS'			=> 'Remove or un-exclude <em>disallowed</em> IPs/hostnames',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Are you sure you wish to resynchronise file statistics?',

	'SEARCH_IMAGICK'				=> 'Search for Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Allow/Deny list',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Change the default behaviour when secure downloads are enabled of the Allow/Deny list to that of a <strong>whitelist</strong> (Allow) or a <strong>blacklist</strong> (Deny).',
	'SECURE_DOWNLOADS'				=> 'Enable secure downloads',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'With this option enabled, downloads are limited to IP’s/hostnames you define.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Secure Downloads are not enabled. The settings below will be applied after enabling secure downloads.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'The IP list has been updated successfully.',
	'SECURE_EMPTY_REFERRER'			=> 'Allow empty referrer',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Secure downloads are based on referrers. Do you want to allow downloads for those omitting the referrer?',
	'SETTINGS_CAT_IMAGES'			=> 'Image category settings',
	'SPECIAL_CATEGORY'				=> 'Special category',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Special categories differ between the way presented within posts.',
	'SUCCESSFULLY_UPLOADED'			=> 'Successfully uploaded.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Extension group successfully added.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Extension group successfully updated.',

	'UPLOADING_FILES'				=> 'Uploading files',
	'UPLOADING_FILE_TO'				=> 'Uploading file “%1$s” to post number %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'You do not have the permission to upload files to forum “%s”.',
	'UPLOAD_DIR'					=> 'Upload directory',
	'UPLOAD_DIR_EXPLAIN'			=> 'Storage path for attachments. Please note that if you change this directory while already having uploaded attachments you need to manually copy the files to their new location.',
	'UPLOAD_ICON'					=> 'Upload icon',
	'UPLOAD_NOT_DIR'				=> 'The upload location you specified does not appear to be a directory.',
));
