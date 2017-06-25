<?php
/**
 * Created by PhpStorm.
 * User: vench
 * Date: 25.06.17
 * Time: 21:39
 */

namespace vssaleconstructor\action;

use vssaleconstructor\Node;

interface IAction
{
    /**
     * @param Node $value
     * @param mixed $apply
     * @return void
     */
    function apply(Node $value, $apply);

}