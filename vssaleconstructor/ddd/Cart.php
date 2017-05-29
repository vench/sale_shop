<?php

namespace vssaleconstructor\ddd;

/**
 * Description of Cart
 *
 * @author vench
 */
class Cart {

    /**
     *
     * @var Product[]
     */
    private $products = [];
    
    /**
     *
     * @var int 
     */
    private $discount = 0;
    
    /**
     * List vouchers
     * @var array string []
     */
    private $vouchers = [];
}
