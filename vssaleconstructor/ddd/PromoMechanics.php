<?php
 

namespace vssaleconstructor\ddd;

/**
 * Description of PromoMechanics
 *
 * @author vench
 */
class PromoMechanics {

    /**
     *
     * @var int 
     */
    private $priority = 0;
    
    /**
     * List of conditpion promo
     *
     * @var type 
     */
    private $conditions = [];


    public function apply(Cart $cart) {}
}
