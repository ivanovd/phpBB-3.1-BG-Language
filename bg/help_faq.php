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
		1 => 'От Потребителския панел, в раздел “Настройки на форума”, ще намерите опцията <em>Не показвай кога съм на линия</em>. Изберете <em>Да</em> и само администраторите, модераторите и Вие ще виждате потребителското си име в списъка с потребителите на линия. Ще имате статут на скрит потребител.'
	),
	array(
		0 => 'Времената не са правилни!',
		1 => 'Възможно е времената показани във форума да са от различна от вашата часова зона. Ако това е така, то отидете в Потребителския Контролен Панел и променете часовата си зона, спрямо това къде се намирате в момента. Имайте предвид, че смяната на часовата зона, както и повечето настройки са разрешени само за регистрирани потребители. Ако не сте се регистрирали, сега е времето да го направите.'
	),
	array(
		0 => 'Промених си часовата зона, но времето все още е грешно!',
		1 => 'Ако сте сигурни, че сте избрали правилната часова зона и времето все още не е правилно, тогава часовникът на сървъра най-вероятно е грешен. Моля, уведомете администратора за да поправи проблема.'
	),
	array(
		0 => 'Езикът ми не е сред тези в списъка, от които мога да избера!',
		1 => 'Най вероятно администраторът не е инсталирал Вашият език или все още никой не е превел форума на Вашият език. Опитайте се да се свържете с администратора и попитайте дали може да бъде инсталиран езикът, който Ви трябва.',
	),
	array(
		0 => 'Какви са тези картинки до потребителското ми име?',
		1 => 'Има два вида картинки, които могат да бъдат до потребителското Ви име, когато се разглеждат теми или мнения. Едната може да е изображение, асоциирано с вашия ранг, най-често във формата на звезди, квадратчета или точки, индикиращи колко мнения сте публикувал или Вашият статус във форума. Другата картинка, обикновено по-голяма, е известна като аватар и обикновено е уникална или персонална за всеки потребител.',
	),
	array(
		0 => 'Как да си сложа аватар?',
		1 => 'В Потребителския Контролен Панел, в раздел “Профил” можете да добавите аватар от един от следните четири типа: Gravatar, Галерия, Външен или да качите свой собствен. В зависимост от решението на администратора на форума, възможно е аватарите да са забранени или някои от типовете да не са налични. Ако не можете да ползвате аватар, свържете се с администратора.',
	),
	array(
		0 => 'Какъв е рангът ми и как да го променя?',
		1 => 'Ранговете, които се появяват под потребителското Ви име, показват броя на мненията, които сте публикували или идентифицират дадени потребители, например модератори или администратори. Обикновено, не можете директно да промените имената на ранговете, тъй като те се определят от администратора. Моля, не злоупотребявайте, като публикувате ненужни мнения само и само да увеличите ранга си. Повечето форуми не толерират това и модератор или администратор може да намали броят на мненията Ви.'
	),
	array(
		0 => 'Защо когато кликна на връзката за изпращане на емейл до потребител ме кара да влезна в профила си?',
		1 => 'Само регистрираните потребители могат да изпращат емейли до други потребители през вградената емейл форма и то само ако администратора е разрешил тази функция. За да се предотврати злоупотреба, използването на тази функция от анонимни потребители е забранено.'
	),
	array(
		0 => '--',
		1 => 'Проблеми с публикуването'
	),
	array(
		0 => 'Как да създам нова тема или да публикувам отговор?',
		1 => 'За да създадете нова тема във форум, натиснете бутона "Нова тема". За да отговорите на тема, натиснете бутона "Отговори". Може да е нужно да се регистрирате преди да можете да публикувате отговор или тема. Списък с вашите права във всеки форум е наличен най-долу на страницата с форумите. Например: Вие можете да публикувате теми в този форум, Вие можете да прикачвате файлове в този форум и т.н.',
	),
	array(
		0 => 'Как да променя или изтрия мнение?',
		1 => 'Освен ако не сте администратор или модератор, можете да променяте или изтривате само собствените си мнения. Можете да промените мнението си като натиснете бутона "Промени мнението" на съответното мнение, понякога този бутон е активен само за определено време след като е било публикувано мнението. Ако някой е отговорил на мнението Ви, под него ще се появи мелък текст с броя пъти, които сте променяли мнението, както и датата и часа; този текст няма да се появи ако модератор или администратор променят мнението Ви, въпреки че могат да оставят коментар за причината за промяната на мнението Ви, ако преценят. Важно е да се отбележи, че обикновените потребители не могат да изтирват мненията си, ако някой им е отговорил.'
	),
	array(
		0 => 'Как да добавя подпис към мненията си?',
		1 => 'За да добавите подпис към мненията си, първо трябва да го създадете през Потребителския Контролен Панел. След като направите това, можете да изберете <em>Добави подпис</em> опцията при публикуване на мнение за да прикачите подписа си. Също така можете да добавяте подписа си по подразбиране към всички мнения като изберете съответния радио бутон в Потребителския Контролен Панел. Ако го направите, въпреки това ще можете да избирате дали подписът Ви да се прилага към индивидуални мнения като изберете съответната опция при публикуване.'
	),
	array(
		0 => 'Как да създам анкета?',
		1 => 'Когато публикувате нова тема или променяте първото мнение на темата, изберете раздела “Създаване на анкета” под главната форма на мнението; ако не виждате този раздел, най-вероятно нямате права да създавате анкети. Въведете въпрос на анкетата и най-малко два възможни отговора в съответните полета, като се убедите, че всеки отговор е на отделен ред. Също така можете да избирате броя гласове, които потребителите могат да дават от полето “Брой гласове на потребител”, време, за което да е активна анкетата в дни (0 за винаги активна) и да настройвате възможността потребителите да променят гласа си.'
	),
	array(
		0 => 'Защо не мога да добавя повече възможни отговори към анкетата?',
		1 => 'Максималният брой възможни отговори се определя от администратора. Ако мислите, че Ви трябват повече от позволения брой възможни отговори, моля свържете се с администратора.'
	),
	array(
		0 => 'Как да променя или изтрия анкета?',
		1 => 'Както и при мненията, анкетите могат да бъдат променяни само от автора, модератор или администратор. За да промените анкета, натиснете бутона "Промени мнението" на първото мнение в темата. Ако все още никой не е гласувал, можете да промените или изтриете възможен отговор, обаче, ако някой е гласувал, само модератор или администратор имат право да променят или изтрият възможния отговор. Така се предотвратява подмяната на гласове преди да е приключила анкетата.'
	),
	array(
		0 => 'Защо не мога да достъпя даден форум?',
		1 => 'Някои форуми може да са ограничени до определени потребители или групи. За да разглеждате, четете, публикувате или извършвате други действия ще са Ви нужни специални права. Свържете се с модератор или администратор за да Ви дадат нужните права.'
	),
	array(
		0 => 'Защо не мога да прикача файл?',
		1 => 'Права за прикачване на файл се дават на ниво форум, група или потребител. Администраторът може да е забранил прикачването на файлове за форума, в който се опитвате да публикувате или само определени групи могат да прикачват файлове. Свържете се с администратора, ако не сте сигурни защо не можете да прикачвате файлове.'
	),
	array(
		0 => 'Защо получих предупреждение?',
		1 => 'Всеки форум има свой собствен набор от правила. Ако сте нарушили, някое от тези правила, то можете да получите предупреждение. Важно е да се отбележи, че това е решение на администратора и phpBB Limited няма нищо общо с издадените предупреждения. Свържете се с администратора на форума, ако не сте сигурен за какво сте били предупредени.'
	),
	array(
		0 => 'Как мога да докладвам мнения на модератор?',
		1 => 'Ако администратора го е позволил, би трябвало да видите бутон за докладване до мнението, което искате да докладвате. Натискайки го, ще трябва да следвате указаните стъпки за да докладвате мнението.'
	),
	array(
		0 => 'Какво прави бутона “Запази чернова” при публикуване на мнение/тема?',
		1 => 'Той Ви позволява да запазвате чернови, който могат да бъдат довършени и публикувани по-късно. За да заредите записана чернова, посетете Потребителския Контролен Панел.'
	),
	array(
		0 => 'Защо мнението ми трябва да бъде одобрено?',
		1 => 'Администраторът може да е решил, че мненията, които публикувате във форума се нуждаят от преглед преди да бъдат публикувани. Също така е възможно администратора да Ви е сложил в група с потребители, чиито мнения изискват одобрение преди да бъдат публикувани. Моля, свържете се с администратора за повече информация.'
	),
	array(
		0 => 'Как да избутам темата ми?',
		1 => 'Като натиснете връзката “Избутай темата”, която се показва след като натиснете бутона “Инструменти за темата” (иконка с гаечен ключ) в темата, която искате да избутате. Така ще “избутате” темата най-горе на първа страница във форума, в който се намира. Ако не виждате тази връзка, то избутването може да е забранено или времето между избутванията не е изминало. Можете да избутате темата като просто публикувате нов отговор в нея, но преди това се уверете, че това не е в разрез с правилата на форума.'
	),
	array(
		0 => '--',
		1 => 'Форматиране на текст и видове теми'
	),
	array(
		0 => 'Какво е BBCode?',
		1 => 'BBCode е специална имплементация на HTML, която позволява широк контрол на форматирането на дадени обекти в мнението. Използването на BBCode се разрешава от администратора, но също така може да бъде забранено за всяко отделно мнение от формата за публикуване. BBCode сам по себе си е подобен на HTML, но таговете му са затворени в квадратни скоби [ и ], а не в &lt; и &gt;. За повече информация относно BBCode вижте упътването за BBCode, което можете да намерите във формата за публикуване.'
	),
	array(
		0 => 'Мога ли да използвам HTML?',
		1 => 'Не. Не е възможно да публикувате HTML в този форум и той да се възпроизведе като такъв. Голяма част от форматирането, което се извършва с HTML, може да се постигне с прилагането на BBCode.'
	),
	array(
		0 => 'Какво са усмивките?',
		1 => 'Усмивките, или Емотикони, са малки изображения, които могат да бъдат използвани за изразяване на чувства, използвайки кратък код, например :) означава щастие, докато :( означава тъга. Пълният лист с емотикони може да бъде видян във формата за публикуване. Опитайте се да не използвате прекалено много емотикони, защото мнението може да стане трудно четимо и модератор може да промени съдържанието му или направо да го изтрие. Администратора също така може да е задал лимит на максималния брой емотикони, които могат да се съдържат в едно мнение.'
	),
	array(
		0 => 'Мога ли да публикувам изображения?',
		1 => 'Да, изображения могат да бъдат показвани във Вашите мнения. Ако администратора е разрешил прикачването на файлове, можете да прикачите снимка. Ако прикачването на файлове не е разрешено, то можете да публикувате снимка от публично достъпен сървър, например http://www.example.com/my-picture.gif. Не можете да публикувате снимка от връзка към локалния Ви компютър (освен ако той не е публично достъпен сървър), нито снимки, съхранявани зад механизъм за защита с парола, например hotmail или gmail пощи, сайтове, изискващи парола и т.н. За да се покаже изображението, трябва да използвате BBCode [img] тага.'
	),
	array(
		0 => 'Какво е глобално съобщение?',
		1 => 'Глобалните съобщения съдържат важна информация и трябва да ги прочетете, когато е възможно. Те ще се показват най-горе на всеки форум и във Вашия Потребителски Контролен Панел. Правата за създаване на глобални съобщения се дават от администратора.'
	),
	array(
		0 => 'Какво е важно съобщение?',
		1 => 'Важните съобщения, както подсказва името, често съдържат важна информация за форума, в който се намирате и трябва да ги прочетете, когато е възможно. Важните съобщения се показват най-горе на всяка страница на форума, в който са публикувани. Както и глобалните съобщения, правата за създаването им се дават от администратора.'
	),
	array(
		0 => 'Какво е закачена тема?',
		1 => 'Закачените теми се показват под важните съобщения, но над всички други теми във форума и само на първа страница. Често те са доста важни или интересни, затова ги прочетете, когато е възможно. Както важните и глобалните съобщения, правата за създаването на закачени теми се дават от администратора.'
	),
	array(
		0 => 'Какво е заключена тема?',
		1 => 'Заключените теми са теми, в които потребителите не могат да публикуват нови мнения и всяка анкета в такава тема приключва автоматично. Темите могат да бъдат заключвани поради много причини и модераторите или администраторите са отговорни за това. Можете също така да заключвате собствените си теми, ако това е разрешено от администратора.'
	),
	array(
		0 => 'Какво е иконка на темата?',
		1 => 'Иконките на темите са изображения, избрани от автора, които се добавят към темата за да индикират по някакъв начин съдържанието й. Възможността за използване на иконки за теми зависи от администратора на форума.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Потребителски нива и групи'
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
		1 => 'Лични съобщения'
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
		1 => 'Приятели и врагове'
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
		1 => 'Търсене във форума'
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
		1 => 'Любими теми и абонаменти',
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
		1 => 'Прикачени файлове'
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
		1 => 'Проблеми с phpBB',
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
