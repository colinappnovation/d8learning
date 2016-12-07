<?php

namespace Drupal\Tests\hello_world\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the Drupal 8 hello_world functionality.
 *
 * @group hello_world
 */
class HelloWorldTest extends BrowserTestBase {
    public static $modules = array('block', 'node', 'hello_world');
    private $user;

    public function setUp() {
        parent::setUp();

        $this->user = $this->DrupalCreateUser(array(
            'administer site configuration'
        ));
    }

    /**
     * Tests that the configuration link / page returns OK.
     */
    public function testConfigurationPageAvailable() {
        $this->drupalLogin($this->user);
        $this->drupalGet('/hello');
        $this->assertResponse(200);
    }
}