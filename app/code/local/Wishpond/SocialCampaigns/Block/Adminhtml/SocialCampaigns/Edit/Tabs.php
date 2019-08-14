<?php

class Wishpond_SocialCampaigns_Block_Adminhtml_SocialCampaigns_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('socialcampaigns_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('socialcampaigns')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('socialcampaigns')->__('Item Information'),
          'title'     => Mage::helper('socialcampaigns')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('socialcampaigns/adminhtml_socialcampaigns_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}