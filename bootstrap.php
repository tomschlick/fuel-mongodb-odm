<?php

/**
 * Mongodb Odm for Fuel
 *
 * @package		Mongodb Odm
 * @version		1.0
 * @author		Tom Schlick (tom@tomschlick.com)
 * @link		http://github.com/tomschlick/fuel-mongodb-odm
 * 
 */

Autoloader::add_classes(array(
	'Mongo_Odm\\Collection'	=> __DIR__.'/classes/collection.php',
	'Mongo_Odm\\Database' 	=> __DIR__.'/classes/database.php',
	'Mongo_Odm\\Document' 	=> __DIR__.'/classes/document.php',
));