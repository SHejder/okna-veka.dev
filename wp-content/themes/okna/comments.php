<?php
/**
* @package   VeltheMe
* @author    http://velerbu.com
* @copyright Copyright (C) Velerbu
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get warp
$warp = require(__DIR__.'/warp.php');

// load template file, located in /warp/systems/wordpress/layouts/comments.php
echo $warp['template']->render('comments');
