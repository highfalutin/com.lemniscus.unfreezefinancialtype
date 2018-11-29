<?php

require_once 'unfreezefinancialtype.civix.php';
use CRM_Unfreezefinancialtype_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function unfreezefinancialtype_civicrm_config(&$config) {
  _unfreezefinancialtype_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function unfreezefinancialtype_civicrm_xmlMenu(&$files) {
  _unfreezefinancialtype_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function unfreezefinancialtype_civicrm_install() {
  _unfreezefinancialtype_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function unfreezefinancialtype_civicrm_postInstall() {
  _unfreezefinancialtype_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function unfreezefinancialtype_civicrm_uninstall() {
  _unfreezefinancialtype_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function unfreezefinancialtype_civicrm_enable() {
  _unfreezefinancialtype_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function unfreezefinancialtype_civicrm_disable() {
  _unfreezefinancialtype_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function unfreezefinancialtype_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _unfreezefinancialtype_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function unfreezefinancialtype_civicrm_managed(&$entities) {
  _unfreezefinancialtype_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function unfreezefinancialtype_civicrm_caseTypes(&$caseTypes) {
  _unfreezefinancialtype_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function unfreezefinancialtype_civicrm_angularModules(&$angularModules) {
  _unfreezefinancialtype_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function unfreezefinancialtype_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _unfreezefinancialtype_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function unfreezefinancialtype_civicrm_entityTypes(&$entityTypes) {
  _unfreezefinancialtype_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function unfreezefinancialtype_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function unfreezefinancialtype_civicrm_navigationMenu(&$menu) {
  _unfreezefinancialtype_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _unfreezefinancialtype_civix_navigationMenu($menu);
} // */

/**
 * Implements hook_civicrm_buildForm().
 *
 * On the contribution edit form, unfreeze the Financial Type field.
 *
 * @param string $formName
 * @param CRM_Core_Form $form
 */
function unfreezefinancialtype_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Contribute_Form_Contribution') {
    $elementId = CRM_Utils_Array::value('financial_type_id', $form->_elementIndex, FALSE);
    if ($elementId === FALSE) {
      return;
    }
    $element = $form->_elements[$elementId];
    $element->unfreeze();
    ///CRM_Core_Error::debug_var('element', $element);
  }
}