<?php
/**
 * Created by PhpStorm.
 * User: vench
 * Date: 25.06.17
 * Time: 21:50
 */

namespace vssaleconstructor\condition;


class EqualityCondition implements ICondition
{


    /**
     * @return string
     */
    public  function getName()
    {
        return __CLASS__;
    }

    /**
     * @param mixed $value
     * @param mixed $comparison
     * @return boolean
     */
    public function compare($value, $comparison)
    {
        var_dump($value, $comparison);
        return $value == $comparison;
    }
}