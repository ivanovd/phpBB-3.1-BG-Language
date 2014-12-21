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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Проблеми при влизането и регистрацията'
	),
	array(
		0 => 'Защо трябва да се регистрирам?',
		1 => 'Не е задължително, това зависи от решението на администратора на форума дали е нужна регистрация за да се публикуват мнения. Въпреки това, регистрацията ще Ви даде достъп до допълнителни функции, които не са достъпни за гостите, като аватари, лични съобщения, изпращане на емейли, участие в групи и др. Регистрацията отнема само момент и е препоръчително да се направи.'
	),
	array(
		0 => 'Какво е COPPA?',
		1 => 'COPPA, или Children’s Online Privacy Protection Act от 1998, е закон в САЩ, който задължава сайтове, които потенциално могат да събират информация от малолетни лица под 13 годишна възраст да имат писменото разрешение на родител или някакъв друг вид легално съглашение, позволяващо събирането на лична информация от лицето под 13 годишна възраст. Ако не сте сигурни, че това е приложимо за Вас, като някой, който се опитва да се регистрира или за сайта, в който се опитвате да се регистрирате, моля потърсете правен съвет. Моля, имайте предвид, че phpBB Limited и собственикът на този форум не могат да предложат правни съвети по тази точка.',
	),
	array(
		0 => 'Защо не мога да се регистрирам?',
		1 => 'Възможно е администраторът да е забранил регистрацията на нови потребители. Също така е възможно администраторът да е забранил достъпът от Вашият IP адрес или с потребителското Ви име. Свържете се с администратора за повече информация.',
	),
	array(
		0 => 'Регистрирах се, но не мога да вляза!',
		1 => 'Първо, проверете дали сте въвели потребителското си име и парола правилно. Ако са правилни, то едно от следните две неща може да се е случило. Ако COPPA поддръжката е включена и сте избрали, че сте под 13 годишна възраст по време на регистрацията, то ще трябва да изпълните инструкциите, които сте получили. Някои форуми изискват активация на потребителското име, или от вас самия или от администратор. Тази информаия ще Ви бъде предоставена по време на регистрация. Ако Ви е изпратен емейл, следвайте инструкциите в него. Ако не сте получили емейл, е възможно да сте предоставили грешен адрес или емейлът да е бил категоризиран като спам. Ако сте сигурни, че емейл адресът, който сте предоставили е верен, моля свържете се с администратор.'
	),
	array(
		0 => 'Защо не мога да вляза?',
		1 => 'Има няколко възможни причини за това. Първо, проверете дали сте въвели потребителското си име и парола правилно. Ако са правилни, моля свържете се с администратор за да се уверите, че не сте изгонен. Възможно е собственикът на сайта да е направил конфигурационна грешка, която трябва да отстрани.',
	),
	array(
		0 => 'Регистрирах се отдавна, но сега не мога да вляза?!',
		1 => 'Възможно е администраторът да е деактивирал или изтрил профила Ви по някаква причина. Много форуми периодично изтриват потребители, които не публикуват мнения за дълго време за да намалят размера на базата данни. Ако това се е случило, опитайте да се регистрирате отново и да участвате активно в дискусиите.'
	),
	array(
		0 => 'Забравих си паролата!',
		1 => 'Без паника! Въпреки, че не можем да възстановим паролата Ви, много лесно можем да Ви дадем нова. На страницата за вход натиснете връзката "Забравих си паролата". Следвайте инструкциите и би трябвало да можете да влезнете след това.<br />Ако въпреки това не успеете да влезете се свържете с администратор.',
	),
	array(
		0 => 'Защо излизам автоматично?',
		1 => 'Ако не сте избрали “Запомни ме” при вход, то форумът ще пази сесията Ви само за определено време. Това предотвратява използване на профила Ви от някой друг, който ползва същият компютър. За да останете постоянно в своя профил изберете “Запомни ме” по време на вход. Не Ви препоръчваме тази опция ако споделяте компютъра с други хора. Ако не виждате такава опция това значи, че администратора я е забранил.',
	),
	array(
		0 => 'Какво прави “Изтрий всички бисквитки от форума”?',
		1 => '“Изтрий всички бисквитки от форума” изтрива бисквитките създадени от phpBB, които Ви пазят сесията във форума. Бисквитките също така предоставят възможност функции като следене на новите мнения и теми да работят. Ако имате проблеми с влизането или излизането от форума изтриването на бисквитките би могло да реши проблема.',
	),
	array(
		0 => '--',
		1 => 'Потребителски настройки и предпочитания'
	),
	array(
		0 => 'Как да си променя настройките?',
		1 => 'Ако сте регистриран потребител, всичките Ви настройки се пазят в базата данни. За да ги промените, трябва да посетите Потребителския панел, това е връзка, която се намира в менюто, което се показва, след като кликнете на потребителското си име, намиращо се най-горе в дясно. Този панел ще Ви даде възможност да промените всички Ваши предпочитания и настройки.',
	),
	array(
		0 => 'Как да скрия потребителското си име от списъка с потребителите на линия?',
		1 => 'От Потребителския панел, under “Board preferences”, you will find the option <em>Hide your online status</em>. Enable this option and you will only appear to the administrators, moderators and yourself. You will be counted as a hidden user.'
	),
	array(
		0 => 'The times are not correct!',
		1 => 'It is possible the time displayed is from a timezone different from the one you are in. If this is the case, visit your User Control Panel and change your timezone to match your particular area, e.g. London, Paris, New York, Sydney, etc. Please note that changing the timezone, like most settings, can only be done by registered users. If you are not registered, this is a good time to do so.'
	),
	array(
		0 => 'I changed the timezone and the time is still wrong!',
		1 => 'If you are sure you have set the timezone correctly and the time is still incorrect, then the time stored on the server clock is incorrect. Please notify an administrator to correct the problem.'
	),
	array(
		0 => 'My language is not in the list!',
		1 => 'Either the administrator has not installed your language or nobody has translated this board into your language. Try asking a board administrator if they can install the language pack you need. If the language pack does not exist, feel free to create a new translation. More information can be found at the <a href="https://www.phpbb.com/">phpBB</a>&reg; website.',
	),
	array(
		0 => 'What are the images next to my username?',
		1 => 'There are two images which may appear along with a username when viewing posts. One of them may be an image associated with your rank, generally in the form of stars, blocks or dots, indicating how many posts you have made or your status on the board. Another, usually larger, image is known as an avatar and is generally unique or personal to each user.',
	),
	array(
		0 => 'How do I display an avatar?',
		1 => 'Within your User Control Panel, under “Profile” you can add an avatar by using one of the four following methods: Gravatar, Gallery, Remote or Upload. It is up to the board administrator to enable avatars and to choose the way in which avatars can be made available. If you are unable to use avatars, contact a board administrator.',
	),
	array(
		0 => 'What is my rank and how do I change it?',
		1 => 'Ranks, which appear below your username, indicate the number of posts you have made or identify certain users, e.g. moderators and administrators. In general, you cannot directly change the wording of any board ranks as they are set by the board administrator. Please do not abuse the board by posting unnecessarily just to increase your rank. Most boards will not tolerate this and the moderator or administrator will simply lower your post count.'
	),
	array(
		0 => 'When I click the email link for a user it asks me to login?',
		1 => 'Only registered users can send email to other users via the built-in email form, and only if the administrator has enabled this feature. This is to prevent malicious use of the email system by anonymous users.'
	),
	array(
		0 => '--',
		1 => 'Posting Issues'
	),
	array(
		0 => 'How do I create a new topic or post a reply?',
		1 => 'To post a new topic in a forum, click "New Topic". To post a reply to a topic, click "Post Reply". You may need to register before you can post a message. A list of your permissions in each forum is available at the bottom of the forum and topic screens. Example: You can post new topics, You can post attachments, etc.',
	),
	array(
		0 => 'How do I edit or delete a post?',
		1 => 'Unless you are a board administrator or moderator, you can only edit or delete your own posts. You can edit a post by clicking the edit button for the relevant post, sometimes for only a limited time after the post was made. If someone has already replied to the post, you will find a small piece of text output below the post when you return to the topic which lists the number of times you edited it along with the date and time. This will only appear if someone has made a reply; it will not appear if a moderator or administrator edited the post, though they may leave a note as to why they’ve edited the post at their own discretion. Please note that normal users cannot delete a post once someone has replied.'
	),
	array(
		0 => 'How do I add a signature to my post?',
		1 => 'To add a signature to a post you must first create one via your User Control Panel. Once created, you can check the <em>Attach a signature</em> box on the posting form to add your signature. You can also add a signature by default to all your posts by checking the appropriate radio button in the User Control Panel. If you do so, you can still prevent a signature being added to individual posts by un-checking the add signature box within the posting form.'
	),
	array(
		0 => 'How do I create a poll?',
		1 => 'When posting a new topic or editing the first post of a topic, click the “Poll creation” tab below the main posting form; if you cannot see this, you do not have appropriate permissions to create polls. Enter a title and at least two options in the appropriate fields, making sure each option is on a separate line in the textarea. You can also set the number of options users may select during voting under “Options per user”, a time limit in days for the poll (0 for infinite duration) and lastly the option to allow users to amend their votes.'
	),
	array(
		0 => 'Why can’t I add more poll options?',
		1 => 'The limit for poll options is set by the board administrator. If you feel you need to add more options to your poll than the allowed amount, contact the board administrator.'
	),
	array(
		0 => 'How do I edit or delete a poll?',
		1 => 'As with posts, polls can only be edited by the original poster, a moderator or an administrator. To edit a poll, click to edit the first post in the topic; this always has the poll associated with it. If no one has cast a vote, users can delete the poll or edit any poll option. However, if members have already placed votes, only moderators or administrators can edit or delete it. This prevents the poll’s options from being changed mid-way through a poll.'
	),
	array(
		0 => 'Why can’t I access a forum?',
		1 => 'Some forums may be limited to certain users or groups. To view, read, post or perform another action you may need special permissions. Contact a moderator or board administrator to grant you access.'
	),
	array(
		0 => 'Why can’t I add attachments?',
		1 => 'Attachment permissions are granted on a per forum, per group, or per user basis. The board administrator may not have allowed attachments to be added for the specific forum you are posting in, or perhaps only certain groups can post attachments. Contact the board administrator if you are unsure about why you are unable to add attachments.'
	),
	array(
		0 => 'Why did I receive a warning?',
		1 => 'Each board administrator has their own set of rules for their site. If you have broken a rule, you may be issued a warning. Please note that this is the board administrator’s decision, and the phpBB Limited has nothing to do with the warnings on the given site. Contact the board administrator if you are unsure about why you were issued a warning.'
	),
	array(
		0 => 'How can I report posts to a moderator?',
		1 => 'If the board administrator has allowed it, you should see a button for reporting posts next to the post you wish to report. Clicking this will walk you through the steps necessary to report the post.'
	),
	array(
		0 => 'What is the “Save” button for in topic posting?',
		1 => 'This allows you to save drafts to be completed and submitted at a later date. To reload a saved draft, visit the User Control Panel.'
	),
	array(
		0 => 'Why does my post need to be approved?',
		1 => 'The board administrator may have decided that posts in the forum you are posting to require review before submission. It is also possible that the administrator has placed you in a group of users whose posts require review before submission. Please contact the board administrator for further details.'
	),
	array(
		0 => 'How do I bump my topic?',
		1 => 'By clicking the “Bump topic” link when you are viewing it, you can “bump” the topic to the top of the forum on the first page. However, if you do not see this, then topic bumping may be disabled or the time allowance between bumps has not yet been reached. It is also possible to bump the topic simply by replying to it, however, be sure to follow the board rules when doing so.'
	),
	array(
		0 => '--',
		1 => 'Formatting and Topic Types'
	),
	array(
		0 => 'What is BBCode?',
		1 => 'BBCode is a special implementation of HTML, offering great formatting control on particular objects in a post. The use of BBCode is granted by the administrator, but it can also be disabled on a per post basis from the posting form. BBCode itself is similar in style to HTML, but tags are enclosed in square brackets [ and ] rather than &lt; and &gt;. For more information on BBCode see the guide which can be accessed from the posting page.'
	),
	array(
		0 => 'Can I use HTML?',
		1 => 'No. It is not possible to post HTML on this board and have it rendered as HTML. Most formatting which can be carried out using HTML can be applied using BBCode instead.'
	),
	array(
		0 => 'What are Smilies?',
		1 => 'Smilies, or Emoticons, are small images which can be used to express a feeling using a short code, e.g. :) denotes happy, while :( denotes sad. The full list of emoticons can be seen in the posting form. Try not to overuse smilies, however, as they can quickly render a post unreadable and a moderator may edit them out or remove the post altogether. The board administrator may also have set a limit to the number of smilies you may use within a post.'
	),
	array(
		0 => 'Can I post images?',
		1 => 'Yes, images can be shown in your posts. If the administrator has allowed attachments, you may be able to upload the image to the board. Otherwise, you must link to an image stored on a publicly accessible web server, e.g. http://www.example.com/my-picture.gif. You cannot link to pictures stored on your own PC (unless it is a publicly accessible server) nor images stored behind authentication mechanisms, e.g. hotmail or yahoo mailboxes, password protected sites, etc. To display the image use the BBCode [img] tag.'
	),
	array(
		0 => 'What are global announcements?',
		1 => 'Global announcements contain important information and you should read them whenever possible. They will appear at the top of every forum and within your User Control Panel. Global announcement permissions are granted by the board administrator.'
	),
	array(
		0 => 'What are announcements?',
		1 => 'Announcements often contain important information for the forum you are currently reading and you should read them whenever possible. Announcements appear at the top of every page in the forum to which they are posted. As with global announcements, announcement permissions are granted by the board administrator.'
	),
	array(
		0 => 'What are sticky topics?',
		1 => 'Sticky topics within the forum appear below announcements and only on the first page. They are often quite important so you should read them whenever possible. As with announcements and global announcements, sticky topic permissions are granted by the board administrator.'
	),
	array(
		0 => 'What are locked topics?',
		1 => 'Locked topics are topics where users can no longer reply and any poll it contained was automatically ended. Topics may be locked for many reasons and were set this way by either the forum moderator or board administrator. You may also be able to lock your own topics depending on the permissions you are granted by the board administrator.'
	),
	array(
		0 => 'What are topic icons?',
		1 => 'Topic icons are author chosen images associated with posts to indicate their content. The ability to use topic icons depends on the permissions set by the board administrator.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'User Levels and Groups'
	),
	array(
		0 => 'What are Administrators?',
		1 => 'Administrators are members assigned with the highest level of control over the entire board. These members can control all facets of board operation, including setting permissions, banning users, creating usergroups or moderators, etc., dependent upon the board founder and what permissions he or she has given the other administrators. They may also have full moderator capabilities in all forums, depending on the settings put forth by the board founder.'
	),
	array(
		0 => 'What are Moderators?',
		1 => 'Moderators are individuals (or groups of individuals) who look after the forums from day to day. They have the authority to edit or delete posts and lock, unlock, move, delete and split topics in the forum they moderate. Generally, moderators are present to prevent users from going off-topic or posting abusive or offensive material.'
	),
	array(
		0 => 'What are usergroups?',
		1 => 'Usergroups are groups of users that divide the community into manageable sections board administrators can work with. Each user can belong to several groups and each group can be assigned individual permissions. This provides an easy way for administrators to change permissions for many users at once, such as changing moderator permissions or granting users access to a private forum.'
	),
	array(
		0 => 'Where are the usergroups and how do I join one?',
		1 => 'You can view all usergroups via the “Usergroups” link within your User Control Panel. If you would like to join one, proceed by clicking the appropriate button. Not all groups have open access, however. Some may require approval to join, some may be closed and some may even have hidden memberships. If the group is open, you can join it by clicking the appropriate button. If a group requires approval to join you may request to join by clicking the appropriate button. The user group leader will need to approve your request and may ask why you want to join the group. Please do not harass a group leader if they reject your request; they will have their reasons.'
	),
	array(
		0 => 'How do I become a usergroup leader?',
		1 => 'A usergroup leader is usually assigned when usergroups are initially created by a board administrator. If you are interested in creating a usergroup, your first point of contact should be an administrator; try sending a private message.',
	),
	array(
		0 => 'Why do some usergroups appear in a different colour?',
		1 => 'It is possible for the board administrator to assign a colour to the members of a usergroup to make it easy to identify the members of this group.'
	),
	array(
		0 => 'What is a “Default usergroup”?',
		1 => 'If you are a member of more than one usergroup, your default is used to determine which group colour and group rank should be shown for you by default. The board administrator may grant you permission to change your default usergroup via your User Control Panel.'
	),
	array(
		0 => 'What is “The team” link?',
		1 => 'This page provides you with a list of board staff, including board administrators and moderators and other details such as the forums they moderate.'
	),
	array(
		0 => '--',
		1 => 'Private Messaging'
	),
	array(
		0 => 'I cannot send private messages!',
		1 => 'There are three reasons for this; you are not registered and/or not logged on, the board administrator has disabled private messaging for the entire board, or the board administrator has prevented you from sending messages. Contact a board administrator for more information.'
	),
	array(
		0 => 'I keep getting unwanted private messages!',
		1 => 'You can automatically delete private messages from a user by using message rules within your User Control Panel. If you are receiving abusive private messages from a particular user, report the messages to the moderators; they have the power to prevent a user from sending private messages.'
	),
	array(
		0 => 'I have received a spamming or abusive email from someone on this board!',
		1 => 'We are sorry to hear that. The email form feature of this board includes safeguards to try and track users who send such posts, so email the board administrator with a full copy of the email you received. It is very important that this includes the headers that contain the details of the user that sent the email. The board administrator can then take action.'
	),
	array(
		0 => '--',
		1 => 'Friends and Foes'
	),
	array(
		0 => 'What are my Friends and Foes lists?',
		1 => 'You can use these lists to organise other members of the board. Members added to your friends list will be listed within your User Control Panel for quick access to see their online status and to send them private messages. Subject to template support, posts from these users may also be highlighted. If you add a user to your foes list, any posts they make will be hidden by default.'
	),
	array(
		0 => 'How can I add / remove users to my Friends or Foes list?',
		1 => 'You can add users to your list in two ways. Within each user’s profile, there is a link to add them to either your Friend or Foe list. Alternatively, from your User Control Panel, you can directly add users by entering their member name. You may also remove users from your list using the same page.'
	),
	array(
		0 => '--',
		1 => 'Searching the Forums'
	),
	array(
		0 => 'How can I search a forum or forums?',
		1 => 'Enter a search term in the search box located on the index, forum or topic pages. Advanced search can be accessed by clicking the “Advance Search” link which is available on all pages on the forum. How to access the search may depend on the style used.'
	),
	array(
		0 => 'Why does my search return no results?',
		1 => 'Your search was probably too vague and included many common terms which are not indexed by phpBB. Be more specific and use the options available within Advanced search.',
	),
	array(
		0 => 'Why does my search return a blank page!?',
		1 => 'Your search returned too many results for the webserver to handle. Use “Advanced search” and be more specific in the terms used and forums that are to be searched.'
	),
	array(
		0 => 'How do I search for members?',
		1 => 'Visit to the “Members” page and click the “Find a member” link.'
	),
	array(
		0 => 'How can I find my own posts and topics?',
		1 => 'Your own posts can be retrieved either by clicking the “Show your posts” link within the User Control Panel or by clicking the “Search user’s posts” link via your own profile page or by clicking the “Quick links” menu at the top of the board. To search for your topics, use the Advanced search page and fill in the various options appropriately.',
	),
	array(
		0 => '--',
		1 => 'Subscriptions and Bookmarks',
	),
	array(
		0 => 'What is the difference between bookmarking and subscribing?',
		1 => 'In phpBB 3.0, bookmarking topics worked much like bookmarking in a web browser. You were not alerted when there was an update. As of phpBB 3.1, bookmarking is more like subscribing to a topic. You can be notified when a bookmarked topic is updated. Subscribing, however, will notify you when there is an update to a topic or forum on the board. Notification options for bookmarks and subscriptions can be configured in the User Control Panel, under “Board preferences”.',
	),
	array(
		0 => 'How do I bookmark or subscribe to specific topics?',
		1 => 'You can bookmark or subscribe to a specific topic by clicking the appropriate link in the “Topic tools” menu, conveniently located near the top and bottom of a topic discussion.<br />Replying to a topic with the “Notify me when a reply is posted” option checked will also subscribe you to the topic.',
	),
	array(
		0 => 'How do I subscribe to specific forums?',
		1 => 'To subscribe to a specific forum, click the “Subscribe forum” link, at the bottom of page, upon entering the forum.',
	),
	array(
		0 => 'How do I remove my subscriptions?',
		1 => 'To remove your subscriptions, go to your User Control Panel and follow the links to your subscriptions.'
	),
	array(
		0 => '--',
		1 => 'Attachments'
	),
	array(
		0 => 'What attachments are allowed on this board?',
		1 => 'Each board administrator can allow or disallow certain attachment types. If you are unsure what is allowed to be uploaded, contact the board administrator for assistance.'
	),
	array(
		0 => 'How do I find all my attachments?',
		1 => 'To find your list of attachments that you have uploaded, go to your User Control Panel and follow the links to the attachments section.'
	),
	array(
		0 => '--',
		1 => 'phpBB Issues',
	),
	array(
		0 => 'Who wrote this bulletin board?',
		1 => 'This software (in its unmodified form) is produced, released and is copyright <a href="https://www.phpbb.com/">phpBB Limited</a>. It is made available under the GNU General Public License, version 2 (GPL-2.0) and may be freely distributed. See <a href="https://www.phpbb.com/about/">About phpBB</a> for more details.',
	),
	array(
		0 => 'Why isn’t X feature available?',
		1 => 'This software was written by and licensed through phpBB Limited. If you believe a feature needs to be added please visit the <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>, where you can upvote existing ideas or suggest new features.'
	),
	array(
		0 => 'Who do I contact about abusive and/or legal matters related to this board?',
		1 => 'Any of the administrators listed on the “The team” page should be an appropriate point of contact for your complaints. If this still gets no response then you should contact the owner of the domain (do a <a href="http://www.google.com/search?q=whois">whois lookup</a>) or, if this is running on a free service (e.g. Yahoo!, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that the phpBB Limited has <strong>absolutely no jurisdiction</strong> and cannot in any way be held liable over how, where or by whom this board is used. Do not contact the phpBB Limited in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter <strong>not directly related</strong> to the phpBB.com website or the discrete software of phpBB itself. If you do email phpBB Limited <strong>about any third party</strong> use of this software then you should expect a terse response or no response at all.'
	),
	array(
		0 => 'How do I contact a board administrator?',
		1 => 'All users of the board can use the “Contact us” form, if the option was enabled by the board administrator.<br />Members of the board can also use the “The team” link.',
	),
);
