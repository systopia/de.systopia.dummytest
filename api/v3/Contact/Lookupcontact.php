<?php
use CRM_Dummytest_ExtensionUtil as E;

/**
 * Contact.LookupContact API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC/API+Architecture+Standards
 */
function _civicrm_api3_contact_Lookupcontact_spec(&$spec) {
  $spec['contact_id']['api.required'] = 1;
}

/**
 * Contact.LookupContact API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_contact_Lookupcontact($params) {

  $result = civicrm_api3('Contact', 'get', [
    'sequential' => 1,
    'id' => $params['contact_id'],
  ]);

  if ($result['is_error'] == 0 && isset($result[id])) {

    return civicrm_api3_create_success(['id' => $result['id']], $params, 'Contact', 'LookupContact');
  } else {
    throw new API_Exception(/*errorMessage*/ 'Unknown error.', /*errorCode*/ 1234);
  }
}
