<?php
/**
 * Created by PhpStorm.
 * User: vench
 * Date: 25.06.17
 * Time: 20:25
 */

namespace vssaleconstructor;


class Path
{

    /**
     * @var string
     */
    private $path;

    public function __construct( $path )
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }




}