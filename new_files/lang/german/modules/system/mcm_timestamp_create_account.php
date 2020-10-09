<?php
$moduleType = 'MODULE';
$moduleName = 'MCM_TIMESTAMP_CREATE_ACCOUNT';
$prefix = $moduleType . '_' . $moduleName  . '_';

define($prefix . 'TITLE', 'Zeitfalle / Zeitsperre zur Abwehr von Bots, die ein Kundenkonto erstellen © <a href="https://github.com/ModifiedCommunityModules/timestamp-create-account" target="_blank" style="color: #b0377e; font-weight: bold;">by p3e</a>');
define($prefix . 'LONG_DESCRIPTION', 'Als Minimum-Zeit die der Kunde zum Ausfüllen benötigen soll, sind zwei Sekunden vorgegeben.<br />Eventuell sind 2 Sekunden zu kurz angesetzt. Das kann in den Moduleinstellungen geändert werden.<br />Falls Bots direkt mit $_POST[\'action\'] == \'process\' ein Konto anlegen wollen (also ohne zuvor in der selben Session das leere Formular aufgerufen zu haben), wird dies ebenfalls ignoriert.<br /><br />Zusammen mit MODUL: <a href="https://www.modified-shop.org/forum/index.php?topic=40980.0">Captcha mit Würfeln ab Shopversion 2.0.5.0</a> sicherlich ein guter Weg um unerwünschte Bots aus dem Shop fern zu halten.<br /><br /><span style="color:#FF0000">Aber Vorsicht!</span> Immer mehr Browser verwenden auch Formularmanager, die gerade eine Registrierung in Shops erleichtern sollen! Diese Kunden könntet ihr euch durch Einsatz dieser Erweiterung vergraulen!<br /><br />Für dieses Modul kann Support freundlich im modified Forum erfragt werden. Ein Anspruch auf Support besteht jedoch nicht. Alternativ kann ein Dienstleister kostenpflichtig beauftragt werden.');
define($prefix . 'STATUS_TITLE', 'DE Status Title von ' . $moduleType . '_' . $moduleName);
define($prefix . 'STATUS_DESC', 'DE Status Description von ' . $moduleType . '_' . $moduleName);
