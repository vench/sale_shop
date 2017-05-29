<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace vssaleconstructor\ddd;

/**
 * Description of Product
 *
 * @author vench
 */
class Product {

    /**
     * Unique code
     * 
     * @var string
     * @required
     */
    private $code;
    
    /**
     *
     * @var int 
     */
    private $discount = 0;
    
    
    /**
     * 
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * 
     * @param string $code
     */
    public function setCode(string $code) {
        $this->code = $code;
    }


}
