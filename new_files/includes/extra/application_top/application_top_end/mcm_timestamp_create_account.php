<?php
/*
* p3e Zeitstempel Create Account 2019-10-23
* diese Datei sollte im Verzeichnis shop\includes\extra\application_top\application_top_end stehen
* CHECK_TIME_MIN entspricht der Zeit in Sekunden, die der Kunde zum Ausfüllen mindestens benötigen soll 
* (default=2) - falls Bots durchkommen schrittweise erhöhen
*/

if (!defined('MODULE_MCM_TIMESTAMP_CREATE_ACCOUNT_STATUS') || MODULE_MCM_TIMESTAMP_CREATE_ACCOUNT_STATUS != 'true') {
    return;
}

defined('MODULE_MCM_TIMESTAMP_CREATE_ACCOUNT_CHECK_TIME_MIN') || define('MODULE_MCM_TIMESTAMP_CREATE_ACCOUNT_CHECK_TIME_MIN', 2);

function mcmTimeStampCreateAccountInvoke()
{
    $prefix = 'mcmTimestampCreateAccount';

    if (basename($_SERVER["SCRIPT_NAME"], '.php') != 'create_account' && basename($_SERVER["SCRIPT_NAME"], '.php') != 'create_guest_account') {
        return;
    }

    $action = $_POST['action'] ?? '';

    if ($action == 'process') {
        if (isset($_SESSION[$prefix]['timeCheck'])) {
            if (time() - $_SESSION[$prefix]['timeCheck'] < MODULE_MCM_TIMESTAMP_CREATE_ACCOUNT_CHECK_TIME_MIN) {
                // smells like bot - back to the start page
                unset($_SESSION[$prefix]['timeCheck']);
                xtc_redirect(xtc_href_link(FILENAME_DEFAULT));
            }
        } else {
            xtc_redirect(xtc_href_link(FILENAME_DEFAULT));
        }
    } else {
        $_SESSION[$prefix]['timeCheck'] = time(); // time stamp
    }
}

mcmTimeStampCreateAccountInvoke();