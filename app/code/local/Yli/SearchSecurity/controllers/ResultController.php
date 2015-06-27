<?php 

require_once(Mage::getModuleDir('controllers','Mage_CatalogSearch').DS.'ResultController.php');
class Yli_SearchSecurity_ResultController extends Mage_CatalogSearch_ResultController
{
    public function preDispatch()
    {
        parent::preDispatch();
        
        $query = trim($this->getRequest()->getParam('q'));
        if(Mage::helper('searchsecurity')->isSensitive($query)){
            return $this->_forward('empty');
        }
    }
}