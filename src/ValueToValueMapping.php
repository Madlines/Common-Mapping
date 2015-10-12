<?php

namespace Madlines\Common\Mapping;

class ValueToValueMapping
{
   /**
    * @var string
    */
   private $from;

   /**
    * @var string
    */
   private $to;

   /**
    * @param string $from
    * @param string $to
    */
   public function __construct($from, $to)
   {
      $this->from = $from;
      $this->to = $to;
   }

   /**
    * @return string
    */
   public function getFrom()
   {
      return $this->from;
   }

   /**
    * @return string
    */
   public function getTo()
   {
      return $this->to;
   }
}
