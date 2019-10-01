<?php

use CRM_Dummytest_ExtensionUtil as E;
use Civi\Test\HeadlessInterface;
use Civi\Test\HookInterface;
use Civi\Test\TransactionalInterface;

/**
 * Contact.LookupContact API Test Case
 * This is a generic test class implemented with PHPUnit.
 * @group headless
 */
class api_v3_Contact_LookupContactTest extends \PHPUnit_Framework_TestCase {
//  use \Civi\Test\Api3TestTrait;

  /**
   * Civi\Test has many helpers, like install(), uninstall(), sql(), and sqlFile().
   * See: https://docs.civicrm.org/dev/en/latest/testing/phpunit/#civitest
   */
  public function setUpHeadless() {
//    return \Civi\Test::headless()
//      ->installMe(__DIR__)
//      ->apply();
  }

  /**
   * The setup() method is executed before the test is executed (optional).
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * The tearDown() method is executed after the test was executed (optional)
   * This can be used for cleanup.
   */
  public function tearDown() {
    parent::tearDown();
  }

  private function bootstrap_civicm() {
    //BOOTSTRAP_ME
  }

  /**
   * Simple example test case.
   *
   * Note how the function name begins with the word "test".
   */
  public function testApiExample() {

    $this->bootstrap_civicm();

    $result = civicrm_api3('Contact', 'lookupcontact', [
      'contact_id' => '1',
    ]);
    if ($result['values']['contact_id'] != "1") {
      throw new Exception("Dummy test failed");
    }
    print "Dummy test successful";
  }

}
