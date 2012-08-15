<?php

/**
 * Copyright 2012, openTracker. (http://opentracker.nu)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * @link          http://opentracker.nu openTracker Project
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @author Wuild
 * @package openTracker
 */

if(!defined("INCLUDED"))
    die("Access denied");

$wpref = new Pref("website");
?>
<html>
    <body>
        <img src="<?php echo $wpref->url ?>images/logo.png"><br />
        <?php echo $this->content; ?>
    </body>
</html>