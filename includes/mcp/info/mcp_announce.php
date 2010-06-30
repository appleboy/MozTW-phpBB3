<?php
/**
*
* @package mcp
* @version $Id: mcp_announce.php 234 2009-07-12 22:07:50Z lefty74 $
* @copyright (c) 2008, 2009 lefty74
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
/**
* @package module_install
*/
class mcp_announce_info
{
	function module()
	{
		return array(
			'filename'	=> 'mcp_announce',
			'title'		=> 'MCP_ANNOUNCEMENTS_CENTRE',
			'version'	=> '1.2.1',
			'modes'		=> array(
				'front'				=> array('title' => 'MCP_ANNOUNCE_FRONT', 'auth' => 'acl_m_announcement_centre', 'cat' => array('MCP_ANNOUNCEMENT_CENTRE')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>