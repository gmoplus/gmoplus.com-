<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.9.3
 *  LICENSE: FL0255RKH690 - https://www.flynax.com/flynax-software-eula.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: gmoplus.com
 *  FILE: CONTROL.INC.PHP
 *  
 *  The software is a commercial product delivered under single, non-exclusive,
 *  non-transferable license for one domain or IP address. Therefore distribution,
 *  sale or transfer of the file in whole or in part without permission of Flynax
 *  respective owners is considered to be illegal and breach of Flynax License End
 *  User Agreement.
 *  
 *  You are not allowed to remove this information from the file without permission
 *  of Flynax respective owners.
 *  
 *  Flynax Classifieds Software 2025 | All copyrights reserved.
 *  
 *  https://www.flynax.com
 ******************************************************************************/

// Include PSR-4 autoloader 
require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php'; 

require_once(RL_CLASSES . 'rlDb.class.php');
require_once(RL_CLASSES . 'reefless.class.php');

$rlDb = new rlDb();
$reefless = new reefless();

/* load classes */
$reefless->connect(RL_DBHOST, RL_DBPORT, RL_DBUSER, RL_DBPASS, RL_DBNAME);
$reefless->loadClass('Debug');
$reefless->loadClass('Config');
$reefless->loadClass('Lang');
$reefless->loadClass('Valid');
$reefless->loadClass('Hook');
$reefless->loadClass('Listings');
$reefless->loadClass('Categories');

// load system configurations
$config = $rlConfig->allConfig();
$GLOBALS['config'] = $config;

$reefless->loadClass('ListingTypes');

$reefless->loadClass('Common');
$plugins = $rlCommon->getInstalledPluginsList();

// utf8 library functions
function loadUTF8functions()
{
    $names = func_get_args();

    if (empty($names)) {
        return false;
    }

    foreach ($names as $name) {
        if (file_exists(RL_LIBS . 'utf8' . RL_DS . 'utils' . RL_DS . $name . '.php')) {
            require_once RL_LIBS . 'utf8' . RL_DS . 'utils' . RL_DS . $name . '.php';
        }
    }
}
