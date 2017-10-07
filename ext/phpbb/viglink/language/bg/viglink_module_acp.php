<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink настройки',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink е услуга от трета страна, която дискретно монетизира връзките публикувани от потребителите на Вашият форум без да нарушава потребителското изживяване. Когато потребителите последват външна връзка към продукти или услуги и купят нещо, продавачът плаща на VigLink комисионна, част от която се дарява на phpBB проекта. Ако изберете да разрешите VigLink и постъпленията отиват в phpBB проекта, то Вие поддържате нашата организация за отворен код и подсигурявате финансовата ни стабилност.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Можете да промените тези настройки по всяко време в “<a href="%1$s">VigLink настройки</a>” панела.',
	'ACP_VIGLINK_ENABLE'			=> 'Разреши VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Разрешава ползването на услугите на VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Изискайте плащане на комисионните към Вас (по желание)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Можете да изискате Вашата комисионна като регистрирате VigLink Convert профил.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Услугите на VigLink за разбранени от phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Изискайте комисионната си',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Можете да изискате комисионната на форума от монетизираните от VigLink връзки, вместо да ги дарите на phpBB проекта. За да управлявате настройките на профила си, трябва да се регистрирате като последвате връзката “Convert профил”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convert профил',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Връзка към VigLink convert профил не може да бъде създадена.'
));
