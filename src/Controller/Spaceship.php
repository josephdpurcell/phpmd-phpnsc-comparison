<?php

namespace PhpmdPhpnscComparison\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Spaceship {

  public function launch(Request $request) {
    # TODO: this should error because the class is used but no use statement exists
    $model = new \PhpmdPhpnscComparison\Model\Spaceship();

    $ship_class = $request->get('ship_class');
    $ship_name = $model->getShipName($ship_class);

    # TODO: this should trigger an error since the class is locally referenced
    $formatted_ship_name = ControllerHelper::formatShipName($ship_name);
    $response = new Response($formatted_ship_name);
    return $response;
  }

}

