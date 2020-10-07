<?php

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class McmTimestampCreateAccount extends StdModule
{
    public function __construct()
    {
        $this->init('MODULE_MCM_TIMESTAMP_CREATE_ACCOUNT');
    }
       
    public function display()
    {
        return $this->displaySaveButton();
    }

    public function install()
    {
        parent::install();

    }

    public function remove()
    {
        parent::remove();
    }
}
