<?php
$moduleType = 'MODULE';
$moduleName = 'MCM_TIMESTAMP_CREATE_ACCOUNT';
$prefix = $moduleType . '_' . $moduleName  . '_';

define($prefix . 'TITLE', 'Time trap / time lock to defend against bots that create a customer account © <a href="https://github.com/ModifiedCommunityModules/timestamp-create-account" target="_blank" style="color: #b0377e; font-weight: bold;">by p3e</a>');
define($prefix . 'LONG_DESCRIPTION', 'The minimum time the customer should need to fill in the form is 2 seconds.<br />Eventually 2 seconds are too short. This can be changed in the module settings.<br />If bots want to create an account directly with $_POST[\'action\'] == \'process\' (i.e. without having called the empty form in the same session before), this will be ignored as well.<br />br />together with MODULE: <a href="https://www.modified-shop. org/forum/index.php?topic=40980.0">Captcha with dice from store version 2.0.5.0</a> surely a good way to keep unwanted bots out of the store.<br /><br /><span style="color:#FF0000">But beware!</span> More and more browsers use form managers, which should make registration in stores easier! You could scare these customers away by using this extension! <br /><br />For this module you can ask support in the modified forum. However, there is no claim to support. Alternatively, a service provider can be engaged for a fee');
define($prefix . 'STATUS_TITLE', 'EN Status title from ' . $moduleType . '_' . $moduleName);
define($prefix . 'STATUS_DESC', 'EN Status description from ' . $moduleType . '_' . $moduleName);
