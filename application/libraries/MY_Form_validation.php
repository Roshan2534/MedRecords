<?php
defined('BASEPATH') OR exit('no direct script access is allowed');

class MY_Form_validation extends CI_Form_validation
{
    function run($module='',$group='')
    {
        (is_object($module)) AND $this->CI=&$module;
        return parent::run($group);
    }
}