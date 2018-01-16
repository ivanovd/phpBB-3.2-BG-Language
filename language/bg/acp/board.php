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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'От тук ще можете да определяте основните настройки на Вашият форум, да му дадете подходящо име и описание и освен другите настройки да зададете часова зона и език по подразбиране.',
	'BOARD_INDEX_TEXT'				=> 'Текст за начало на форума',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Този текст ще бъде изписан във връзката за начало на форума в навигационната лента. Ако бъде оставен празен, по подразбиране ще бъде използвано “Начало форум”.',
	'BOARD_STYLE'					=> 'Стил на форума',
	'CUSTOM_DATEFORMAT'				=> 'Ръчно…',
	'DEFAULT_DATE_FORMAT'			=> 'Формат на датата и часа',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Формата на датата и часа е същия като на PHP <code>date</code> функцията.',
	'DEFAULT_LANGUAGE'				=> 'Език по подразбиране',
	'DEFAULT_STYLE'					=> 'Стил по подразбиране',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Стил по подразбиране за новите потребители.',
	'DISABLE_BOARD'					=> 'Изключи форума',
	'DISABLE_BOARD_EXPLAIN'			=> 'Това ще направи форума недостъпен за потребителите, които не са администратори или модератори. Ако желаете, можете да въведете кратко (до 255 символа) съобщение, което ще се показва на потребителите.',
	'DISPLAY_LAST_SUBJECT'			=> 'Показвай заглавието на последно добавеното мнение в списъка с форуми',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Заглавието на последно добавеното мнение ще бъде показано в списъка с форуми с връзка към това мнение. Заглавията от форуми защитени с парола и форуми, към които потребителите нямат права за четене не се показват.',
	'GUEST_STYLE'					=> 'Стил на гостите',
	'GUEST_STYLE_EXPLAIN'			=> 'Стил на форума за гости.',
	'OVERRIDE_STYLE'				=> 'Замени стила на потребителите',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Заменя стила на потребителите (и гостите) със стила избран като "Стил по подразбиране".',
	'SITE_DESC'						=> 'Описание на форума',
	'SITE_HOME_TEXT'				=> 'Основен текст на форума',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Този текст ще се показва като връзка към началото на форума в навигационната лента. Ако бъде оставен празен, по подразбиране ще бъде използвано “Начало”.',
	'SITE_HOME_URL'					=> 'Основен URL на форума',
	'SITE_HOME_URL_EXPLAIN'			=> 'Ако е попълнен, връзка към този адрес ще бъде добавена към навигационната лента и логото на форума и ще води до този адрес, вместо началото на форума. Изисква се въвеждането на абсолютен URL, например <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Има на форума',
	'SYSTEM_TIMEZONE'				=> 'Часова зона на гостите',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Часовата зона, която ще се използва за показване на времето на потребителите, които не са влезли в профилите си (гости, ботове). Потребителите, които са влезли в профилите си и са настроили часовата си зона при регистрация могат да я променят в потребителския им контролен панел.',
	'WARNINGS_EXPIRE'				=> 'Продължителност на предупрежденията',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Броят дни, които трябва да изминат преди предупреждението да изтече от профила на потребителя. Въведете 0 за да направите предупрежденията постоянни.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'От тук можете да включите/изключите някои от функциите на форума.',

	'ALLOW_ATTACHMENTS'			=> 'Разреши прикачването на файлове',
	'ALLOW_BIRTHDAYS'			=> 'Разреши рождените дни',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Позволява въвеждането на рожденна дата и показването на възрастта в профилите. Обърнете внимание, че списъка с рождени дни на главната страница се контролира от отделна настройка.',
	'ALLOW_BOOKMARKS'			=> 'Разреши добавянето на теми в любими',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Позволява на потребителите да запазват любими теми.',
	'ALLOW_BBCODE'				=> 'Разреши BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Разреши абонирането за форуми',
	'ALLOW_NAME_CHANGE'			=> 'Разреши промяната на потребителското име',
	'ALLOW_NO_CENSORS'			=> 'Разреши отмяната на цензурирането на думи',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Потребителите ще могат да избират дали да забранят автоматичното цензуриране на думи в мненията и личните съобщения.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Разреши прикачването на файлове в личните съобщения',
	'ALLOW_PM_REPORT'			=> 'Разреши докладването на лични съобщения',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Ако тази функция е включена, потребителите ще имат възможността да докладват лично съобщение, което те са получили или изпратили на администратора на форума. Тези съобщения ще бъдат видими в Модераторския Контролен Панел.',
	'ALLOW_QUICK_REPLY'			=> 'Разреши бързия отговор',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Тази функция позволява бързият отговор да бъде изключен навсякъде във форума. Когато е включен, специфичните настройки на всеки форум определят дали той да бъде показван в индивидуалните форуми.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Включете бързият отговор във всички форуми',
	'ALLOW_SIG'					=> 'Разреши подписите',
	'ALLOW_SIG_BBCODE'			=> 'Разреши BBCode в подписите на потребителите',
	'ALLOW_SIG_FLASH'			=> 'Разреши използването на <code>[FLASH]</code> BBCode в потребителските подписи',
	'ALLOW_SIG_IMG'				=> 'Разреши използването на <code>[IMG]</code> BBCode в потребителските подписи',
	'ALLOW_SIG_LINKS'			=> 'Разреши използването на връзки в потребителските подписи',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Ако тази функция е изключена <code>[URL]</code> BBCode кодът и автоматичното форматиране на URL адреси ще бъде забранено.',
	'ALLOW_SIG_SMILIES'			=> 'Разреши използването на усмивки в потребителските подписи',
	'ALLOW_SMILIES'				=> 'Разреши усмивките',
	'ALLOW_TOPIC_NOTIFY'		=> 'Разреши абонирането за теми',
	'BOARD_PM'					=> 'Разреши личните съобщения',
	'BOARD_PM_EXPLAIN'			=> 'Позволява на всички потребители да изпращат лични съобщения.',
	'ALLOW_BOARD_NOTIFICATIONS' => 'Разреши известията във форума',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Аватарите обикновено са малки, уникални изображения, които потребителите асоциират със себе си. В зависимост от стила, те обикновено се показват под потребителското име, когато преглеждате някоя тема. От тук можете да промените различни настройки, според които потребителите могат да задават аватарите си. Обърнете внимание на това, че за да могат да се качват аватари трябва да сте създали директорията, която дефинирате в настройките по-долу и да имате права за запис в нея. Също така е важно да се отбележи, че лимитите за големина на файла се прилагат само за качените аватари, но не и за отдалечените.',

	'ALLOW_AVATARS'					=> 'Разреши аватарите',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Позволява използването на аватари като цяло;<br />Ако забраните аватарите изцяло или в определени случаи, забранените аватари няма да се показват във форума, но потребителите ще могат да си свалят собствените аватари от Потребителския Контролен Панел.',
	'ALLOW_GRAVATAR'				=> 'Разреши gravatar аватарите',
	'ALLOW_LOCAL'					=> 'Разреши галерия с аватари',
	'ALLOW_REMOTE'					=> 'Разреши отдалечени аватари',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Връзка към аватар, намиращ се на друг сайт/адрес.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Разреши качване на аватар от отдалечен сървър',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Позволява качването на аватари от други сайтове/сървъри.',
	'ALLOW_UPLOAD'					=> 'Разреши качването на аватари',
	'AVATAR_GALLERY_PATH'			=> 'Път към галерията с аватари',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Път под главната директория на phpBB с качени аватари, например <samp>images/avatars/gallery</samp>.<br />Двойните точки <samp>../</samp> ще бъдат премахнати от пътя от съображения за сигурност.',
	'AVATAR_STORAGE_PATH'			=> 'Път към директорията за съхранение на аватарите',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Път под главната директория на phpBB, например <samp>images/avatars/upload</samp>.<br />Качването на аватари <strong>няма да работи</strong> ако нямате права за запис в тази директория.<br />Двойните точки <samp>../</samp> ще бъдат премахнати от пътя от съображения за сигурност.',
	'MAX_AVATAR_SIZE'				=> 'Максимален размер на аватарите',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Ширина х Височина в пиксели.',
	'MAX_FILESIZE'					=> 'Максимален размер на файла',
	'MAX_FILESIZE_EXPLAIN'			=> 'За качени файлове. Ако стойността е 0, то размера на файловете ще бъде лимитиран от Вашата PHP конфигурация.',
	'MIN_AVATAR_SIZE'				=> 'Минимален размер на аватарите',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Ширина х Височина в пиксели.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'От тук можете да променяте настройките по подразбиране на личните съобщения.',

	'ALLOW_BBCODE_PM'			=> 'Разреши BBCode в личните съобщения',
	'ALLOW_FLASH_PM'			=> 'Разреши използването на <code>[FLASH]</code> BBCode',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Обърнете внимание, че възможността за използване на flash в личните съобщения, ако е разрешено тук, зависи също така от глобалните права.',
	'ALLOW_FORWARD_PM'			=> 'Разреши препращането на лични съобщения',
	'ALLOW_IMG_PM'				=> 'Разреши използването на <code>[IMG]</code> BBCode',
	'ALLOW_MASS_PM'				=> 'Разреши изпращането на лични съобщения до много потребители и групи',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Изпращането до групи може да бъде настроено в страницата с настройките на самата група.',
	'ALLOW_PRINT_PM'			=> 'Разреши изглед за принтиране в личните съобщения',
	'ALLOW_QUOTE_PM'			=> 'Разреши цитатите в личните съобщения',
	'ALLOW_SIG_PM'				=> 'Разреши подписите в личните съобщения',
	'ALLOW_SMILIES_PM'			=> 'Разреши усмивките в личните съобщения',
	'BOXES_LIMIT'				=> 'Максимален брой съобщения в папка',
	'BOXES_LIMIT_EXPLAIN'		=> 'Потребителите могат да получават не повече от указания брой съобщения във всяка от папките. Задайте стойност 0 за да позволите неограничен брой съобщения.',
	'BOXES_MAX'					=> 'Максимален брой папки за лични съобщения',
	'BOXES_MAX_EXPLAIN'			=> 'По подразбиране потребителите могат да създават много папки за лични съобщения.',
	'ENABLE_PM_ICONS'			=> 'Разреши използването на ЛС икони в личните съобщения',
	'FULL_FOLDER_ACTION'		=> 'Действие по подразбиране при пълна кутия',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Действие по подразбиране, което ще се изпълни ако папката е пълна и действието, което е избрал потребителя, ако въобще е избал, не може да бъде приложено. Единственото изключение е за папка “Изпратени съобщения” където действието по подразбиране е винаги да се изтриват старите съобщения.',
	'HOLD_NEW_MESSAGES'			=> 'Задръж новите съобщения',
	'PM_EDIT_TIME'				=> 'Ограничи времето за редакция',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Ограничава времето, с което потребителят разполага за да редактира личното си съобщение, ако то все още не е прочетено. Задайте стойност 0 за да изключите тази функция.',
	'PM_MAX_RECIPIENTS'			=> 'Максимален брой разрешени получатели',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Максималният брой получатели, на които е разрешено да се прати едно лично съобщение. Ако е въведена стойността 0, то това значи, че няма ограничение в получателите. Тази настройка може да бъде контролирана за всяка група в страницата с настройките на самата група.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'От тук можете да променяте настройките за публикуване по подразбиране.',
	'ALLOW_POST_LINKS'					=> 'Разреши взръките в мненията/личните съобщения',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Ако не е разрешено, то BBCode кодът <code>[URL]</code> и автоматичното преобразуване на URL адресите са забранени.',
	'ALLOW_POST_FLASH'					=> 'Разреши използването на BBCode кодът <code>[FLASH]</code> в мненията',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Ако не е разрешен <code>[FLASH]</code> BBCode кодът в мненията ще бъде изключен. Друг начин да контролирате използването на <code>[FLASH]</code> BBCode кода е чрез системата за права на отделните потребители.',

	'BUMP_INTERVAL'					=> 'Интервал за избутване на тема',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Брой минути, часове или дни между последното мнение в темата и възможността за избутване на тази тема. Настройвайки интервала на 0 забранява избутването на теми напълно.',
	'CHAR_LIMIT'					=> 'Максимален брой символи на мнение/съобщение',
	'CHAR_LIMIT_EXPLAIN'			=> 'Броят позволени символи в едно мнение/лично съобщение. Сложете 0 за неограничен брой символи.',
	'DELETE_TIME'					=> 'Времеви лимит за изтриване',
	'DELETE_TIME_EXPLAIN'			=> 'Ограничава времето, през което можете да изтриете собственото си мнение. Сложете 0 за да изключите тази възможност.',
	'DISPLAY_LAST_EDITED'			=> 'Покажи времето на последна промяна',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Изберете дали да бъде показвана информацията за последната промяна на мнението.',
	'EDIT_TIME'						=> 'Времеви лимит за редактиране',
	'EDIT_TIME_EXPLAIN'				=> 'Ограничава времето, през което можете да редактирате ново мнение. Сложете 0 за да изключите тази възможност.',
	'FLOOD_INTERVAL'				=> 'Интервал за новодняване',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Брой секунди, които трябва да минат преди потребителят да може да публикува ново мнение. Можете да разрешите на някои потребители да игнорират това ограничение, чрез индивидуалните им права.',
	'HOT_THRESHOLD'					=> 'Граница за Популярна тема',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Броят мнения в една тема за да бъде счетена тя за Популярна. Сложете 0 за да изключите популярните теми.',
	'MAX_POLL_OPTIONS'				=> 'Максимален брой възможни отговори в анкета',
	'MAX_POST_FONT_SIZE'			=> 'Максимален размер на шрифта в мненията',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Максималният позволен размер на шрифта в мнение. Сложете 0 за неограничен размер на шрифта.',
	'MAX_POST_IMG_HEIGHT'			=> 'Максимална височина на изображение в мненията',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Максималната височина на изображение/флаш файл в мнение. Сложете 0 за неограничен размер.',
	'MAX_POST_IMG_WIDTH'			=> 'Максимална ширина на изображение в мненията',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Максималната ширина на изображение/флаш файл в мнение. Сложете 0 за неограничен размер.',
	'MAX_POST_URLS'					=> 'Максимален брой връзки в мненията',
	'MAX_POST_URLS_EXPLAIN'			=> 'Максималния брой URLs връзки в мнение. Сложете 0 за неограничен брой.',
	'MIN_CHAR_LIMIT'				=> 'Минимален брой символи на мнение/съобщение',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Минимален брой символи, които трябва да въведе потребителят във всяко мнение/лично съобщение. Минимумът е 1.',
	'POSTING'						=> 'Публикуване',
	'POSTS_PER_PAGE'				=> 'Мнения на страница',
	'QUOTE_DEPTH_LIMIT'				=> 'Максимално брой вложени цитати',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Максималният брой вложени цитати в едно мнение. Сложете 0 за неограничено влагане на цитати.',
	'SMILIES_LIMIT'					=> 'Максимален брой усмивки в мненията',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Максималният брой усмивки в едно мнение. Сложете 0 за неограничен брой усмивки.',
	'SMILIES_PER_PAGE'				=> 'Брой усмивки на страница',
	'TOPICS_PER_PAGE'				=> 'Брой теми на страница',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'От тук можете да променяте настройките по подразбиране на подписите.',

	'MAX_SIG_FONT_SIZE'				=> 'Максимален размер на шрифта в подписите',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Максималният позволен размер на шрифта в подписа. Сложете 0 за неограничен размер на шрифта.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Максимална височина на изображение в подписа',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Максималната височина на изображение/флаш файл в подписа. Сложете 0 за неограничен размер.',
	'MAX_SIG_IMG_WIDTH'				=> 'Максимална ширина на изображение в подписа',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Максималната ширина на изображение/флаш файл в подписа. Сложете 0 за неограничен размер.',
	'MAX_SIG_LENGTH'				=> 'Максимален брой символи в подписа',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Броят позволени символи в подписа.',
	'MAX_SIG_SMILIES'				=> 'Максимален брой усмивки в подписа',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Максималният брой усмивки в подписа. Сложете 0 за неограничен брой усмивки.',
	'MAX_SIG_URLS'					=> 'Максимален брой връзки в подписа',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Максималния брой URLs връзки в подписа. Сложете 0 за неограничен брой.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'От тук можете да дефинирате настройките за регистрация на потребители и настройките на профилите.',

	'ACC_ACTIVATION'				=> 'Активация на профил',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Това определя дали потребителите моментално ще получават достъп до форума или ще се изисква потвърждаване на регистрацията. Можете също така напълно да забраните регистрацията на нови профили. “Изпращане на мейли от форума” функцията трябва да е разрешена за да можете да използвате потребителската или администраторската активация на профили.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Лимит на мненията за нови потребители',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Новите потребители по подразбиране са включени в групата <em>Новорегистрирани потребители</em> докато не достигнат зададения тук брой мнения. Можете да използвате тази група за да ограничите използването на ЛС за тях или да преглеждате и одобрявате мненията им преди да бъдат публикувани. <strong>Ако зададете 0, то тази функция няма да бъде използвана.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Направи Новорегистрирани потребители група по подразбиране',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Ако изберете Да и сте задали и лимит на мненията за нови потребители, то новорегистрираните потребители не само ще бъдат добавени в групата <em>Новорегистрирани потребители</em>, но тази група ще бъде тяхната група по подразбиране. Това може да е полезно, ако искате да зададете ранг и/или аватар на тази група, който да се прилага към всички нейни потребители.',

	'ACC_ADMIN'					=> 'От администратор',
	'ACC_DISABLE'				=> 'Забрани регистрациите',
	'ACC_NONE'					=> 'Без активация (моментален достъп)',
	'ACC_USER'					=> 'От потребителя (емейл потвърждаване)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Разреши преизползването на емейл адрес',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Различни потребители могат да се регистрират с един и същи емейл адрес.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA номер на факс',
	'COPPA_MAIL'				=> 'COPPA пощенски адрес',
	'COPPA_MAIL_EXPLAIN'		=> 'Това е адресът, на който родителите ще изпращат COPPA регистрационните форми.',
	'ENABLE_COPPA'				=> 'Разреши COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Това задължава потребителите да декларират дали са на или по-възрастни от 13 години във връзка с U.S. COPPA. Ако не е разрешено, то специфичните за COPPA групи няма да бъдат показвани.',
	'MAX_CHARS'					=> 'Макс',
	'MIN_CHARS'					=> 'Мин',
	'NO_AUTH_PLUGIN'			=> 'Не е намерен подходяща добавка за ауторизация.',
	'PASSWORD_LENGTH'			=> 'Дължина на паролата',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Минимален и максимален брой символи в паролите.',
	'REG_LIMIT'					=> 'Брой опити за регистрация',
	'REG_LIMIT_EXPLAIN'			=> 'Броят опити, които могат да направят потребителите при решаването на задачата за ботове преди сесията им да бъде заключена за повече опити.',
	'USERNAME_ALPHA_ONLY'		=> 'Само букви',
	'USERNAME_ALPHA_SPACERS'	=> 'Букви, цифри и разделители',
	'USERNAME_ASCII'			=> 'ASCII (без междунароен unicode)',
	'USERNAME_LETTER_NUM'		=> 'Всяка буква и цифра',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Всяка буква, цифра и разделители',
	'USERNAME_CHARS'			=> 'Разрешени символи в потребителските имена',
	'USERNAME_CHARS_ANY'		=> 'Всички символи',
	'USERNAME_CHARS_EXPLAIN'	=> 'Разрешени символи, които могат да бъдат използвани в потребителските имена. Разделителите са: разстояние, -, +, _, [ и ].',
	'USERNAME_LENGTH'			=> 'Дължина на потребителското име',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Минимален и максимален брой символи в потребителските имена.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Общи настройки на хранилката',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Този модул Ви позволява да разрешите различни видове ATOM хранилки, парсвайки всички BBCode-ове в мненията, така че да са четими във външни източници.',

	'ACP_FEED_GENERAL'					=> 'Общи настройки на хранилката',
	'ACP_FEED_POST_BASED'				=> 'Настройки, базирани на мнения',
	'ACP_FEED_TOPIC_BASED'				=> 'Настройки, базирани на теми',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Други хранилки и настройки',

	'ACP_FEED_ENABLE'					=> 'Разреши хранилката',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Включва или изключва ATOM хранилките за целия форум.<br />Изключването важи за всички хранилки, без значение какви настройки са избрани по-долу.',
	'ACP_FEED_LIMIT'					=> 'Брой елементи',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Максималният брой елементи, които да се показват от хранилката.',

	'ACP_FEED_OVERALL'					=> 'Разреши показване на мнения от целия форум',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Показване на нови мнения от целия форум.',
	'ACP_FEED_FORUM'					=> 'Разреши показването на мнения от определени форуми',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Показване на нови мнения от определени форуми и под-форуми.',
	'ACP_FEED_TOPIC'					=> 'Разреши показване на мнения от определени теми',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Показване на нови мнения от определени теми.',

	'ACP_FEED_TOPICS_NEW'				=> 'Разреши показване на нови теми',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Разрешава хранилката “Нови теми”, която показва последно създадените теми и първите мнения в тях.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Разреши показване на активните теми',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Разрешава хранилката “Активни теми”, която показва последно активните теми и последните мнения в тях.',
	'ACP_FEED_NEWS'						=> 'Хранилка',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Извлечи първото мнение от следните форуми. Не избирайте нищо за да забраните хранилката.<br />Изберете няколко форума като задържите <samp>CTRL</samp> и избирате с мишката.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Разреши показване на форумите',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Разрешава хранилката “Всички форуми”, която показва списък с всички форуми.',

	'ACP_FEED_HTTP_AUTH'				=> 'Разреши HTTP авторизация',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Разрешава HTTP авторизация, която позволява на потребителите да получават съдържание, което е скрито за гости като добавя <samp>auth=http</samp> параметър към URL адреса на хранилката. Обърнете внимание, че някои реализации на PHP изискват допълнителни изменения в .htaccess файла. Инструкции за това могат да бъдат намерени в самия файл.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Статистики за елементите',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Показване на индивидуални статистики под елемента на хранилката<br />(напр. публикувано от, дата и час, отговори, преглеждания)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Изключи следните форуми',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Съдържание от следните форуми <strong>няма да бъде показвано в хранилката</strong>. Не избирайте нищо за да извличате мнения от всички форуми.<br />Можете да маркирате/размаркирате няколко форума като задържите <samp>CTRL</samp> и избирате с мишката.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'От тукHere you can select and configure plugins, which are designed to block automated form submissions by spambots. These plugins typically work by challenging the user with a <em>CAPTCHA</em>, a test which is designed to be difficult for computers to solve.',
	'ACP_VC_EXT_GET_MORE'					=> 'For additional (and possibly better) anti-spam plugins, visit the <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com Extensions Database</strong></a>. For more information on preventing spam on your board, visit the <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com Knowledge Base</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Available plugins',
	'CAPTCHA_UNAVAILABLE'					=> 'The plugin cannot be selected as its requirements are not met.',
	'CAPTCHA_GD'							=> 'GD image',
	'CAPTCHA_GD_3D'							=> 'GD 3D image',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Foreground noise',
	'CAPTCHA_GD_EXPLAIN'					=> 'Uses GD to make a more advanced anti-spambot image.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Use foreground noise to make the image harder to read.',
	'CAPTCHA_GD_X_GRID'						=> 'Background noise x-axis',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Use lower settings of this to make the image harder to read. 0 will disable x-axis background noise.',
	'CAPTCHA_GD_Y_GRID'						=> 'Background noise y-axis',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Use lower settings of this to make the image harder to read. 0 will disable y-axis background noise.',
	'CAPTCHA_GD_WAVE'						=> 'Wave distortion',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'This applies a wave distortion to the image.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Add 3D-noise objects',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'This adds additional objects to the image, over the letters.',
	'CAPTCHA_GD_FONTS'						=> 'Use different fonts',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'This setting controls how many different letter shapes are used. You can just use the default shapes or introduce altered letters. Adding lowercase letters is also possible.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Default',
	'CAPTCHA_FONT_NEW'						=> 'New Shapes',
	'CAPTCHA_FONT_LOWER'					=> 'Also use lowercase',
	'CAPTCHA_NO_GD'							=> 'Simple image',
	'CAPTCHA_PREVIEW_MSG'					=> 'Your changes have not been saved, this is just a preview.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'The plugin as it would look like using the current selection.',

	'CAPTCHA_SELECT'						=> 'Installed plugins',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'The dropdown holds the plugins recognised by the board. Grey entries are not available right now and might need configuration prior to use.',
	'CAPTCHA_CONFIGURE'						=> 'Configure plugins',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Change the settings for the selected plugin.',
	'CONFIGURE'								=> 'Configure',
	'CAPTCHA_NO_OPTIONS'					=> 'This plugin has no configuration options.',

	'VISUAL_CONFIRM_POST'					=> 'Разреши мерките против спамботове за мнения публикувани от гости',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Задължава гостите да решат задачата против ботове за да бъде предотвратено автоматичното публикуване на мнения.',
	'VISUAL_CONFIRM_REG'					=> 'Enable spambot countermeasures for registrations',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Requires new users to pass the anti-spambot task to help prevent automated registrations.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Allow users to refresh the anti-spambot task',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Allows users to request a new anti-spambot task if they are unable to solve the current task during registration. Some plugins might not support this option.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'These details define the data used to send cookies to your users browsers. In most cases the default values for the cookie settings should be sufficient. If you do need to change any do so with care, incorrect settings can prevent users logging in.',

	'COOKIE_DOMAIN'				=> 'Cookie domain',
	'COOKIE_NAME'				=> 'Cookie name',
	'COOKIE_NOTICE'				=> 'Cookie notice',
	'COOKIE_NOTICE_EXPLAIN'		=> 'If enabled a cookie notice will be displayed to users when visiting your board. This might be required by law depending on the content of your board and enabled extensions.',
	'COOKIE_PATH'				=> 'Cookie path',
	'COOKIE_SECURE'				=> 'Cookie secure',
	'COOKIE_SECURE_EXPLAIN'		=> 'If your server is running via SSL set this to enabled else leave as disabled. Having this enabled and not running via SSL will result in server errors during redirects.',
	'ONLINE_LENGTH'				=> 'View online time span',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Number of minutes after which inactive users will not appear in “Who is online” listings. The higher this value the greater is the processing required to generate the listing.',
	'SESSION_LENGTH'			=> 'Session length',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessions will expire after this time, in seconds.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Here you can enable and disable the contact page and also add a text that is displayed on the page.',

	'CONTACT_US_ENABLE'				=> 'Enable contact page',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'This page allows users to send emails to board administrators',

	'CONTACT_US_INFO'				=> 'Contact information',
	'CONTACT_US_INFO_EXPLAIN'		=> 'The message is displayed on the contact page',
	'CONTACT_US_INFO_PREVIEW'		=> 'Contact page information - Preview',
	'CONTACT_US_INFO_UPDATED'		=> 'Contact page information has been updated.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Here you can enable and disable certain board functions to reduce the amount of processing required. On most servers there is no need to disable any functions. However on certain systems or in shared hosting environments it may be beneficial to disable capabilities you do not really need. You can also specify limits for system load and active sessions beyond which the board will go offline.',

	'ALLOW_CDN'						=> 'Allow usage of third party content delivery networks',
	'ALLOW_CDN_EXPLAIN'				=> 'If this setting is enabled, some files will be served from external third party servers instead of your server. This reduces the network bandwidth required by your server, but may present a privacy issue for some board administrators. In a default phpBB installation, this includes loading “jQuery” and the font “Open Sans” from Google’s content delivery network.',
	'ALLOW_LIVE_SEARCHES'			=> 'Allow live searches',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'If this setting is enabled, users are provided with keyword suggestions as they type in certain fields throughout the board.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Custom profile fields',
	'LIMIT_LOAD'					=> 'Limit system load',
	'LIMIT_LOAD_EXPLAIN'			=> 'If the system’s 1-minute load average exceeds this value the board will automatically go offline. A value of 1.0 equals ~100% utilisation of one processor. This only functions on UNIX based servers and where this information is accessible. The value here resets itself to 0 if phpBB was unable to get the load limit.',
	'LIMIT_SESSIONS'				=> 'Limit sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'If the number of sessions exceeds this value within a one minute period the board will go offline. Set to 0 for unlimited sessions.',
	'LOAD_CPF_MEMBERLIST'			=> 'Allow styles to display custom profile fields in memberlist',
	'LOAD_CPF_PM'					=> 'Display custom profile fields in private messages',
	'LOAD_CPF_VIEWPROFILE'			=> 'Display custom profile fields in user profiles',
	'LOAD_CPF_VIEWTOPIC'			=> 'Display custom profile fields on topic pages',
	'LOAD_USER_ACTIVITY'			=> 'Show user’s activity',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Displays active topic/forum in user profiles and user control panel. It is recommended to disable this on boards with more than one million posts.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Read Notification Expiration',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Number of days that will elapse before a read notification will automatically be deleted. Set this value to 0 to make notifications permanent.',
	'RECOMPILE_STYLES'				=> 'Recompile stale style components',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Check for updated style components on filesystem and recompile.',
	'YES_ANON_READ_MARKING'			=> 'Enable topic marking for guests',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Stores read/unread status information for guests. If disabled, posts are always marked read for guests.',
	'YES_BIRTHDAYS'					=> 'Enable birthday listing',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'If disabled the birthday listing is no longer displayed. To let this setting take effect the birthday feature needs to be enabled too.',
	'YES_JUMPBOX'					=> 'Enable display of jumpbox',
	'YES_MODERATORS'				=> 'Enable display of moderators',
	'YES_ONLINE'					=> 'Enable online user listings',
	'YES_ONLINE_EXPLAIN'			=> 'Display online user information on index, forum and topic pages.',
	'YES_ONLINE_GUESTS'				=> 'Enable online guest listings in viewonline',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Allow display of guest user information in viewonline.',
	'YES_ONLINE_TRACK'				=> 'Enable display of user online/offline information',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Display online information for user in profiles and topic pages.',
	'YES_POST_MARKING'				=> 'Enable dotted topics',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indicates whether user has posted to a topic.',
	'YES_READ_MARKING'				=> 'Enable server-side topic marking',
	'YES_READ_MARKING_EXPLAIN'		=> 'Stores read/unread status information in the database rather than a cookie.',
	'YES_UNREAD_SEARCH'				=> 'Enable search for unread posts',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB supports authentication plug-ins, or modules. These allow you determine how users are authenticated when they log into the board. By default four plug-ins are provided: DB, LDAP, Apache, and OAuth. Not all methods require additional information so only fill out fields if they are relevant to the selected method.',

	'AUTH_METHOD'				=> 'Select an authentication method',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Both the key and secret of each enabled OAuth service provider must be provided. Only one was provided for an OAuth service provider.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Each OAuth provider requires a unique secret and key in order to authenticate with the external server. These should be supplied by the OAuth service when you register your website with them and should be entered exactly as provided to you.<br />Any service that does not have both a key and a secret entered here will not be available for use by the forum users. Also note, that user can still register and login using the DB authentication plug-in.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Key',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Secret',

	'APACHE_SETUP_BEFORE_USE'	=> 'You have to setup apache authentication before you switch phpBB to this authentication method. Keep in mind that the username you use for apache authentication has to be the same as your phpBB username. Apache authentication can only be used with mod_php (not with a CGI version) and safe_mode disabled.',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'This is the Distinguished Name, locating the user information, e.g. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP email attribute',
	'LDAP_EMAIL_EXPLAIN'			=> 'Set this to the name of your user entry email attribute (if one exists) in order to automatically set the email address for new users. Leaving this empty results in empty email address for users who log in for the first time.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Binding to LDAP server failed with specified user/password.',
	'LDAP_NO_EMAIL'					=> 'The specified email attribute does not exist.',
	'LDAP_NO_IDENTITY'				=> 'Could not find a login identity for %s.',
	'LDAP_PASSWORD'					=> 'LDAP password',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Leave blank to use anonymous binding, otherwise fill in the password for the above user. Required for Active Directory Servers.<br /><em><strong>Warning:</strong> This password will be stored as plain text in the database, visible to everybody who can access your database or who can view this configuration page.</em>',
	'LDAP_PORT'						=> 'LDAP server port',
	'LDAP_PORT_EXPLAIN'				=> 'Optionally you can specify a port which should be used to connect to the LDAP server instead of the default port 389.',
	'LDAP_SERVER'					=> 'LDAP server name',
	'LDAP_SERVER_EXPLAIN'			=> 'If using LDAP this is the hostname or IP address of the LDAP server. Alternatively you can specify an URL like ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'This is the key under which to search for a given login identity, e.g. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP user <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Leave blank to use anonymous binding. If filled in phpBB uses the specified distinguished name on login attempts to find the correct user, e.g. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Required for Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'LDAP user filter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optionally you can further limit the searched objects with additional filters. For example <samp>objectClass=posixGroup</samp> would result in the use of <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Here you define server and domain dependent settings. Please ensure the data you enter is accurate, errors will result in emails containing incorrect information. When entering the domain name remember it does include http:// or other protocol term. Only alter the port number if you know your server uses a different value, port 80 is correct in most cases.',

	'ENABLE_GZIP'				=> 'Enable GZip compression',
	'ENABLE_GZIP_EXPLAIN'		=> 'Generated content will be compressed prior to sending it to the user. This can reduce network traffic but will also increase CPU usage on both server and client side. Requires zlib PHP extension to be loaded.',
	'FORCE_SERVER_VARS'			=> 'Force server URL settings',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'If set to yes the server settings defined here will be used in favour of the automatically determined values.',
	'ICONS_PATH'				=> 'Post icons storage path',
	'ICONS_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Enable URL Rewriting',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'When enabled, URLs containing ’app.php’ will be rewritten to remove the filename (i.e. app.php/foo will become /foo). <strong>Apache server’s mod_rewrite module is required for this functionality to work; if this option is enabled without mod_rewrite support, URLs on your board may be broken.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'The <strong>mod_rewrite</strong> module on your Apache web server is disabled. Enable the module or contact your web hosting provider if you wish to enable this feature.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'We are unable to determine whether or not this server supports URL rewriting. This setting may be enabled but if URL rewriting is not available, paths generated by this board (such as for use in links) may be broken. Contact your web hosting provider if you are unsure whether or not you can safely enable this feature.',
	'PATH_SETTINGS'				=> 'Path settings',
	'RANKS_PATH'				=> 'Rank image storage path',
	'RANKS_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Script path',
	'SCRIPT_PATH_EXPLAIN'		=> 'The path where phpBB is located relative to the domain name, e.g. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domain name',
	'SERVER_NAME_EXPLAIN'		=> 'The domain name this board runs from (for example: <samp>www.example.com</samp>).',
	'SERVER_PORT'				=> 'Server port',
	'SERVER_PORT_EXPLAIN'		=> 'The port your server is running on, usually 80, only change if different.',
	'SERVER_PROTOCOL'			=> 'Server protocol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'This is used as the server protocol if these settings are forced. If empty or not forced the protocol is determined by the cookie secure settings (<samp>http://</samp> or <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server URL settings',
	'SMILIES_PATH'				=> 'Smilies storage path',
	'SMILIES_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Extension group icons storage path',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Path under your phpBB root directory, e.g. <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'		=> 'Run periodic tasks from system cron',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'When off, phpBB will arrange for periodic tasks to be run automatically. When on, phpBB will not schedule any periodic tasks by itself; a system administrator must arrange for <code>bin/phpbbcli.php cron:run</code> to be run by the system cron facility at regular intervals (e.g. every 5 minutes).',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Here you are able to define session and login related settings.',

	'ALL'							=> 'All',
	'ALLOW_AUTOLOGIN'				=> 'Allow "Remember Me" logins',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determines whether users are given "Remember Me" option when they visit the board.',
	'ALLOW_PASSWORD_RESET'			=> 'Allow password reset ("Forgot Password")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Determines whether or not users are able to use the "I forgot my password" link on the login page to recover their account. If you use an external authentication mechanism you may wish to disable this feature.',
	'AUTOLOGIN_LENGTH'				=> '"Remember Me" login key expiration length (in days)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Number of days after which "Remember Me" login keys are removed or zero to disable.',
	'BROWSER_VALID'					=> 'Validate browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Enables browser validation for each session improving security.',
	'CHECK_DNSBL'					=> 'Check IP against DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'If enabled the user’s IP address is checked against the following DNSBL services on registration and posting: <a href="http://spamcop.net">spamcop.net</a> and <a href="http://www.spamhaus.org">www.spamhaus.org</a>. This lookup may take a while, depending on the server’s configuration. If slowdowns are experienced or too many false positives reported it is recommended to disable this check.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Check email domain for valid MX record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'If enabled, the email domain provided on registration and profile changes is checked for a valid MX record.',
	'FORCE_PASS_CHANGE'				=> 'Force password change',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Require user to change their password after a set number of days. Setting this value to 0 disables this behaviour.',
	'FORM_TIME_MAX'					=> 'Maximum time to submit forms',
	'FORM_TIME_MAX_EXPLAIN'			=> 'The time a user has to submit a form. Use -1 to disable. Note that a form might become invalid if the session expires, regardless of this setting.',
	'FORM_SID_GUESTS'				=> 'Tie forms to guest sessions',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'If enabled, the form token issued to guests will be session-exclusive. This can cause problems with some ISPs.',
	'FORWARDED_FOR_VALID'			=> 'Validate <var>X_FORWARDED_FOR</var> header',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessions will only be continued if the sent <var>X_FORWARDED_FOR</var> header equals the one sent with the previous request. Bans will be checked against IPs in <var>X_FORWARDED_FOR</var> too.',
	'IP_VALID'						=> 'Session IP validation',
	'IP_VALID_EXPLAIN'				=> 'Determines how much of the users IP is used to validate a session; <samp>All</samp> compares the complete address, <samp>A.B.C</samp> the first x.x.x, <samp>A.B</samp> the first x.x, <samp>None</samp> disables checking. On IPv6 addresses <samp>A.B.C</samp> compares the first 4 blocks and <samp>A.B</samp> the first 3 blocks.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Maximum number of login attempts per IP address',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'The threshold of login attempts allowed from a single IP address before an anti-spambot task is triggered. Enter 0 to prevent the anti-spambot task from being triggered by IP addresses.',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP address login attempt expiration time',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Login attempts expire after this period.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Limit login attempts by <var>X_FORWARDED_FOR</var> header',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Instead of limiting login attempts by IP address they are limited by <var>X_FORWARDED_FOR</var> values. <br /><em><strong>Warning:</strong> Only enable this if you are operating a proxy server that sets <var>X_FORWARDED_FOR</var> to trustworthy values.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximum number of login attempts per username',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'The number of login attempts allowed for a single account before the anti-spambot task is triggered. Enter 0 to prevent the anti-spambot task from being triggered for distinct user accounts.',
	'NO_IP_VALIDATION'				=> 'None',
	'NO_REF_VALIDATION'				=> 'None',
	'PASSWORD_TYPE'					=> 'Password complexity',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determines how complex a password needs to be when set or altered, subsequent options include the previous ones.',
	'PASS_TYPE_ALPHA'				=> 'Must contain letters and numbers',
	'PASS_TYPE_ANY'					=> 'No requirements',
	'PASS_TYPE_CASE'				=> 'Must be mixed case',
	'PASS_TYPE_SYMBOL'				=> 'Must contain symbols',
	'REF_HOST'						=> 'Only validate host',
	'REF_PATH'						=> 'Also validate path',
	'REFERRER_VALID'				=> 'Validate Referrer',
	'REFERRER_VALID_EXPLAIN'		=> 'If enabled, the referrer of POST requests will be checked against the host/script path settings. This may cause issues with boards using several domains and or external logins.',
	'TPL_ALLOW_PHP'					=> 'Allow php in templates',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'If this option is enabled, <code>PHP</code> and <code>INCLUDEPHP</code> statements will be recognised and parsed in templates.',
	'UPLOAD_CERT_VALID'				=> 'Validate upload certificate',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> 'If enabled, certificates of remote uploads will be validated. This requires the CA bundle to be defined by the <samp>openssl.cafile</samp> or <samp>curl.cainfo</samp> setting in your php.ini.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'This information is used when the board sends emails to your users. Please ensure the email address you specify is valid, any bounced or undeliverable messages will likely be sent to that address. If your host does not provide a native (PHP based) email service you can instead send messages directly using SMTP. This requires the address of an appropriate server (ask your provider if necessary). If the server requires authentication (and only if it does) enter the necessary username, password and authentication method.',

	'ADMIN_EMAIL'					=> 'Return email address',
	'ADMIN_EMAIL_EXPLAIN'			=> 'This will be used as the return address on all emails, the technical contact email address. It will always be used as the <samp>Return-Path</samp> and <samp>Sender</samp> address in emails.',
	'BOARD_EMAIL_FORM'				=> 'Users send email via board',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Instead of showing the users email address users are able to send emails via the board.',
	'BOARD_HIDE_EMAILS'				=> 'Hide email addresses',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'This function keeps email addresses completely private.',
	'CONTACT_EMAIL'					=> 'Contact email address',
	'CONTACT_EMAIL_EXPLAIN'			=> 'This address will be used whenever a specific contact point is needed, e.g. spam, error output, etc. It will always be used as the <samp>From</samp> and <samp>Reply-To</samp> address in emails.',
	'CONTACT_EMAIL_NAME'			=> 'Contact name',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'This is the contact name that e-mail recipients will see. If you don’t want to have a contact name, leave this field empty.',
	'EMAIL_FUNCTION_NAME'			=> 'Email function name',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'The email function used to send mails through PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Email package size',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'This is the number of maximum emails sent out in one package. This setting is applied to the internal message queue; set this value to 0 if you have problems with non-delivered notification emails.',
	'EMAIL_SIG'						=> 'Email signature',
	'EMAIL_SIG_EXPLAIN'				=> 'This text will be attached to all emails the board sends.',
	'ENABLE_EMAIL'					=> 'Enable board-wide emails',
	'ENABLE_EMAIL_EXPLAIN'			=> 'If this is set to disabled no emails will be sent by the board at all. <em>Note the user and admin account activation settings require this setting to be enabled. If currently using “user” or “admin” activation in the activation settings, disabling this setting will require no activation of new accounts.</em>',
	'SEND_TEST_EMAIL'				=> 'Send a test email',
	'SEND_TEST_EMAIL_EXPLAIN'		=> 'This will send a test email to the address defined in your account.',
	'SMTP_AUTH_METHOD'				=> 'Authentication method for SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Only used if a username/password is set, ask your provider if you are unsure which method to use.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP password',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Only enter a password if your SMTP server requires it.<br /><em><strong>Warning:</strong> This password will be stored as plain text in the database, visible to everybody who can access your database or who can view this configuration page.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP server port',
	'SMTP_PORT_EXPLAIN'				=> 'Only change this if you know your SMTP server is on a different port.',
	'SMTP_SERVER'					=> 'SMTP server address',
	'SMTP_SETTINGS'					=> 'SMTP settings',
	'SMTP_USERNAME'					=> 'SMTP username',
	'SMTP_USERNAME_EXPLAIN'			=> 'Only enter a username if your SMTP server requires it.',
	'TEST_EMAIL_SENT'				=> 'The test email has been sent.<br />If you don’t receive it, please check your emails configuration.<br /><br />If you require assistance, please visit the <a href="https://www.phpbb.com/community/">phpBB support forums</a>.',
	'USE_SMTP'						=> 'Use SMTP server for email',
	'USE_SMTP_EXPLAIN'				=> 'Select “Yes” if you want or have to send email via a named server instead of the local mail function.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Here you can enable and control the use of Jabber for instant messaging and board notifications. Jabber is an open source protocol and therefore available for use by anyone. Some Jabber servers include gateways or transports which allow you to contact users on other networks. Not all servers offer all transports and changes in protocols can prevent transports from operating. Please be sure to enter already registered account details - phpBB will use the details you enter here as is.',

	'JAB_ENABLE'				=> 'Enable Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Enables use of Jabber messaging and notifications.',
	'JAB_GTALK_NOTE'			=> 'Please note that GTalk will not work because the <samp>dns_get_record</samp> function could not be found. This function is not available in PHP4, and is not implemented on Windows platforms. It currently does not work on BSD-based systems, including Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber package size',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'This is the number of messages sent in one package. If set to 0 the message is sent immediately and will not be queued for later sending.',
	'JAB_PASSWORD'				=> 'Jabber password',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Warning:</strong> This password will be stored as plain text in the database, visible to everybody who can access your database or who can view this configuration page.</em>',
	'JAB_PORT'					=> 'Jabber port',
	'JAB_PORT_EXPLAIN'			=> 'Leave blank unless you know it is not port 5222.',
	'JAB_SERVER'				=> 'Jabber server',
	'JAB_SERVER_EXPLAIN'		=> 'See %sjabber.org%s for a list of servers.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber settings changed successfully.',
	'JAB_USE_SSL'				=> 'Use SSL to connect',
	'JAB_USE_SSL_EXPLAIN'		=> 'If enabled a secure connection is tried to be established. The Jabber port will be modified to 5223 if port 5222 is specified.',
	'JAB_USERNAME'				=> 'Jabber username or JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Specify a registered username or a valid JID. The username will not be checked for validity. If you only specify a username, then your JID will be the username and the server you specified above. Else, specify a valid JID, for example user@jabber.org.',
));
