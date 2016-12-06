<?php

 namespace Drupal\hello_world\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class HelloController extends ControllerBase {
     public function content() {
         return array(
             '#type' => 'markup',
             '#markup' => $this->t('Hello, World!'),
         );
     }
 }
