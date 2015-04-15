<?php
/**
*
* @package phpBB Extension - Acme Demo
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
    'ALREADY_GIVEN_FEEDBACK'    =>  'Već si dao povratni odgovor ovom korisniku u ovoj temi.',
    'ACL_CAT_TRADER'            =>  'Trgovac',
    'ACL_A_TRADER'              =>  'Možeš upravljati povratnim odgovorima',
    'ACL_M_TRADER_EDIT'         =>  'Možeš urediti ili obrisati povratne odgovore',
    'ACL_U_TRADER_VIEW'         =>  'Možeš vidjeti povratni odgovor trgovcu',
    'ACL_U_TRADER_POST'         =>  'Možeš ostaviti povratni odgovor trgovcu',
    'TOPIC_NOT_FOUND'           =>  'Ova tema ne postoji.',
    'LOG_IN'                    =>  'Prijavi se na forum kako bi ostavio povratni odgovor',
    'USER_NOT_FOUND'            =>  'Korisnik kojeg želiš ocijeniti ne postoji',
    'CANNOT_RATE_SELF'          =>  'Ne možeš sam sebi dati povratni odgovor',
    'E_FEEDBACK_NOT_FOUND'      =>  'Povratni odgovor nije pronađen',
    'E_FEEDBACK_DELETED'        =>  'Uspješno je obrisan povratni odgovor!',
    'E_CANNOT_EDIT'             =>  'Ne možeš urediti povratni odgovor',
    'E_SUCCESSFUL_EDIT'         =>  'Uspješno je uređen povratni odgovor',
    'E_CANNOT_RETURN_FEEDBACK'  =>  'Ne možeš uzvratiti povratni odgovor ovoj osobi',
    'E_CANNOT_LEAVE_FEEDBACK'   =>  'Ne možeš ostaviti povratni odgovor - nedostaju ti potrebne dozvole.',
    'E_CANNOT_VIEW_FEEDBACK'    =>  'Ne možeš vidjeti povratni odgovor - nedostaju ti potrebne dozvole.',
    'FEEDBACK_SUCCESS'          =>  'Korisnik je uspješno ocijenjen!',
    'FEEDBACK_TITLE'            =>  'Ostavi povratni odgovor za ',
    'FEEDBACK_TITLE_EDIT'       =>  'Uredi povratni odgovor za ',
    'FEEDBACK_ROLE'             =>  'Bio si',
    'TRADER_EXPERIENCE'         =>  'Ukupno iskustvo',
    'TRADER_VIEW_FEEDBACK'      =>  'Pogledaj povratni odgovor trgovca',
    'COMMENTS_TITLE'            =>  'Dodatni komentari',
    'COMMENTS_TITLE_EDIT'       =>  'Uredi komentare',
    'SHORT_COMMENT'             =>  'Kratki komentar: (Vidljiv svima) <br> (Najmanje 10 znakova)' ,
    'LONG_COMMENT'              =>  'Dodatni komentari: (Vidljivi samo kupcu, prodavatelju i osoblju foruma)',
    'REASON'                    =>  'Razlog',
    'REPORT_DESC'               =>  'Molimo te da objasniš razlog prijave ovog povratnog odgovora',
    'REPORT_TITLE'              =>  'Prijavi ovaj povratni odgovor',
    'REPORT_SUCCESS'            =>  'Ovaj je povratni odgovor uspješno prijavljen.',
    'REPORT_OPEN_TITLE'         =>  'Otvorene prijave trgovca',
    'REPORT_CLOSED_TITLE'       =>  'Zatvorene prijave trgovca',
    'REPORT_OPEN_DESC'          =>  'Ovo je lista svih prijavljenih povratnih odgovora trgovca koji čekaju na obradu.',
    'REPORT_CLOSED_DESC'        =>  'Ovo je lista svih prijavljenih povratnih odgovora trgovca koji su razriješeni.',
    'LOG_TRADER_REPORT_DELETED' =>  '<strong>Obrisana prijava trgovca</strong><br />',
    'LOG_TRADER_REPORT_CLOSED'  =>  '<strong>Zatvorena prijava trgovca</strong><br />',
    'ORIGINAL_COMMENT'          =>  'Prvotni komentar',
    'SUMMARY'                   =>  'Kratki pregled',
    'PRIVATE_COMMENT'           =>  'Privatni komentar',
    'TOPIC_PREFIX_FOR_SALE'     =>  '[PRODAJEM]',
    'TOPIC_PREFIX_WANT_TO_BUY'  =>  '[KUPUJEM]',
    'TOPIC_PREFIX_WANT_TO_TRADE'=>  '[MIJENJAM]',
    'TRADER_SCORE'  			=>  'Ocjena trgovca',
    'POSITIVE'    				=>  'Pozitivno',
    'GIVE_FEEDBACK'    			=>  'Predaj povratni odgovor',
    'RATED'    					=>  'Ocijenjen',
    'FEEDBACK_BY_AUTHOR'    	=>  'od',
    'FEEDBACK_TO'    			=>  'za',
    'EXPLANATION_PLACEHOLDER'	=>	'Unesi objašnjenje...',
    'NEGATIVE'					=>	'Negativno',
    'NEUTRAL'					=>  'Neutralno',
    'ALL_FEEDBACK_RECEIVED'		=>	'Svi primljeni povratni odgovori',
    'RECEIVED_FROM_BUYERS'	    =>	'Od kupaca',
    'RECEIVED_FROM_SELLERS'	    =>	'Od prodavatelja',
    'RECEIVED_FROM_TRADES'	    =>	'Od zamjena',
    'LEFT_FOR_OTHERS'			=>	'Ostavljeno za ostalo',
    'RATING_SUMMARY'			=>	'Ukupna ocjena',
    'FEEDBACK_TYPE'             =>  'Tip',
    'FEEDBACK_DELETED'          =>  'OBRISANO',
    'FEEDBACK_WAS_DELETED'		=>  'Ovaj je povratni odgovor obrisan',
    'TRADER_TYPE_TRADER'        =>  'Zamjenitelj',
    'TRADER_TYPE_BUYER'         =>  'Kupac',
    'TRADER_TYPE_SELLER'        =>  'Prodavatelj',
    'RETURN_FEEDBACK'			=>  'Vrati povratni odgovor',
    'EDIT_THIS_FEEDBACK'		=>  'Uredi ovaj povratni odgovor',
    'REPORT_THIS_FEEDBACK'		=>  'Prijavi ovaj povratni odgovor',
    'SEE_PRIVATE_COMMENT'       =>  'Vidi privatne komentare',
    'NO_FEEDBACK_TO_DISPLAY'    =>  'Nema povratnih odgvoora za prikazati.',
    'DELETE_FEEDBACK_Q'         =>  'Obrisati povratni odgovor?',
    'TRADER_RATING_STATISTICS'  =>  'Statistika ocjene trgovca',
    'POSITIVE_FEEDBACK'         =>  'Pozitivni povratni odgovor',
    'TOTAL_POSITIVE_FEEDBACK'   =>  'Svi pozitivni povratni odgovori',
    'RECENT_RATINGS'            =>  'Nedavne ocjene',
    'PAST'                      =>  'Zadnjih',
    '6_MONTHS'                  =>  '6 mjeseci',
    '12_MONTHS'                 =>  '12 mjeseci',
    'X_FEEDBACK'                =>  'povratni odgovor',
    'X_FEEDBACKS'               =>  'povratni odgovori',
    'I_AM'                      =>  'Ja',
    'BUYING'                    =>  'Kupujem',
    'SELLING'                   =>  'Prodajem',
    'TRADING'                   =>  'Mijenjam',
    'BUY'                       =>  'Kupnja',
    'SELL'                      =>  'Prodaja',
    'TRADE'                     =>  'Zamjena',
    'FEEDBACK_PAGE'             =>  'Stranica povratnih odgovora',
    'ENABLE_TRADER'             =>  'Omogući trgovinu',
    'ENABLE_TRADER_DESC'        =>  'Ako ih ima, odredi koje su trgovačke teme uključene.',
    'TRADER_FEEDBACK'           =>  'Povratni odgovor trgovca',
    'TRADER_FEEDBACK_FOR'       =>  'Povratni odgovor trgovca za ',
));