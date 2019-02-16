<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 2/14/19
 * Time: 12:41 PM
 */

class Physics
{
    public static function acceleration($force, $mass) : float
    {
        $acceleration = $force * $mass;

        return $acceleration;
    }
}