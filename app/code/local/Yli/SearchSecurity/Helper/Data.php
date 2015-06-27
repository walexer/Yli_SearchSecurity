<?php 

class Yli_SearchSecurity_Helper_Data extends Mage_CatalogSearch_Helper_Data
{
    public function isSensitive($query)
    {
    
        $flag = false;
    
        if(!preg_match("/^[a-zA-Z0-9\x{4e00}-\x{9fa5}\s]+$/u", $query)){
            $flag = true;
        }
    
        return $flag;
    }
}