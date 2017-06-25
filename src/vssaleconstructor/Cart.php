<?php
/**
 * Created by PhpStorm.
 * User: vench
 * Date: 25.06.17
 * Time: 20:51
 */

namespace vssaleconstructor;


/**
 * Class Cart
 * @package vssaleconstructor
 */
class Cart
{

    /**
     * @var \stdClass
     */
    private $plainCart;


    /**
     * Cart constructor.
     * @param null|\stdClass $plainCart
     */
    function __construct($plainCart = null)
    {

        if(is_null($plainCart))  {
            $this->plainCart = new \stdClass();
        } else {
            $this->plainCart = $plainCart;
        }
    }

    /**
     * @param Path $path
     * @return Node
     */
    public function findNodeByPath( Path $path ) {

        $parts = explode('.', $path->getPath());
        $value = null;
        $cart = $this->plainCart;
        foreach ($parts as $part) {
            if(property_exists($cart, $part)) {
                $value = $cart->{$part};
            } else if(method_exists($cart, 'get' . ucfirst($part))) {
                $value = call_user_func([$cart, 'get' . ucfirst($part)]);
            } else {
                return null;
            }
        }

        return new Node($value);
    }

}