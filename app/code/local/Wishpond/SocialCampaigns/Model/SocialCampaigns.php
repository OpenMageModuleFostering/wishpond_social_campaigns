<?php

class Wishpond_SocialCampaigns_Model_SocialCampaigns extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('socialcampaigns/socialcampaigns');
    }
}