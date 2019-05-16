<?php
class Brightgrove_Alex_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $id = $this->getRequest()->getParam('id');
        
        Mage::register('asd', '123');
        $this->loadLayout();
        // Block
        $block = $this->getLayout()->getBlock('bg_list');
        // snake case to camel case
        $block->setData('controller_id', $id);
        $id++;
        // create parameter
        $block->setDummyControllerId($id);
        
        $this->renderLayout();
        return $this;
    }

    public function newAction()
    {
        $this->loadLayout();
        $block = $this->getLayout()->getBlock('bg-');
        $block->setData('test', 'asdsad');
        $this->renderLayout();
        return $this;
        
        
    }

    public function editAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }

    public function deleteAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }
    
}