<?php
/**
* for the index action in the index Controller
*/
class Brightgrove_Alex_Block_List extends Mage_Core_Block_Template
{
    public function getQuote()
    {
        $qoute = Mage::getSingleton('checkout/session')->getQuote();
        return $qoute;
    }

    public function getId()
    {
        $hlp1 = $this->helper('brightgrove_alex/array');
        $hlp2 = Mage::helper('brightgrove_alex/array');
        var_dump($hlp2::popArray([1,2,3,4,5]));
        //$id = $this->getRequest()->getParam('id', '******');
        $id = Mage::registry('asd');
        return $id;
    }
}