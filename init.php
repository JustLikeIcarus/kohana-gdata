<?php defined('SYSPATH') or die('No direct script access.');


require Kohana::find_file('Zend', 'loader/autoloader');
/* Set autoloader for Zend */
spl_autoload_register(array('Zend_Loader_Autoloader', 'autoload'));