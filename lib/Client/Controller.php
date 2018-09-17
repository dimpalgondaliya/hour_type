<?php

namespace WHMCS\Module\Addon\Hour_Type\Client;

/**
 * Sample Client Area Controller
 */
class Controller {

    /**
     * Index action.
     *
     * @param array $vars Module configuration parameters
     *
     * @return array
     */
    public function index($vars)
    {
        // Get common module parameters
        $modulelink = $vars['modulelink']; // eg. addonmodules.php?module=addonmodule
        $version = $vars['version']; // eg. 1.0
        $LANG = $vars['_lang']; // an array of the currently loaded language variables

        // Get module configuration parameters
        $configTextField = $vars['Text Field Name'];
        $configPasswordField = $vars['Password Field Name'];
        $configCheckboxField = $vars['Checkbox Field Name'];
        $configDropdownField = $vars['Dropdown Field Name'];
        $configRadioField = $vars['Radio Field Name'];
        $configTextareaField = $vars['Textarea Field Name'];

        return array(
            'pagetitle' => 'Hour Pack Type',
            'breadcrumb' => array(
                'index.php?m=hour_type' => 'Hour Pack Type',
            ),
            'templatefile' => 'publicpage',
            'requirelogin' => false, // Set true to restrict access to authenticated client users
            'forcessl' => false, // Deprecated as of Version 7.0. Requests will always use SSL if available.
            'vars' => array(
                'modulelink' => $modulelink,
                'configTextField' => $configTextField,
                'customVariable' => 'your own content goes here',
            ),
        );
    }

    /**
     * Secret action.
     *
     * @param array $vars Module configuration parameters
     *
     * @return array
     */
    public function secret($vars)
    {
        // Get common module parameters
        $modulelink = $vars['modulelink']; // eg. addonmodules.php?module=addonmodule
        $version = $vars['version']; // eg. 1.0
        $LANG = $vars['_lang']; // an array of the currently loaded language variables

        // Get module configuration parameters
        $configTextField = $vars['Text Field Name'];
        $configPasswordField = $vars['Password Field Name'];
        $configCheckboxField = $vars['Checkbox Field Name'];
        $configDropdownField = $vars['Dropdown Field Name'];
        $configRadioField = $vars['Radio Field Name'];
        $configTextareaField = $vars['Textarea Field Name'];


        $table = "tblclients";
        $fields = "id";
        $result = select_query($table,$fields,$where);
        $data = mysql_fetch_array($result);
        echo "<pre>";print_r($data);

        return array(
            'pagetitle' => 'Hour Pack Type',
            'breadcrumb' => array(
                'index.php?m=hour_type' => 'Hour Pack Type',
                'index.php?m=hour_type&action=secret' => 'Secret Page',
            ),
            'templatefile' => 'secretpage',
            'requirelogin' => true, // Set true to restrict access to authenticated client users
            'forcessl' => false, // Deprecated as of Version 7.0. Requests will always use SSL if available.
            'vars' => array(
                'modulelink' => $modulelink,
                'configTextField' => $configTextField,
                'tblclients' => $clientdata,
                'customVariable' => 'your own content goes here',
            ),
        );
    }
}
