<?php
	/*
	 * p3e Zeitstempel Create Account 2019-10-23
	 * diese Datei sollte im Verzeichnis shop\includes\extra\application_top\application_top_end stehen
	 * CHK_TIME_MIN entspricht der Zeit in Sekunden, die der Kunde zum Ausfüllen mindestens benötigen soll 
	 * (default=2) - falls Bots durchkommen schrittweise erhöhen
	 */

	defined('CHK_TIME_MIN') || define('CHK_TIME_MIN', 2);

	if (basename($_SERVER["SCRIPT_NAME"], '.php') == 'create_account' || 
		basename($_SERVER["SCRIPT_NAME"], '.php') == 'create_guest_account')
	{
        if (!isset($_POST['action']) || 
			(isset($_POST['action']) && $_POST['action'] != 'process'))
		{
			$_SESSION['timechk'] = time();   // Zeitstempel
        }
        
		if (isset($_POST['action']) && $_POST['action'] == 'process')
		{
            if (isset($_SESSION['timechk']))
			{
                if (time() - $_SESSION['timechk'] < CHK_TIME_MIN)
				{
                    // stinkt nach Bot - ab auf die Startseite
                    unset ($_SESSION['timechk']);
                    xtc_redirect(xtc_href_link(FILENAME_DEFAULT));
                }
            } else {
                xtc_redirect(xtc_href_link(FILENAME_DEFAULT));
			}
        }
	}
