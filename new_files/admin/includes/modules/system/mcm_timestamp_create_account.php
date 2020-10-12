<?php

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class mcm_timestamp_create_account extends StdModule
{
    public function __construct()
    {
        $this->init('MODULE_MCM_TIMESTAMP_CREATE_ACCOUNT');
        
        $this->addKey('CHK_TIME_MIN');
    }

    public function process($file)
    {
    }

    public function display(): array
    {

		return array('text' => '<br />' . '<div align="center">' . xtc_button(BUTTON_SAVE) .
			             xtc_button_link(BUTTON_CANCEL, xtc_href_link(FILENAME_MODULE_EXPORT, 'set=' . $_GET['set'] . '&module=' . strtolower(str_replace('MODULE_', '', $this->modulePrefix)))) . '</div>'
			         );
    }

    public function install()
    {
        parent::install();
        
        if (!defined($this->modulePrefix . '_CHK_TIME_MIN')) $this->addConfiguration('CHK_TIME_MIN', '2', 6, 2);

    }

    public function remove()
    {
        parent::remove();
        
        $this->deleteConfiguration('CHK_TIME_MIN');
    }
}
