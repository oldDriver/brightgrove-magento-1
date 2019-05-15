<?php
class Brightgrove_Alex_Model_Observer
{
    public function checkSomething()
    {
        echo __METHOD__;
    }

    public function addProduct(Varien_Event_Observer $observer)
    {
        //$observer->getEvent();
        echo '<pre>';
//         print_r($observer->getEvent());
//         echo __METHOD__; exit;
        Mage::app()->getFrontController()->getResponse()->setBody(['*******']);
        exit;
    }
}