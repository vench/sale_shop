<?php

namespace vssaleconstructor\condition;

/**
 * Created by PhpStorm.
 * User: vench
 * Date: 25.06.17
 * Time: 20:39
 */
interface ICondition
{

    /**
     * @return string
     */
    function getName();

    /**
     * @param mixed $value
     * @param mixed $comparison
     * @return boolean
     */
    function compare($value, $comparison);

}