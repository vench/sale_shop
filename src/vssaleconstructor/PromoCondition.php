<?php
/**
 * Created by PhpStorm.
 * User: vench
 * Date: 25.06.17
 * Time: 20:27
 */

namespace vssaleconstructor;




class PromoCondition
{

    /**
     * @var \vssaleconstructor\condition\ICondition
     */
    private $condition;

    /**
     * @var Path
     */
    private $pathValue;

    /**
     * @var mixed
     */
    private $compareValue;

    /**
     * PromoCondition constructor.
     * @param condition\ICondition $condition
     * @param Path $pathValue
     * @param mixed $compareValue
     */
    public function __construct(condition\ICondition $condition, Path $pathValue, $compareValue)
    {
        $this->condition = $condition;
        $this->pathValue = $pathValue;
        $this->compareValue = $compareValue;
    }


    /**
     * @param Cart $cart
     * @return bool
     */
    public function processCart(Cart $cart) {
        $node = $cart->findNodeByPath( $this->pathValue );
        return $this->condition->compare($node->getValue(), $this->compareValue);
    }

}