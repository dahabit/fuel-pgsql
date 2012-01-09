<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */
Autoloader::add_core_namespace('Pgsql');

Autoloader::add_classes(array(
	'Fuel\\Core\\Database_Pgsql_Connection'	=> __DIR__.'/classes/database/pgsql/connection.php',
	'Fuel\\Core\\Database_Pgsql_Result'		=> __DIR__.'/classes/database/pgsql/result.php',
));
