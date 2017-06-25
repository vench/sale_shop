<?php
/**
 * Created by PhpStorm.
 * User: vench
 * Date: 25.06.17
 * Time: 20:25
 */

namespace vssaleconstructor;


/**
 * Class PromoAction
 * @package vssaleconstructor
 */
class PromoAction
{

    /**
     * @var Path
     */
    private $pathValue;

    /**
     * @var mixed
     */
    private $applyValue;

    /**
     * @var \vssaleconstructor\action\IAction
     */
    private $action;

    /**
     * PromoAction constructor.
     * @param Path $pathValue
     * @param mixed $applyValue
     * @param action\IAction $action
     */
    public function __construct(Path $pathValue, $applyValue, action\IAction $action)
    {
        $this->pathValue = $pathValue;
        $this->applyValue = $applyValue;
        $this->action = $action;
    }


    /**
     * @param Cart $cart
     */
    public function processCart(Cart $cart)
    {
        $node = $cart->findNodeByPath( $this->pathValue );
        if(!is_null($node)) {
            $this->action->apply( $node, $this->applyValue);
        }
    }
}