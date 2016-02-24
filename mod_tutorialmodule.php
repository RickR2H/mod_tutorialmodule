<?php
/**
 * @copyright	@copyright	Copyright (c) 2016 R2H (http://www.r2h.nl). All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$tutorial1  = ModTutorialmoduleHelper::imgsourcereplace($params, $params->get('tutorial1',''));
$tutorial2  = ModTutorialmoduleHelper::imgsourcereplace($params, $params->get('tutorial2',''));
$tutorial3  = ModTutorialmoduleHelper::imgsourcereplace($params, $params->get('tutorial3',''));
$tutorial4  = ModTutorialmoduleHelper::imgsourcereplace($params, $params->get('tutorial4',''));
$tutorial5  = ModTutorialmoduleHelper::imgsourcereplace($params, $params->get('tutorial5',''));

$class_sfx  = htmlspecialchars($params->get('class_sfx'));

require(JModuleHelper::getLayoutPath('mod_tutorialmodule', $params->get('layout', 'default')));