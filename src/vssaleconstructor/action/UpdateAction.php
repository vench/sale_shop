<?php
/**
 * Created by PhpStorm.
 * User: vench
 * Date: 25.06.17
 * Time: 22:02
 */

namespace vssaleconstructor\action;


use vssaleconstructor\Node;

class UpdateAction implements IAction
{

    /**
     * @param Node $value
     * @param mixed $apply
     * @return void
     */
    function apply(Node $value, $apply)
    {
        $value->setValue($apply);
    }
}