<?php

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ExampleController.
 */
class ExampleController extends ControllerBase {

  /**
   * Content.
   *
   * @return string
   *   Return Hello string.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: content')
    ];
  }

  public function hoge() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('どうも〜')
    ];
  }


}
