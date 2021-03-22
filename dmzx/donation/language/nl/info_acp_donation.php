<?php
/**
*
* @package phpBB Extension - Donation extension
* @copyright (c) 2016-2018 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_DONATION'						=> 'Donatie Extensie',
	'ACP_DONATION_CONFIG'				=> 'Configuratie',
	'ACP_DONATION_GOAL'					=> 'Donatie doel',
	'ACP_DONATION_DONORS'				=> 'Sponsors lijst',
	'ACP_DONATION_HISTORY'				=> 'Donatie geschiedenis',
	'ACP_DONATION_IPN'					=> 'IPN Instellingen',
	'ACP_DONATION_CREDITS'				=> 'Credits Instellingen',
	'ACP_DONATION_CREDITS_GROUPS'		=> 'Donatie Credits',	
	// Log entries
	'LOG_DONATION_CONFIG_UPDATE'	 			=> '<strong>Donatie configuratie geüpdatet</strong>',
	'LOG_DONATION_RESET_DATE'	 				=> '<strong>Donatie reset installatie datum</strong>',
	'LOG_DONATION_UPDATED'	 					=> '<strong>Sponsor geüpdatet</strong><br>» %1$s',
	'LOG_DONATION_ADDED'	 					=> '<strong>Sponsor toegevoegd</strong><br>» %1$s',
	'LOG_DONATION_DELETED'	 					=> '<strong>Sponsor verwijderd</strong><br>» %1$s',
	'LOG_DONATION_GOAL_UPDATE'	 				=> '<strong>Donatie doel geüpdatet</strong>',
	'LOG_DONATION_IPN_UPDATE'	 				=> '<strong>Donatie IPN instellingen geüpdatet</strong>',
	'LOG_DONATION_HISTORY_DELETED'	 			=> '<strong>Donatie geschiedenis verwijderd</strong>',
	'LOG_DONATION_EMAIL'						=> '<strong>Zend e-mail naar verlopen gebruikers</strong><br>» %s',
	'LOG_DONATION_CREDITS_UPDATE'	 			=> '<strong>Instellingen voor donatie credits bijgewerkt</strong>',
	'LOG_DONATION_GROUP_TRANSFER_ADD'			=> '<strong>Overgedragen credits naar een groep</strong>',
	'LOG_DONATION_GROUP_TRANSFER_SET'			=> '<strong>Stel Credits in op een nieuwe waarde voor een groep</strong>',
	'LOG_DONATION_USER_CREDITS'					=> '<strong>Bewerkte credits</strong><br>» %1$s',
));
