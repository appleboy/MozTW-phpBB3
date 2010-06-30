<?php
/**
*
* @package acp
* @version $Id: info_acp_announcement_centre.php 126 2008-10-12 22:10:09Z lefty74 $ 
* @copyright (c) 2008 phpBB-TW rex,心靈捕手
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge language entries into the common lang array
$lang = array_merge($lang, array(
	'ACP_ANNOUNCEMENTS_CENTRE_CONFIG'	=> '設定',
	'ACP_ANNOUNCEMENTS_CENTRE'			=> '公告中心',
	'LOG_ANNOUNCEMENT_UPDATED'			=> '<strong>公告已更新</strong>',
	'LOG_ANNOUNCEMENT_CONFIG_UPDATED'	=> '<strong>公告設定已更新</strong>',
));
?>