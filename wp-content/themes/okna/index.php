<?php
/**
* @package   VeltheMe
* @author    http://velerbu.com
* @copyright Copyright (C) Velerbu
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get warp
$warp = require(__DIR__.'/warp.php');

// load main theme file, located in /layouts/theme.php
echo $warp['template']->render('theme');
