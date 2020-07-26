<?php

namespace KstatGOMS\Routing;

abstract class Middleware
{
  abstract public static function process();
}