<?php

namespace PhpmdPhpnscComparison\Model;

# @TODO: This should trigger an error that it's defined but not used.
use Symfony\Component\HttpFoundation\Response;

class Spaceship {

  protected $storage = [];

  /**
   * @see https://memory-alpha.fandom.com/wiki/Federation_starships
   */
  public function getShipName($ship_class = '') {
    switch ($ship_class) {
      case 'galaxy':
        return 'NCC-1701-D';
      case 'intrepid':
        return 'NCC-74705';
      case 'miranda':
        return 'NCC-9844';
      default:
        return 'Shuttlecraft 02';
    }
  }

}

