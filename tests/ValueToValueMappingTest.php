<?php

namespace Madlines\Common\Mapping\Tests;

use Madlines\Common\Mapping\ValueToValueMapping;

class MapTest extends \PHPUnit_Framework_TestCase
{
    public function testOK()
    {
        $mapping = new ValueToValueMapping('foo', 'bar');

        $this->assertEquals('foo', $mapping->getFrom());
        $this->assertEquals('bar', $mapping->getTo());
    }
}
