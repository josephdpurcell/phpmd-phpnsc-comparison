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

    $response = new Response("<h1>Your ship is: {$ship_name}</h1>");
    return $response;
  }

}

