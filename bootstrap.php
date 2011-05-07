<?php

/**
 * Gravy
 *
 *Gravatar Helper for FuelPHP
 *
 * @package    Gravy
 * @version    1.0
 * @author     Ryan Foster
 * @link       http://github.com/rfosta/gravy
 */

Autoloader::add_core_namespace('Gravy');

Autoloader::add_classes(array(
	'Gravy\\Gravy' => __DIR__.'/classes/gravy.php'
));
