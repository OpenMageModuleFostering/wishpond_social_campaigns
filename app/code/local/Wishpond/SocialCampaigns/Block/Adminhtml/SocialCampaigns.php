<?php
class Wishpond_SocialCampaigns_Block_Adminhtml_SocialCampaigns extends Mage_Adminhtml_Block_Template
{

  protected $_iframeURLBase = '';
  protected $_iframeURLDomain = '';

  public function __construct()
  {
    $this->_controller = 'adminhtml_socialcampaigns';
    $this->_blockGroup = 'socialcampaigns';
    $this->_iframeURLDomain = 'https://www.wishpond.com/';
    $this->_iframeURLBase = $this->_iframeURLDomain . 'central/merchant_signups/new?type=campaigns&plain=true&referral=magento&autologin=true&utm_campaign=campaigns&utm_source=integration&utm_medium=magento';
    $this->setTemplate('socialcampaigns/socialcampaigns.phtml');
    // $this->_setActiveMenu('promo/socialcampaigns');
    parent::__construct();
  }

  public function getIFrameURL()
  {
    // return $this->_iframeDomain;
    $site_url = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB);
    $params = array(
      'email' => $this->getAdminEmail(),
      'key' => urlencode(sha1(php_uname("n") . $site_url)),  // Same as used in WordPress plugin
      'redirect_to' => $this->getWPHomeURL()
    );

    return $this->_iframeURLBase . '&' . http_build_query($params);
  }

  public function getWPHomeURL()
  {
    return $this->_iframeURLDomain . 'central/social_campaigns';
  }

  protected function getUserObject()
  {
    $userId = Mage::getSingleton('admin/session')->getUser()->getId();
    $user = Mage::getModel("admin/user")->load($userId);
    return $user;
  }

  protected function getAdminEmail()
  {
    return $this->getUserObject()->getEmail();
  }

}