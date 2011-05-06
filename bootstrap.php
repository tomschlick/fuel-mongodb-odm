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

Autoloader::add_core_namespace('Mongodb_Odm');

Autoloader::add_classes(array(
	'Mongodb_Odm\\Mongo_Odm_Collection'	=> __DIR__.'/classes/mongo/odm/collection.php',
	'Mongodb_Odm\\Mongo_Odm_Database' 	=> __DIR__.'/classes/mongo/odm/database.php',
	'Mongodb_Odm\\Mongo_Odm_Document' 	=> __DIR__.'/classes/mongo/odm/document.php',
));