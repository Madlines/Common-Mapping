<?php

namespace Madlines\Common\Mapping;

class Mapper
{
    /**
     * @var array|ValueToValueMapping[]
     */
    private $map;

    /**
     * @var array|ValueToValueMapping[]
     */
    private $reverseMap;

    /**
     * @param ValueToValueMapping $mapping
     * @return $this
     */
    public function addMapping(ValueToValueMapping $mapping) {
        $this->map[$mapping->getFrom()] = $mapping;
        $this->reverseMap[$mapping->getTo()] = $mapping;

        return $this;
    }

    /**
     * @param $value
     * @return null|string
     */
    public function map($value)
    {
        if (!isset($this->map[$value])) {
            return null;
        }

        return $this->map[$value]->getTo();
    }

    /**
     * @param $value
     * @return null|string
     */
    public function reverseMap($value)
    {
        if (!isset($this->reverseMap[$value])) {
            return null;
        }

        return $this->reverseMap[$value]->getFrom();
    }
}
