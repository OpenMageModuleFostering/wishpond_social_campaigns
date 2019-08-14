<?php
class Wishpond_SocialCampaigns_Block_SocialCampaigns extends Mage_Core_Block_Template {
  public function _prepareLayout()
  {
    return parent::_prepareLayout();
  }

  public function getSocialCampaigns()
  {
    if (!$this -> hasData('socialcampaigns')) {
      $this -> setData('socialcampaigns', Mage::registry('socialcampaigns'));
    }
    return $this -> getData('socialcampaigns');
  }

}
