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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'DONATE'									=> 'Doneer',
	'DONATE_EXPLAIN'							=> 'Steun ons door een donatie te doen.',
	'DONORLIST'									=> 'Sponsors',
	'DONORLIST_EXPLAIN'							=> 'Bekijk de sponsorlijst.',
	'MINIMUM_DONATION_MESSAGE'					=> 'Het minimale donatiebedrag is %s %s',
	'SELECT_METHOD'								=> 'Selecteer de donatiemethode',
	'DONATION_TO'								=> 'Doneer aan',
	'AMOUNT'									=> 'Bedrag',
	'PAYPAL'									=> 'PayPal',	
	'PAYPAL_TITLE'								=> 'PayPal Donatie',
	'PAYPAL_DISABLED'							=> 'PayPal donaties zijn momenteel uitgeschakeld. Probeer het later nog eens.',
	'IPN_DISABLED'								=> 'IPN uitgeschakeld.',	
	'PAYZA'										=> 'Payza',	
	'PAYZA_TITLE'								=> 'Payza Donatie',
	'PAYZA_DISABLED'							=> 'Payza donaties zijn momenteel uitgeschakeld. Probeer het later nog eens.',
	'MONEYBOOKERS'								=> 'Moneybookers',	
	'MONEYBOOKERS_TITLE'						=> 'Moneybookers Donatie',
	'MONEYBOOKERS_DISABLED'						=> 'Moneybookers donaties zijn momenteel uitgeschakeld. Probeer het later nog eens.',
	'WEBMONEY'									=> 'WebMoney',	
	'WEBMONEY_TITLE'							=> 'WebMoney Donatie',
	'WEBMONEY_DISABLED'							=> 'WebMoney donaties zijn momenteel uitgeschakeld. Probeer het later nog eens.',
	'GOAL_TITLE'								=> 'Donatie doel',
	'GOAL_RECEIVED'								=> 'Ontvangen donaties',
	'GOAL'										=> 'Donatie doel',
	'GOAL_UNTIL'								=> 'Donaties totdat het doel is bereikt',
	'GOAL_REACHED'								=> 'Donatie doel is bereikt',	
	'LAST_FIVE_DONATIONS'						=> 'Laatste 5 donaties',
	'DONORS_LIST'								=> 'Sponsors',
	'DONORS_TOP_FIVE'							=> 'Top 5 sponsors',
	'DONATED'									=> 'gedoneerd',
	'VIA'										=> 'via',
	'ON'										=> 'op',
	'DONATION'									=> 'Donatie',
	'DONATION_TITLE'							=> 'Donatie Extensie',
	'DONATION_LICENSE' 							=> 'Licentie ongeldig',
	'DONATION_VERSION'							=> 'Versie',
	'DONATION_LAST'								=> 'Laatste donatie',
	'DONATION_PRIVATE'							=> '<em>Privé</em>',
	'DONATION_ADD_CHAT'							=> '[i][b]%1$s[/b] doneerde %2$s%3$s,- [b]%4$s[/b][/i] %5$s',
	'DONATIONS'									=> 'Donaties',
	'DONOR_USERNAME'							=> 'Gebruikersnaam',
	'DONOR_AMOUNT'								=> 'Bedrag',
	'DONOR_BY'									=> 'door',
	'DONOR_METHOD'								=> 'Methode',
	'DONOR_DATE'								=> 'Datum',
	'DONOR_DATE_MM_DD_YY'						=> 'MM/DD/YY',
	'DONOR_DATE_HH_MM'							=> 'HH/MM',
	'DONOR_LAST_DATE'							=> 'Laatste donatie datum',
	'DONOR_TOTAL_INFO'							=> '%1$sx. Donatie totaal: %2$s%3$s',
	'DONOR_TIMES_DONATED'						=> 'Aantal x gedoneerd',
	'DONOR_AMOUNT_TOTAL'						=> 'Totaal bedrag',
	'NO_DONORS'									=> 'Er zijn nog geen sponsors.',
	'NO_DONATIONS'								=> 'Er zijn nog geen donaties.',
	'LIST_DONOR'								=> '1 Sponsor',
	'LIST_DONORS'								=> '%s Sponsors',
	'SUCCESS_TITLE'								=> 'Donatie succesvol',
	'CANCEL_TITLE'								=> 'Donatie geannuleerd',
	'DONATION_DISABLED'							=> 'Donaties zijn momenteel uitgeschakeld. Probeer het later nog eens.',
	'DONORS_LIST_DISABLED'						=> 'Geen toestemming om sponsorlijst te zien.',
	'NO_NON_MEMBERS_DONATIONS'					=> 'Je moet een geregistreerde gebruiker zijn om te doneren',
	'NO_NON_MEMBERS_DONORS'						=> 'U moet een geregistreerde gebruiker zijn om de sponsorlijst te zien',
	'NOT_INSTALLED'								=> 'Donatie extensie is niet geïnstalleerd.',
	'ADMIN_NOTIFICATION_PM_SUBJECT' 			=> 'Je hebt een donatie',
	'DONATION_NOTIFICATION'		 				=> 'Donatie notificatie',
	'DONATION_THANKS'							=> 'Dank aan onze sponsors',
	'VIEWING_DONATE'							=> 'Bekijkt donatiepagina',
	'VIEWING_DONOR'								=> 'Bekijkt sponsorlijst',
	'CONTINUE_ON_PAYPAL'						=> 'Doorgaan met PayPal',
	'CONTINUE_ON_PAYZA'							=> 'Doorgaan met Payza',
	'CONTINUE_ON_MONEYBOOKERS'					=> 'Doorgaan met Moneybookers',
	'CONTINUE_ON_WEBMONEY'						=> 'Doorgaan met Webmoney',
	'CONNECTING_ON_PAYPAL'						=> 'Verbinden met PayPal',
	'DONATION_STEP_1'							=> '1',
	'DONATION_STEP_2'							=> '2',
	'DONATION_STEP_1_INNER'						=> 'Selecteer een bedrag',
	'DONATION_STEP_2_INNER_PAYPAL'				=> 'Ga veilig verder op PayPal',
	'DONATION_STEP_2_INNER_PAYZA'				=> 'Ga veilig verder met Payza',
	'DONATION_STEP_2_INNER_MONEYBOOKERS'		=> 'Ga veilig verder met Moneybookers',
	'DONATION_STEP_2_INNER_WEBMONEY'			=> 'Ga veilig verder met Webmoney',
	'DONATION_EXPIRY_DAYS'				=> [
		0 => 'Donatie vervalt vandaag',
		1 => 'Donatie vervalt binnen <strong>%1$d</strong> dag op',
		2 => 'Donatie vervalt binnen <strong>%1$d</strong> dagen op',
	],
	'DONATION_EXPIRY_DAYS_DONORLIST'	=> [
		0 => 'Donatie vervalt nooit',
		1 => 'Donatie vervalt in <strong>%1$d</strong> dag',
		2 => 'Donatie vervalt in <strong>%1$d</strong> dagen',
	],
	'DONATE_COLLAPSE_TITLE'				=> [
		0 => 'Verberg donatie informatie',
		1 => 'Toon donatie info',
	],
	'DONATION_SEPARATOR_DECIMAL'				=> '.',
	'DONATION_SEPARATOR_THOUSANDS'				=> ',',
	'DONATION_CREDITS'							=> 'donatie credits',
	'DONATION_CREDITS_USER'						=> 'donatie credits',
	'DONATION_CREDITS_USER_EXPLAIN'				=> 'Wijzig de leden donatie credits.',
	'DONATION_CREDITS_SET'						=> 'De credits van de gebruiker zijn bijgewerkt.<br><br>',
	'DONATION_CREDITS_EDIT_RETURN_INDEX'		=> '%1$sKlik hier om terug te keren naar de index.%2$s',
	'DONATION_CREDITS_EDIT_RETURN_POST'			=> '%1$sKlik hier om terug te keren naar het vorige bericht.%2$s',
	'DONATION_CREDITS_USER_MODIFY'				=> 'Donatie credits van gebruiker wijzigen',
	'DONATION_CREDITS_USER_MODIFY_EXPLAIN'		=> 'Hier kunt u de leden donatie credits wijzigen.<br>Nieuw bedrag instellen of Bedrag toevoegen of Bedrag aftrekken.',
	'DONATION_CREDITS_MODIFY'					=> '[Bewerk]',
	'DONATION_EDIT_SET_AMOUNT'					=> 'Nieuwe waarde',
	'DONATION_EDIT_ADD_AMOUNT'					=> 'Waarde toevoegen',
	'DONATION_EDIT_SUB_AMOUNT'					=> 'Waarde aftrekken',
	'DONATION_NUMBER_FORMAT_EXPLAIN'			=> 'Hint: Voer altijd waarden in zonder het scheidingsteken voor duizendtallen en decimalen met een punt, bijvoorbeeld 1000.50',
	//UCP
	'UCP_DONATION_TITLE'						=> 'Donaties',
	'UCP_DONATION_EXPLAIN'						=> 'Uw donaties aan deze site',
	'UCP_DONATION_SEE'							=> 'Bekijk uw donaties',
	'UCP_DONATION_SEE_EXPLAIN'					=> 'Andere leden kunnen je donaties zien.<br>Als je dit op nee zet, worden bedrag en het totale bedrag verborgen.',
));
