<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * HelloController.
 */
class HelloController extends ControllerBase {
  /**
   * Return page content to client browser.
   *
   * @return array
   *         Render array.
   */
  public function pageContent() {
    return array(
      '#type'   => 'markup',
      '#markup' => $this->t('Hello, World!'),
    );
  }

}
