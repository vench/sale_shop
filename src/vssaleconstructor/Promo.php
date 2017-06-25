<?php
/**
 * Created by PhpStorm.
 * User: vench
 * Date: 25.06.17
 * Time: 20:50
 */

namespace vssaleconstructor;


class Promo
{

    /**
     * @var PromoCondition[]
     */
    private $promoConditions = [];


    /**
     * @var PromoAction[]
     */
    private $promoActions = [];


    /**
     * @param PromoAction $promoAction
     */
    public function setPromoAction($promoAction)
    {
        $this->promoActions[] = $promoAction;
    }

    /**
     * @param PromoCondition $promoCondition
     */
    public function setPromoCondition($promoCondition)
    {
        $this->promoConditions[] = $promoCondition;
    }


    /**
     * @param Cart $cart
     * @return boolean
     */
    public function processCart(Cart $cart) {
        foreach ($this->promoConditions as $promoCondition) {
           if(! $promoCondition->processCart($cart) ) {
               return false;
           }
        }

        foreach ($this->promoActions as $promoAction) {
            $promoAction->processCart($cart);
        }

        return true;
    }
}