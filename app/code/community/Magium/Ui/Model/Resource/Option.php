<?php

class Magium_Ui_Model_Resource_Option extends Mage_Core_Model_Resource_Db_Abstract
{

    public function _construct()
    {
        $this->_init('magium_ui/option', 'entity_id');
    }

}
