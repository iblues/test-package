<?php

namespace Iblues\Test\Tests;

use Iblues\Test\Model\Test;
use PHPUnit\Framework\TestCase;

class testTest extends TestCase
{

    public function testTest()
    {
        $data = new Test();
        $return = $data->test();
        $this->assertEquals($return, 1);
    }
}
