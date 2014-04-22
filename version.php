<?php
/**
 * @package   turnitintool
 * @copyright 2012 Turnitin
 */

if (!isset($plugin)) {
	$plugin = new stdClass();
}

$plugin->version  = 2013111405;  // The current module version (Date: YYYYMMDDXX)
$plugin->cron     = 1800;        // Period for cron to check this module (secs)
//$plugin->requires = 2007101509;  // 1.9+
$plugin->requires = 2010112400;  // 2.0+

/* ?> */
