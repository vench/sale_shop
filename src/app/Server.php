<?php

 
namespace app;

/**
 * Description of Server
 *
 * @author vench
 */
class Server implements \vsapp\proxy\AnnotationFilterInterface {
    
    
    public function __construct() {
    
    }
    
    public function execAfter($object, $name, $result) {
        var_dump(__METHOD__); exit();
    }

    /**
     * 
     * @param type $object
     * @param type $name
     * @param type $arguments 
     */
    public function execBefore($object, $name, &$arguments) {
          var_dump(__METHOD__); exit();
    }

    public function execException($object, $name, $exception) {
        var_dump(__METHOD__); exit();
    }

}
