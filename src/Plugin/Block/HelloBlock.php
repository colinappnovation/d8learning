<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Hello' Block
 *
 * @Block (
 *  id = "hello_block",
 *  admin_label = @Translation("Hello block"),   
 * )
 */
class HelloBlock extends BlockBase implements BlockPluginInterface {
    /**
     * {@inheritdoc}
     */
    public function build() {

        $config = $this->getConfiguration();

        return array (
            '#markup' => $this->t('Hello, World and @name!', 
                array('@name' => $config['name'])),
            '#attached' => array(
                'library' => array(
                    'hello_world/hello'
                    )
                )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state) {
        $form = parent::blockForm($form, $form_state);

        $config = $this->getConfiguration();

        $form['hello_block_name'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Who'),
            '#description' => $this->t('Who do you want to say hello to?'),
            '#default_value' => isset($config['name']) ? $config['name'] : '',
        );

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state) {
        $this->setConfigurationValue('name', $form_state->getValue('hello_block_name'));
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
        $default_config = \Drupal::config('hello_world.settings');
        return array(
            'name' => $default_config->get('default_name')
        );
    }
}
