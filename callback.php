<?php
/**
 *
 *
 * ClientExec Plugin
 *
 * ClientExec Payumoney Payment Gateway Plugin
 *
 * @Author : Amit Mittal
 * 
 * Version : 1.0
 *
 * Release Date : 11 Apr 2022 
 *
 * Contact : info@bitsstech.com
 *
 *
 */

$_GET['fuse'] = 'billing';
$_GET['action'] = 'gatewaycallback';
$_GET['plugin'] = 'payu';
chdir('../../..');
require_once dirname(__FILE__).'/../../../library/front.php';
