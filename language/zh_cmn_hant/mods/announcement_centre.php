<?php
/** 
*
* acp_announcements_centre [正體中文]
*
* @package language
* @version $Id: announcement_centre.php 191 2009-03-17 17:56:06Z lefty74 $ 
* @copyright (c) 2008 phpBB-TW rex,心靈捕手
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}


/**
* DO NOT CHANGE
*/
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

// Announcement  settings
$lang = array_merge($lang, array(
	'ACP_ANNOUNCEMENT_TITLE'					=> 'ACP 公告中心',
	'ACP_ANNOUNCEMENT_TITLE_EXPLAIN'			=> '在這裡，您可以編輯論壇公告。您可以選擇誰才可以看到這些公告；另外，您也可以給訪客顯示不一樣的公告。',
	'ANNOUNCEMENTS_CONFIG'					=> '設定公告',
	
	'ANNOUNCEMENT_ENABLE'					=> '顯示論壇公告',
	'ANNOUNCEMENT_ALIGN'					=> '網站公告對齊的位置',
	'ANNOUNCEMENT_ALIGN_EXPLAIN'			=> '指出您想如何對齊網站公告的位置。',
	'ANNOUNCEMENT_GUESTS_ALIGN'				=> '訪客公告對齊的位置',
	'ANNOUNCEMENT_GUESTS_ALIGN_EXPLAIN'		=> '指出您想如何對齊訪客公告的位置。',
	'ANNOUNCEMENT_SHOW'						=> '顯示網站公告給',
	'ANNOUNCEMENT_SHOW_INDEX'				=> '僅在論壇首頁顯示公告',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS'			=> '顯示會員生日當作論壇公告內容',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS_EXPLAIN'	=> '顯示當前的生日（如果生日啟用）作為公告（比網站公告內容優先排序）。',
	'ANNOUNCEMENT_SHOW_GROUP'				=> '選擇可以看到論壇公告之群組',
	'ANNOUNCEMENT_SHOW_GROUP_EXPLAIN'		=> '只有在顯示論壇公告給「群組」時，此功能才有作用。',
	'ANNOUNCEMENT_BIRTHDAY_AVATAR'			=> '在生日公告內容中顯示個人頭像',
	'ANNOUNCEMENT_BIRTHDAY_AVATAR_EXPLAIN'	=> '只有在「顯示會員生日當作論壇公告內容」選擇為「是」時，此功能才有作用。',
	'ANNOUNCEMENT_DRAFT_PREVIEW'			=> '公告草稿預覽',
	'ANNOUNCEMENT_TITLE'					=> '論壇公告標題',
	'ANNOUNCEMENT_TITLE_EXPLAIN'			=> '在此區塊輸入論壇公告標題；<br />留下空白，會以預設標題顯示。',
	'ANNOUNCEMENT_DRAFT'					=> '公告草稿',
	'ANNOUNCEMENT_DRAFT_EXPLAIN'			=> '在此編輯公告草稿內容。',
	'ANNOUNCEMENT_TEXT'						=> '論壇公告',
	'ANNOUNCEMENT_TEXT_EXPLAIN'				=> '在此編輯「論壇公告」內容：<br />輸入版面 ID、主題 ID、或是文章 ID，使用第一篇或最後發表的文章做為公告內容。<br />公告內容的優先順序依照：<br />1. 版面 ID，如果沒有輸入，那麼以<br />2. 主題 ID，如果沒有輸入，那麼以<br />3. 文章 ID，如果沒有輸入，那麼以<br />4. 依照論壇公告內容。',
	'ANNOUNCEMENT_TEXT_MCP_EXPLAIN'			=> '您可以在此更改論壇公告。',
	'ANNOUNCEMENT_TEXT_MCP_EXPLAIN_NOTE'	=> '注意：這個功能只有當論壇公告不是文章內容時才有效。',
	'ANNOUNCEMENT_TEXT_MCP_NOEDIT'			=> '目前尚未能更改論壇公告！',
	'ANNOUNCEMENT_ENABLE_GUESTS'			=> '顯示不一樣的公告給訪客',
	'ANNOUNCEMENT_ENABLE_GUESTS_EXPLAIN'	=> '如果顯示論壇公告給「訪客」或「所有使用者」，那麼此功能失效。',
	'ANNOUNCEMENT_TITLE_GUESTS'				=> '訪客公告標題',
	'ANNOUNCEMENT_TITLE_GUESTS_EXPLAIN'		=> '在此區塊輸入訪客公告標題；<br />留下空白，會以預設標題顯示。',
	'ANNOUNCEMENT_TEXT_GUESTS'				=> '訪客公告',
	'ANNOUNCEMENT_TEXT_GUESTS_EXPLAIN'		=> '在此編輯「訪客公告」內容。',
	'ACP_ANNOUNCEMENTS_CENTRE'				=> '公告中心',
	'ACP_ANNOUNCEMENTS_CENTRE_CONFIG'		=> '設定公告中心',

	'MCP_ANNOUNCEMENTS_CENTRE'				=> 'MCP 公告中心',
	'MCP_ANNOUNCE_FRONT'					=> 'MCP 首頁',

	'ANNOUNCEMENT_UPDATED'					=> '公告已更新！',
	'ANNOUNCEMENT_GOTOPOST'					=> '[繼續閱讀]',
	'ANNOUNCEMENT_GOPOST'					=> '顯示文章連結',
	'ANNOUNCEMENT_GOPOST_EXPLAIN'			=> '如果要將文章顯示於公告，將會顯示文章連結。',

	'COPY_TO_ANNOUNCEMENT_SHORT'			=> '複製到論壇公告',
	'COPY_TO_GUEST_ANNOUNCEMENT_SHORT'		=> '複製到訪客公告',
	'COPY_TO_ANNOUNCEMENT'					=> '複製到論壇公告',
	'COPY_TO_GUEST_ANNOUNCEMENT'			=> '複製到訪客公告',

	'ANNOUNCEMENT_SHOW_BIRTHDAYS_AND_ANNOUNCE' 			=> '同時顯示會員生日以及論壇公告內容',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS_AND_ANNOUNCE_EXPLAIN' 	=> '如果選擇「是」，將同時顯示生日以及論壇公告。',

	'ANNOUNCEMENT_AVA_MAX_SIZE'				=> '頭像尺寸最大限制',
	'ANNOUNCEMENT_AVA_MAX_SIZE_EXPLAIN'		=> '輸入欲顯示於公告中心的的頭像尺寸。',
	
	'ANNOUNCEMENT_SHOW_BIRTHDAYS_ALWAYS' 				=> '即使顯示論壇公告已設定為「否」，還是會顯示生日公告',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS_ALWAYS_EXPLAIN' 		=> '如果設定為「是」將會開啟生日公告，即使顯示論壇公告已設定為「否」。當顯示論壇公告為「是」，這個選項將會無效。',

	'ANNOUNCEMENT_FORUM_ID'			=> '版面 ID',
	'ANNOUNCEMENT_TOPIC_ID'			=> '主題 ID',
	'ANNOUNCEMENT_POST_ID'			=> '文章 ID',
	'ANNOUNCEMENT_LATEST_POST'		=> '最後一篇文章',
	'ANNOUNCEMENT_FIRST_POST'		=> '第一篇文章',
	'ANNOUNCEMENT_EVERYONE'			=> '所有使用者',
	'ANNOUNCEMENT_GROUPS'			=> '群組',
	'ANNOUNCEMENT_GUESTS'			=> '訪客',
	'ANNOUNCEMENT_LEFT_ALIGNED'		=> '靠左',
	'ANNOUNCEMENT_CENTER_ALIGNED'	=> '置中',
	'ANNOUNCEMENT_RIGHT_ALIGNED'	=> '靠右',
	
	//Installation vars
	// Installation file stuff, not needed anymore after installation is complete
	'AC_TABLE_CREATED'		=> 	'公告中心資料表以及設定欄位已經建立。',
	'AC_MODULE_ADDED'		=> 	'公告中心模組已經增加。',
	'AC_CONFIGS_CREATED'	=> 	'公告中心設定欄位已經建立。',
	'AC_VERSION_UPDATED'	=> 	'公告中心版本已經更新。',
	'AC_INSTALL_COMPLETE'	=> 	'<strong>公告中心安裝已完成。請刪除 /install/ 資料夾！</strong>',
	'AC_INSTALL_RETURN'		=> 	'<br /><br /><br />按 %s此%s 返回論壇首頁。',
	'AC_INSTALL_REDIRECT'	=> 	'請稍後！您將導向於完成安裝。',
	'AC_UNINSTALL_REDIRECT'	=> 	'請稍後！您將導向於完成刪除。',

	'AC_PREV_TABLE_DELETE'	=>	'公告中心資料表已經刪除。<br />',
	'AC_MODULE_READDED'		=> 	'公告中心模組已經再增加。',

	'AC_TABLE_CONFIG_DELETE'	=> 	'公告中心資料表以及設定欄位已經刪除。<br />',
	'AC_MODULE_DELETED'			=> 	'公告中心模組已經刪除。<br />',
	'AC_DELETE_COMPLETE'		=> 	'<strong>公告中心安裝已刪除完成。請刪除 /install/ 資料夾！</strong>',
	'AC_BACKUP_WARN'			=> 	'執行前，請確認您已經備份您的資料庫！',
	'AC_INSTALL_DESC'			=> 	'這安裝檔案將建立資料庫資料表/欄位，以及增加適當的模組。<br />請點選底下合適的行為：',
	'AC_UPGRADE_DESC'			=> 	'這安裝檔案將升級/刪除資料庫資料表/欄位，以及增加/移除適當的模組。<br />請點選底下合適的行為：',
	
	'AC_NEW_INSTALL'		=> 	'新的安裝',
	'AC_UPGRADE'			=> 	'升級到 %s',
	'AC_UP_TO_DATE'			=> 	'目前安裝在您系統的版本是 %s，它是最新的版本。',
	'AC_UNINSTALL'			=> 	'反安裝',
	'AC_PERM_CREATED'		=> 	'公告中心權限已經建立。',

																			
	'AC_DESCRIPTION' 		=>	'增加公告區塊到論壇首頁。',
));

?>