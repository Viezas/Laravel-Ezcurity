<?php

namespace Config;

use Carbon\Carbon;

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

  public static function defaultServices()
  {
    return [
      [
        'name' => 'Lot de 3 cameras',
        'description' => 'Lot de 3 cameras basique',
        'price' => 29.99,
        'category' => 'camera',
        'stripe_id' => 'price_1J009WHiPm1KQtiIrniGHck6'
      ],
      [
        'name' => 'Lot de 4 détecteurs',
        'description' => 'Lot de 4 détecteurs comprenant : 3x détecteurs de fumée et 1x détecteurs de mouvements',
        'price' => 29.99,
        'category' => 'sensor',
        'stripe_id' => 'price_1J2ZfsHiPm1KQtiI6xqVo5s6'
      ],
      [
        'name' => 'Badge de sécurité basique',
        'description' => 'Forfait comprenant un seul badge de sécurité',
        'price' => 10.00,
        'category' => 'keycard',
        'stripe_id' => 'price_1J2Zn6HiPm1KQtiIvVhGisEp'
      ],
      [
        'name' => 'Système biométrique basique',
        'description' => 'Forfait comprenant un seul appareil de système biométrique',
        'price' => 29.99,
        'category' => 'biometric',
        'stripe_id' => 'price_1J2ZqnHiPm1KQtiIJ698aN2v'
      ],
      [
        'name' => 'Application',
        'description' => 'Application Ezcurity permettant de gérer vos appareils à distance',
        'price' => 7.49,
        'category' => 'app',
        'stripe_id' => 'price_1J2ZrpHiPm1KQtiItCYjtOOH'
      ],
      [
        'name' => 'Alarme de sécurité basique',
        'description' => 'De simples alarmes de sécurité par lot de 3',
        'price' => 14.23,
        'category' => 'alarm',
        'stripe_id' => 'price_1J2ZsyHiPm1KQtiIfl5IVi56'
      ],
    ];
  }
}