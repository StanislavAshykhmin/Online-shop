<?php
/**
 * Created by PhpStorm.
 * User: stanislav
 * Date: 14.03.18
 * Time: 3:48
 */

namespace Test\Controllers;

use Controllers\SiteController;
use PHPUnit\Framework\TestCase;


class SiteControllerTest  extends TestCase
{
    public function testSum()
    {
        $a = 1;
        $b = 2;
        $res = $a+$b;
        self::assertEquals(3,$res);
    }
    public function testAnotherSum()
    {
        $a = 1;
        $b = 2;
        $res = $a+$b;
        self::assertNotEquals(4,$res);
    }

}

