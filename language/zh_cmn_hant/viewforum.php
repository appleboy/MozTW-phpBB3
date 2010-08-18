<?php
/**
*
* viewforum [正體中文]
*
* @package language
* @version $Id: viewforum.php,v 1.18 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2001 - 2007 phpBB TW Group (Mac)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> '最近討論的主題',
	'ANNOUNCEMENTS'			=> '公告',

	'FORUM_PERMISSIONS'		=> '版面權限',

	'ICON_ANNOUNCEMENT'		=> '公告',
	'ICON_STICKY'			=> '置頂',

	'LOGIN_NOTIFY_FORUM'	=> '您有關於本版面的通知，請登入後檢視它。',

	'MARK_TOPICS_READ'		=> '將所有主題標示為已閱讀',

	'NEW_POSTS_HOT'			=> '有新文章【熱門的】',
	'NEW_POSTS_LOCKED'		=> '有新文章【鎖定的】',
	'NO_NEW_POSTS_HOT'		=> '無新文章【熱門的】',
	'NO_NEW_POSTS_LOCKED'	=> '無新文章【鎖定的】',
	'NO_READ_ACCESS'		=> '您沒有閱讀本版面文章的權限。',

	'POST_FORUM_LOCKED'		=> '版面已鎖定',

	'TOPICS_MARKED'			=> '這個版面的主題已被標示為已閱讀。',

	'VIEW_FORUM'			=> '檢視版面',
	'VIEW_FORUM_TOPIC'		=> '1 個主題',
	'VIEW_FORUM_TOPICS'		=> '%d 個主題',
));

?>