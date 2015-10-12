<?php

namespace Madlines\Common\Mapping\Tests;

use Madlines\Common\Mapping\Mapper;
use Madlines\Common\Mapping\ValueToValueMapping;

class MapperTest extends \PHPUnit_Framework_TestCase
{
    public function testMapping()
    {
        $map = new Mapper();

        $map->addMapping(new ValueToValueMapping('foo', 'bar'));
        $map->addMapping(new ValueToValueMapping('lorem', 'ipsum'));
        $map->addMapping(new ValueToValueMapping('dolor', 'amet'));

        $this->assertEquals('bar', $map->map('foo'));
        $this->assertEquals('ipsum', $map->map('lorem'));
        $this->assertEquals('amet', $map->map('dolor'));
        $this->assertNull($map->map('abc'));

        $this->assertEquals('foo', $map->reverseMap('bar'));
        $this->assertEquals('lorem', $map->reverseMap('ipsum'));
        $this->assertEquals('dolor', $map->reverseMap('amet'));
        $this->assertNull($map->reverseMap('abc'));


    }
}
