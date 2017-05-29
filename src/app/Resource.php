<?php

 
namespace app;

/**
 * Description of Resource
 *
 * @author vench
 */
class Resource implements \vsapp\IResource {
    
    /**
     * 
     * @return string
     */
    public function getPath() {
        return dirname(__FILE__) . '/../resource';
    }

}
