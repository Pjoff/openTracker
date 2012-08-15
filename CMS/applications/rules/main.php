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

$this->setTitle("Rules");
$db = new DB("rules");
$db->setColPrefix("rule_");
$db->select("rule_lang = '" . CURRENT_LANGUAGE . "'");
if (!$db->numRows())
    $db->select("rule_lang = '" . DEFAULT_LANGUAGE . "'");
$db->nextRecord();
echo htmlformat($db->content, true);
?>