<?php
class Pengo_Challenge_Block_Mymodule extends Mage_Core_Block_Template
{
    public function myfunction()
    {
        return "Hello tuts world";
    }
    
    public function getProducts(){
        return $products = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');
    }
    
    public function getBaseUrl(){
        return $baseUrl = Mage::getBaseUrl('media') . 'catalog/product/';
    }
    
    public function getQty($_product){
       return (int)Mage::getModel('cataloginventory/stock_item')->loadByProduct($_product)->getQty();
    }
}