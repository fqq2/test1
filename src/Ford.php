<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 2/14/19
 * Time: 11:57 AM
 */

final class Ford extends Car {

    public function accelerate() :int
    {
        return 2;

    }

    public function decelerate() :int
    {
        return -2;

    }

}