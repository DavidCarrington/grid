<?php

// Represents details of transfers

namespace KateMorley\Grid\State;

class Transfers extends Map {

  public const BELGIUM         = 'belgium';
  public const FRANCE          = 'france';
  public const IRELAND         = 'ireland';
  public const NETHERLANDS     = 'netherlands';
  public const NORWAY          = 'norway';
  public const PUMPED_STORAGE  = 'pumped';

  public const KEYS = [
    self::BELGIUM         => 'Belgium',
    self::FRANCE          => 'France',
    self::IRELAND         => 'Ireland',
    self::NETHERLANDS     => 'Netherlands',
    self::NORWAY          => 'Norway',
    self::PUMPED_STORAGE  => 'Pumped storage'
  ];

  protected const KEY_COMPONENTS = [
    self::BELGIUM        => ['nemo'],
    self::FRANCE         => ['ifa', 'ifa2', 'eleclink'],
    self::IRELAND        => ['moyle', 'ewic'],
    self::NETHERLANDS    => ['britned'],
    self::NORWAY         => ['nsl'],
    self::PUMPED_STORAGE => ['pumped_storage_pumping', 'pumped']
  ];

}
