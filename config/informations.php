<?php

namespace Config;

class information
{
  public static function allowedServices()
  {
    return [
      'sensor',
      'camera',
      'keycard',
      'biometric',
      'app',
      'alarm'
    ];
  }
}