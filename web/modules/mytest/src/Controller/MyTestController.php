<?php

namespace Drupal\mytest\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class MyTestController.
 */
class MyTestController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello')
    ];
  }

}
