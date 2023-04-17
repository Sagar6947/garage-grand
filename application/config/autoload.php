<?php
defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('email', 'session', 'cart', 'table', 'upload', 'user_agent', 'form_validation', 'encrypt' , 'database');

$autoload['drivers'] = array();

// mail_helper, email_helper, details
$autoload['helper'] = array('url', 'common_helper', 'form', 'html', 'date', 'security');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('Login_model', 'Dashboard_model', 'CommonModal');
