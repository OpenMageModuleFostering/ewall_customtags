<?php

class Ewall_Customtags_Model_Mysql4_Customtags extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the web_id refers to the key field in your database table.
        $this->_init('customtags/customtags', 'web_id');
    }
}
