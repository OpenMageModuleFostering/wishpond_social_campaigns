<?php

class Wishpond_SocialCampaigns_Block_Adminhtml_SocialCampaigns_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'socialcampaigns';
        $this->_controller = 'adminhtml_socialcampaigns';
        
        $this->_updateButton('save', 'label', Mage::helper('socialcampaigns')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('socialcampaigns')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('socialcampaigns_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'socialcampaigns_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'socialcampaigns_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('socialcampaigns_data') && Mage::registry('socialcampaigns_data')->getId() ) {
            return Mage::helper('socialcampaigns')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('socialcampaigns_data')->getTitle()));
        } else {
            return Mage::helper('socialcampaigns')->__('Add Item');
        }
    }
}