<?php
/**
 * Created by PhpStorm.
 * User: vench
 * Date: 25.06.17
 * Time: 21:32
 */

namespace vssaleconstructor;


/**
 * Class Node
 * @package vssaleconstructor
 * @todo Add synchronize value after update
 */
class Node
{

    /**
     * @var mixed
     */
    private $value;

    /**
     * Node constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value) {
        $this->value = $value;
    }
}