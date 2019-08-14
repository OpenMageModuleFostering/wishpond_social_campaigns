<?php

class Wishpond_SocialCampaigns_Model_Mysql4_SocialCampaigns extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the socialcampaigns_id refers to the key field in your database table.
        $this->_init('socialcampaigns/socialcampaigns', 'socialcampaigns_id');
    }
}