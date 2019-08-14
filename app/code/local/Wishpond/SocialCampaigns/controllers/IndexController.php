<?php
class Wishpond_SocialCampaigns_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/socialcampaigns?id=15 
    	 *  or
    	 * http://site.com/socialcampaigns/id/15 	
    	 */
    	/* 
		$socialcampaigns_id = $this->getRequest()->getParam('id');

  		if($socialcampaigns_id != null && $socialcampaigns_id != '')	{
			$socialcampaigns = Mage::getModel('socialcampaigns/socialcampaigns')->load($socialcampaigns_id)->getData();
		} else {
			$socialcampaigns = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($socialcampaigns == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$socialcampaignsTable = $resource->getTableName('socialcampaigns');
			
			$select = $read->select()
			   ->from($socialcampaignsTable,array('socialcampaigns_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$socialcampaigns = $read->fetchRow($select);
		}
		Mage::register('socialcampaigns', $socialcampaigns);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}