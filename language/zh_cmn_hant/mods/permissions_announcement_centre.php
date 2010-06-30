<?php
/**
* permissions_announcement_centre [正體中文]
*
* @package language
* @version $Id: permissions_announcement_centre.php 127 2008-10-15 21:43:34Z lefty74 $
* @copyright (c) 2008 phpBB-TW rex,心靈捕手
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

if (empty($lang) || !is_array($lang))
{
   $lang = array();
}

// Adding new category
$lang['permission_cat']['announcement_centre']   = 'ACP 公告中心';

// Adding the permissions
$lang = array_merge($lang, array(
   // Moderator perms
   'acl_m_announcement_centre'      => array('lang' => '版主能更改論壇公告', 'cat' => 'announcement_centre'),

	// Admin perms
   'acl_a_announcement_centre'      => array('lang' => '管理員能更改/設定論壇公告', 'cat' => 'announcement_centre'),
));

?>