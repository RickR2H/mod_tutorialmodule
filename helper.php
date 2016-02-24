<?php
/**
 * @copyright	Copyright (c) 2016 R2H (http://www.r2h.nl). All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

/**
 * R2H - Tutorial Module Helper Class.
 *
 * @package		Joomla.Site
 * @subpakage	TutorialModule
 */
class ModTutorialmoduleHelper
{
	/**
	 * Method to change relative path so images will be show in backend module editor field output.
	 *
	 * @param   JRegisty  $params  The parameters object.
	 *
	 * @return  string.
	 *
	 * @since   1.5
	 */
	public static function imgsourcereplace($params, $tutorialsource)
	{

		// Replace the images by ../images to make the source path correct for use in the backend
		$rightImageURL = str_replace('src="images','src="../images',$tutorialsource);

		// Return the code with the new URL's
		return $rightImageURL;

	}
}