<?php

/**
 * Nifty Port
 *
 * This is a port of Ryan Bates nifty generators for Rails.
 *
 * @package    Nifty Port
 * @version    0.1 Beta
 * @author     Ryan Foster
 * @link       http://github.com/rfosta/nifty-port
 */

Autoloader::add_core_namespace('Gravy');

Autoloader::add_classes(array(
	'Gravy\\Gravy' => __DIR__.'/classes/gravy.php'
));
