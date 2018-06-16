<?php defined('_JEXEC') or die;
/*
 * @package     Joomla.Plugin
 * @subpackage  Editors-xtd.ytvideo
 * @copyright   Copyright (C) 2017 Aleksey A. Morozov. All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

class plgEditorsXtdYtvideobtnInstallerScript
{
	function postflight( $type, $parent )
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->update('#__extensions')->set('enabled=1')->where('type='.$db->q('plugin'))->where('element='.$db->q('ytvideobtn'));
		$db->setQuery( $query )->execute();
	}
}