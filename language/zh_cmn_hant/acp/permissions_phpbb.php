<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [正體中文]
*
* @package language
* @version $Id: permissions_phpbb.php 8911 2008-09-23 13:03:33Z acydburn $
* @copyright (c) 2001 - 2007 phpBB TW Group (心靈捕手)
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> '動作',
		'content'		=> '內容',
		'forums'		=> '版面',
		'misc'			=> '雜項',
		'permissions'	=> '權限',
		'pm'			=> '私人訊息',
		'polls'			=> '投票',
		'post'			=> '文章',
		'post_actions'	=> '發表文章動作',
		'posting'		=> '發表',
		'profile'		=> '個人資料',
		'settings'		=> '設定',
		'topic_actions'	=> '發表主題動作',
		'user_group'	=> '會員 &amp; 群組',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> '會員權限',
		'a_'			=> '管理員權限',
		'm_'			=> '版主權限',
		'f_'			=> '版面權限',
		'global'		=> array(
			'm_'			=> '全域版主權限',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => '可以檢視個人資料、會員列表、以及誰在線上列表', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => '可以更改會員名稱', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => '可以更改密碼', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => '可以更改 e-mail 位址', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => '可以更改頭像', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => '可以更改預設會員群組', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => '可以發表附加檔案', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => '可以下載附加檔案', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => '可以保存文章草稿', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => '可以停用語詞過濾', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => '可以使用簽名檔', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => '可以發送私人訊息', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => '可以發送私人訊息給多位會員', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => '可以發送私人訊息給群組', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => '可以閱讀私人訊息', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => '可以編輯自己的私人訊息', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => '可以移除自己的私人訊息', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => '可以轉寄私人訊息', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => '可以 e-mail 私人訊息', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => '可以列印私人訊息', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => '可以在私人訊息中發表附加檔案', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => '可以在私人訊息中下載附加檔案', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => '可以在私人訊息中使用 BBCode', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => '可以在私人訊息中使用表情符號', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => '可以在私人訊息中發表圖片', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => '可以在私人訊息中發表 Flash 動畫', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => '可以發送 e-mail', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => '可以發送即時訊息', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => '可以不受灌水間隔限制', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => '可以隱藏上線狀態', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => '可以檢視隱藏上線會員', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => '可以搜尋討論區', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => '可以看見版面', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => '可以閱讀版面', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => '可以發表新的主題', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => '可以回覆主題', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => '可以使用主題/文章圖示', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => '可以發表公告文章', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => '可以發表置頂文章', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => '可以建立投票', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => '可以參與投票', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => '可以更改已經存在的投票', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => '可以發表附加檔案', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => '可以下載附加檔案', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => '可以使用簽名檔', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => '可以在文章中使用 BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => '可以在文章中使用表情符號', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => '可以在文章中發表圖片', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => '可以在文章中發表 Flash 動畫', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => '可以編輯自己的文章', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => '可以刪除自己的文章', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => '可以鎖定自己的主題', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => '可以推文', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => '可以檢舉文章', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => '可以訂閱版面', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => '可以列印主題', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => '可以 e-mail 主題', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => '可以搜尋版面', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => '可以不受灌水間隔限制', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => '增加文章數量<br /><em>請注意！這個設定只對新文章有效。</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => '可以不經審核發表文章', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => '可以編輯文章', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => '可以刪除文章', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => '可以審核文章', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => '可以關閉和刪除檢舉', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => '可以更改文章作者', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => '可以移動主題', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => '可以鎖定主題', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => '可以分割主題', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => '可以合併主題', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => '可以檢視主題細節', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => '可以發出警告<br /><em>這個設定只影響全域版主。它不是版面要素。</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => '可以管理封鎖<br /><em>這個設定只影響全域版主。它不是版面要素。</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => '可以修改討論區設定/檢查更新', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => '可以修改伺服器/通訊設定', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => '可以修改 Jabber 設定', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => '可以檢視 php 設定', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => '可以管理版面', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => '可以增加版面', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => '可以刪除版面', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => '可以修剪版面', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => '可以修改主題/文章圖示和表情符號', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => '可以修改過濾語詞', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => '可以設定 BBCode 標籤', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => '可以修改附加檔案的相關設定', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => '可以管理會員<em>這也包含可以在「誰在線上」列表看見會員。</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => '可以刪除/修剪會員', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => '可以管理群組', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => '可以增加群組', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => '可以刪除群組', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => '可以管理等級', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => '可以管理慣用的個人資料', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => '可以管理禁用的會員名稱', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => '可以管理封鎖', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => '可以檢視權限遮罩', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => '可以修改個別的群組權限', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => '可以修改個別的會員權限', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => '可以修改版面權限階級', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => '可以修改版主權限階級', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => '可以修改管理員權限階級', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => '可以修改會員權限階級', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => '可以管理角色', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => '可以使用其他權限', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => '可以管理風格', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => '可以檢視記錄', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => '可以清空記錄', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => '可以管理模組', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => '可以管理語言包', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => '可以發送大量 e-mail', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => '可以管理機器人', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => '可以管理檢舉/否決理由', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => '可以備份/還原資料庫', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => '可以管理搜尋後端和設定', 'cat' => 'misc'),
));

?>