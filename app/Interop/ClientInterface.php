<?php
/**
 * Created by PhpStorm.
 * User: maxjf1
 * Date: 04/07/18
 * Time: 20:35
 */

namespace App\Interop;


interface ClientInterface
{
    static function login($username, $password);
}