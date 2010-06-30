<?php
/**
*
* acp_common [正體中文]
*
* @package language
* @version $Id: common.php 9382 2009-03-17 11:54:26Z acydburn $
* @copyright (c) 2001 - 2007 phpBB TW Group (動機不明, 心靈捕手)
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> '管理員',
	'ACP_ADMIN_LOGS'			=> '管理員記錄',
	'ACP_ADMIN_ROLES'			=> '管理員角色',
	'ACP_ATTACHMENTS'			=> '附加檔案',
	'ACP_ATTACHMENT_SETTINGS'	=> '附加檔案設定',
	'ACP_AUTH_SETTINGS'			=> '認證設定',
	'ACP_AUTOMATION'			=> '自動',
	'ACP_AVATAR_SETTINGS'		=> '頭像設定',

	'ACP_BACKUP'				=> '備份',
	'ACP_BAN'					=> '封鎖',
	'ACP_BAN_EMAILS'			=> '封鎖的 e-mail',
	'ACP_BAN_IPS'				=> '封鎖的 IP',
	'ACP_BAN_USERNAMES'			=> '封鎖的會員名稱',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> '討論區基本組態',
	'ACP_BOARD_FEATURES'		=> '討論區特色',
	'ACP_BOARD_MANAGEMENT'		=> '討論區管理',
	'ACP_BOARD_SETTINGS'		=> '討論區設定',
	'ACP_BOTS'					=> '管理機器人',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> '資料庫',
	'ACP_CAT_DOT_MODS'			=> '外掛',
	'ACP_CAT_FORUMS'			=> '版面',
	'ACP_CAT_GENERAL'			=> '一般',
	'ACP_CAT_MAINTENANCE'		=> '維護',
	'ACP_CAT_PERMISSIONS'		=> '權限',
	'ACP_CAT_POSTING'			=> '發表',
	'ACP_CAT_STYLES'			=> '風格',
	'ACP_CAT_SYSTEM'			=> '系統',
	'ACP_CAT_USERGROUP'			=> '會員及群組',
	'ACP_CAT_USERS'				=> '會員',
	'ACP_CLIENT_COMMUNICATION'	=> '客戶端通訊',
	'ACP_COOKIE_SETTINGS'		=> 'Cookie 設定',
	'ACP_CRITICAL_LOGS'			=> '錯誤紀錄',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> '自訂個人資料欄位',

	'ACP_DATABASE'				=> '資料庫管理',
	'ACP_DISALLOW'				=> '不允許',
	'ACP_DISALLOW_USERNAMES'	=> '不允許的會員名稱',

	'ACP_EMAIL_SETTINGS'		=> 'E-mail 設定',
	'ACP_EXTENSION_GROUPS'		=> '管理副檔名群組',

	'ACP_FORUM_BASED_PERMISSIONS'	=> '版面基本權限',
	'ACP_FORUM_LOGS'				=> '版面記錄',
	'ACP_FORUM_MANAGEMENT'			=> '版面管理',
	'ACP_FORUM_MODERATORS'			=> '版面版主',
	'ACP_FORUM_PERMISSIONS'			=> '版面權限',
	'ACP_FORUM_ROLES'				=> '版面角色',

	'ACP_GENERAL_CONFIGURATION'		=> '一般的組態',
	'ACP_GENERAL_TASKS'				=> '一般的任務',
	'ACP_GLOBAL_MODERATORS'			=> '全域版主',
	'ACP_GLOBAL_PERMISSIONS'		=> '全域權限',
	'ACP_GROUPS'					=> '群組',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> '群組的版面權限',
	'ACP_GROUPS_MANAGE'				=> '管理群組',
	'ACP_GROUPS_MANAGEMENT'			=> '群組管理',
	'ACP_GROUPS_PERMISSIONS'		=> '群組的權限',

	'ACP_ICONS'					=> '主題圖示',
	'ACP_ICONS_SMILIES'			=> '主題圖示/表情符號',
	'ACP_IMAGESETS'				=> '圖檔組',
	'ACP_INACTIVE_USERS'		=> '未啟用的會員',
	'ACP_INDEX'					=> 'ACP 首頁',

	'ACP_JABBER_SETTINGS'		=> 'Jabber 設定',

	'ACP_LANGUAGE'				=> '語言管理',
	'ACP_LANGUAGE_PACKS'		=> '語言包',
	'ACP_LOAD_SETTINGS'			=> '負荷設定',
	'ACP_LOGGING'				=> '記錄',

	'ACP_MAIN'					=> 'ACP 首頁',
	'ACP_MANAGE_EXTENSIONS'		=> '管理副檔名',
	'ACP_MANAGE_FORUMS'			=> '管理版面',
	'ACP_MANAGE_RANKS'			=> '管理等級',
	'ACP_MANAGE_REASONS'		=> '管理檢舉/拒絕理由',
	'ACP_MANAGE_USERS'			=> '管理會員',
	'ACP_MASS_EMAIL'			=> '大量 e-mail',
	'ACP_MESSAGES'				=> '訊息',
	'ACP_MESSAGE_SETTINGS'		=> '私人訊息設定',
	'ACP_MODULE_MANAGEMENT'		=> '模組管理',
	'ACP_MOD_LOGS'				=> '版主記錄',
	'ACP_MOD_ROLES'				=> '版主角色',

	'ACP_NO_ITEMS'				=> '還沒有細目。',

	'ACP_ORPHAN_ATTACHMENTS'	=> '幽靈的附加檔案',

	'ACP_PERMISSIONS'			=> '權限',
	'ACP_PERMISSION_MASKS'		=> '權限遮罩',
	'ACP_PERMISSION_ROLES'		=> '權限角色',
	'ACP_PERMISSION_TRACE'		=> '權限軌跡',
	'ACP_PHP_INFO'				=> 'PHP 資訊',
	'ACP_POST_SETTINGS'			=> '發表設定',
	'ACP_PRUNE_FORUMS'			=> '修剪版面',
	'ACP_PRUNE_USERS'			=> '裁減會員',
	'ACP_PRUNING'				=> '裁減',

	'ACP_QUICK_ACCESS'			=> '快速進入',

	'ACP_RANKS'					=> '等級',
	'ACP_REASONS'				=> '檢舉/拒絕理由',
	'ACP_REGISTER_SETTINGS'		=> '會員註冊設定',

	'ACP_RESTORE'				=> '還原',

	'ACP_SEARCH'				=> '搜尋組態',
	'ACP_SEARCH_INDEX'			=> '搜尋索引',
	'ACP_SEARCH_SETTINGS'		=> '搜尋設定',

	'ACP_SECURITY_SETTINGS'		=> '安全性設定',
	'ACP_SERVER_CONFIGURATION'	=> '伺服器組態',
	'ACP_SERVER_SETTINGS'		=> '伺服器設定',
	'ACP_SIGNATURE_SETTINGS'	=> '簽名檔設定',
	'ACP_SMILIES'				=> '表情符號',
	'ACP_STYLE_COMPONENTS'		=> '風格成分',
	'ACP_STYLE_MANAGEMENT'		=> '風格管理',
	'ACP_STYLES'				=> '風格',

	'ACP_TEMPLATES'				=> '樣板',
	'ACP_THEMES'				=> '主題',

	'ACP_UPDATE'					=> '更新中',
	'ACP_USERS_FORUM_PERMISSIONS'	=> '會員的版面權限',
	'ACP_USERS_LOGS'				=> '會員記錄',
	'ACP_USERS_PERMISSIONS'			=> '會員的權限',
	'ACP_USER_ATTACH'				=> '附加檔案',
	'ACP_USER_AVATAR'				=> '頭像',
	'ACP_USER_FEEDBACK'				=> '回饋',
	'ACP_USER_GROUPS'				=> '群組',
	'ACP_USER_MANAGEMENT'			=> '會員管理',
	'ACP_USER_OVERVIEW'				=> '全覽',
	'ACP_USER_PERM'					=> '權限',
	'ACP_USER_PREFS'				=> '偏好',
	'ACP_USER_PROFILE'				=> '個人資料',
	'ACP_USER_RANK'					=> '等級',
	'ACP_USER_ROLES'				=> '會員角色',
	'ACP_USER_SECURITY'				=> '會員安全',
	'ACP_USER_SIG'					=> '簽名檔',

	'ACP_VC_SETTINGS'					=> '確認代碼設定',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA 圖片預覽',
	'ACP_VERSION_CHECK'					=> '檢查更新',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> '檢視管理員權限',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> '檢視版面版主權限',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> '檢視版面基本權限',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> '檢視全域版主權限',
	'ACP_VIEW_USER_PERMISSIONS'			=> '檢視會員基本權限',

	'ACP_WORDS'					=> '字詞過濾',

	'ACTION'				=> '動作',
	'ACTIONS'				=> '動作',
	'ACTIVATE'				=> '啟用',
	'ADD'					=> '增加',
	'ADMIN'					=> '管理員',
	'ADMIN_INDEX'			=> 'ACP 首頁',
	'ADMIN_PANEL'			=> '管理員控制台 (ACP)',
	'ADM_LOGOUT'			=> '登出&nbsp;ACP',
	'ADM_LOGGED_OUT'		=> '成功地從 ACP 登出',

	'BACK'					=> '上一頁',

	'COLOUR_SWATCH'			=> '網頁安全顏色樣品',
	'CONFIG_UPDATED'		=> '組態更新成功。',

	'DEACTIVATE'				=> '停用',
	'DIRECTORY_DOES_NOT_EXIST'	=> '輸入的路徑「%s」不存在。',
	'DIRECTORY_NOT_DIR'			=> '輸入的路徑「%s」不是一個目錄。',
	'DIRECTORY_NOT_WRITABLE'	=> '輸入的路徑「%s」沒有效。',
	'DISABLE'					=> '停用',
	'DOWNLOAD'					=> '下載',
	'DOWNLOAD_AS'				=> '下載為',
	'DOWNLOAD_STORE'			=> '下載或儲存檔案',
	'DOWNLOAD_STORE_EXPLAIN'	=> '您可以直接下載檔案或儲存它在 <samp>store/</samp> 資料夾。',

	'EDIT'					=> '編輯',
	'ENABLE'				=> '啟用',
	'EXPORT_DOWNLOAD'		=> '下載',
	'EXPORT_STORE'			=> '儲存',

	'GENERAL_OPTIONS'		=> '一般的選項',
	'GENERAL_SETTINGS'		=> '一般的設定',
	'GLOBAL_MASK'			=> '全域權限遮罩',

	'INSTALL'				=> '安裝',
	'IP'					=> '會員 IP',
	'IP_HOSTNAME'			=> 'IP 位址或主機名稱',

	'LOGGED_IN_AS'			=> '您目前登入的帳號為:',
	'LOGIN_ADMIN'			=> '要進入管理員控制台，您必須是通過認證的會員。',
	'LOGIN_ADMIN_CONFIRM'	=> '要進入管理員控制台，您必須再輸入一次帳號與密碼。',
	'LOGIN_ADMIN_SUCCESS'	=> '您已經通過認證，並且將會自動導向管理員控制台。',
	'LOOK_UP_FORUM'			=> '選擇版面',
	'LOOK_UP_FORUMS_EXPLAIN'=> '您可以選擇一個以上的版面。',

	'MANAGE'				=> '管理',
	'MENU_TOGGLE'			=> '隱藏或顯示旁邊選單',
	'MOVE_DOWN'				=> '往下移動',
	'MOVE_UP'				=> '往上移動',

	'NOTIFY'				=> '通知',
	'NO_ADMIN'				=> '您沒有權限可以進入管理員控制台。',
	'NO_EMAILS_DEFINED'		=> '沒有找到有效的 e-mail 位址。',
	'NO_PASSWORD_SUPPLIED'	=> '要進入管理員控制台，您需要輸入您的密碼。',

	'OFF'					=> '關',
	'ON'					=> '開',

	'PARSE_BBCODE'						=> '可用 BBCode',
	'PARSE_SMILIES'						=> '可用表情符號',
	'PARSE_URLS'						=> '可用超連結',
	'PERMISSIONS_TRANSFERRED'			=> '權限轉移',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> '您目前擁有來自 %1$s 的權限。您可以使用該會員的權限瀏覽討論區但是無法進入管理員控制台因為管理員的權限無法被轉移。您隨時都可以 <a href="%2$s"><strong>恢復您的權限設定</strong></a>。',
	'PIXEL'								=> '像素',
	'PROCEED_TO_ACP'					=> '%s進入 ACP%s',

	'REMIND'							=> '提醒',
	'RESYNC'							=> '重新同步',
	'RETURN_TO'							=> '返回...',

	'SELECT_ANONYMOUS'		=> '選擇匿名使用者',
	'SELECT_OPTION'			=> '選擇選項',

	'SETTING_TOO_LOW'		=> '您所輸入的設定值「%1$s」太低。允許最小的值是 %2$d。',
	'SETTING_TOO_BIG'		=> '您所輸入的設定值「%1$s」太大。允許最大的值是 %2$d。',
	'SETTING_TOO_LONG'		=> '您所輸入的設定值「%1$s」太長。允許最大的長度是 %2$d。',
	'SETTING_TOO_SHORT'		=> '您所輸入的設定值「%1$s」太短。允許最小的長度是 %2$d',

	'UCP'					=> '會員控制台 (UCP)',
	'USERNAMES_EXPLAIN'		=> '請每一行輸入一個會員名稱。',
	'USER_CONTROL_PANEL'	=> '會員控制台',

	'WARNING'				=> '警告',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> '這個頁面列出了這個伺服器上所安裝的 PHP 版本資訊。它包括了已裝載模組的細節，可用的變數和預設的設定。在診斷問題時這些資訊可能會有用。請注意！某些主機商可能會因為安全理由限制顯示某些資訊。建議您不要洩露這頁的任何細節，除非在支援論壇中被 <a href="http://www.phpbb.com/about/">官方團隊成員</a> 要求提供。',

	'NO_PHPINFO_AVAILABLE'	=> '關於您的 PHP 組態的資訊無法認定，Phpinfo() 因為安全理由已經被停用。',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> '這裡列出了討論區管理員執行的所有動作。您可以按會員名稱、日期、IP 位址或動作排序。如果您有合適的權限，那麼您也可以清除部分或全部的記錄。',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> '這裡列出了討論區自身執行的所有動作。這些記錄提供您解決特定問題的有用資訊，例如；無法投遞的 e-mail。您可以按會員名稱、日期、IP 位址或動作排序。如果您有合適的權限，那麼您也可以清除部分或全部的記錄。',
	'ACP_MOD_LOGS_EXPLAIN'		=> '這裡列出了討論區版主在管理版面、主題、文章時執行的所有動作，包含封鎖。您可以按會員名稱、日期、IP 位址或動作排序。如果您有合適的權限，那麼您也可以清除部分或全部的記錄。',
	'ACP_USERS_LOGS_EXPLAIN'	=> '這裡列出了會員執行的所有動作，以及作用於會員的所有動作 (檢舉、警告和意見/反應)。',
	'ALL_ENTRIES'				=> '所有的',

	'DISPLAY_LOG'	=> '從頭顯示記錄',

	'NO_ENTRIES'	=> '這段期間沒有記錄',

	'SORT_IP'		=> 'IP 位址',
	'SORT_DATE'		=> '日期',
	'SORT_ACTION'	=> '動作',
));

// Index page
$lang = array_merge($lang, array(
 	'ADMIN_INTRO'            => '感謝您使用 phpBB 討論版系統。這個介面將提供給您有關本討論區的一個統計全覽。位於介面左手邊的連結允許您控制討論區的各個主要功能，每一頁都將教導您如何使用這些工具。',
 	'ADMIN_LOG'					=> '管理員動作記錄',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> '這裡提供管理員執行的最後五個動作全覽。您可以從適當的選單項目或下面的「檢視管理員記錄」連結檢視完整記錄。',
	'AVATAR_DIR_SIZE'			=> '頭像資料夾大小',

	'BOARD_STARTED'		=> '討論區啟用日期',
	'BOARD_VERSION'		=> '討論區版本',

	'DATABASE_SERVER_INFO'	=> '資料庫伺服器',
	'DATABASE_SIZE'			=> '資料庫大小',

	'FILES_PER_DAY'		=> '每天的附加檔案',
	'FORUM_STATS'		=> '討論區統計',

	'GZIP_COMPRESSION'	=> 'GZip 壓縮',

	'NOT_AVAILABLE'		=> '沒有效',
	'NUMBER_FILES'		=> '附加檔案的數量',
	'NUMBER_POSTS'		=> '文章數量',
	'NUMBER_TOPICS'		=> '主題數量',
	'NUMBER_USERS'		=> '會員數量',
	'NUMBER_ORPHAN'		=> '幽靈的附加檔案',

	'POSTS_PER_DAY'		=> '每天的發表文章',

	'PURGE_CACHE'			=> '清除快取',
	'PURGE_CACHE_CONFIRM'	=> '您確認要清除快取嗎？',
	'PURGE_CACHE_EXPLAIN'	=> '清除所有相關項目的快取，包含任何快取的樣板檔案以及查詢結果。',

	'RESET_DATE'					=> '重新設定討論區啟用日期',
	'RESET_DATE_CONFIRM'			=> '您確認要將討論區啟用日期換成目前的日期以及時間嗎？',
	'RESET_ONLINE'					=> '重新設定最高線上人數記錄',
	'RESET_ONLINE_CONFIRM'			=> '您確認要將最高線上人數記錄恢復為預設值 0 嗎？',
	'RESYNC_POSTCOUNTS'				=> '重新同步文章數量',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> '只有存在的文章才會被考慮。已經刪除掉的文章將不被計算。',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> '您確認要重新同步文章數量嗎？',
	'RESYNC_POST_MARKING'			=> '重新同步加小點的主題',
	'RESYNC_POST_MARKING_CONFIRM'	=> '您確認要重新同步參與討論的小點標示主題嗎？',
	'RESYNC_POST_MARKING_EXPLAIN'	=> '首先取消標示所有的主題，然後正確標示在過去六個月內有任何活動的主題。',
	'RESYNC_STATS'					=> '重新同步統計',
	'RESYNC_STATS_CONFIRM'			=> '您確認要重新同步統計嗎？',
	'RESYNC_STATS_EXPLAIN'			=> '重新同步計算文章、主題、會員、檔案的總數。',
	'RUN'							=> '立即執行',

	'STATISTIC'					=> '統計',
	'STATISTIC_RESYNC_OPTIONS'	=> '重新同步或重新設定統計',

	'TOPICS_PER_DAY'	=> '每天的發表主題',

	'UPLOAD_DIR_SIZE'	=> '附加檔案的大小',
	'USERS_PER_DAY'		=> '每天的註冊會員',

	'VALUE'					=> '值',
	'VIEW_ADMIN_LOG'		=> '檢視管理員記錄',
	'VIEW_INACTIVE_USERS'	=> '檢視未啟用的會員',

	'WELCOME_PHPBB'			=> '歡迎光臨 phpBB',
	'WRITABLE_CONFIG'		=> '您目前的組態設定檔 (config.php) 是可以寫入的. 我們強烈建議您改變權限為 640 或至少是 644 (例如：<a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php)。',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> '停用日期',
	'INACTIVE_REASON'				=> '理由',
	'INACTIVE_REASON_MANUAL'		=> '帳號被管理員停用',
	'INACTIVE_REASON_PROFILE'		=> '變更個人資料',
	'INACTIVE_REASON_REGISTER'		=> '新的已註冊帳號',
	'INACTIVE_REASON_REMIND'		=> '強迫會員帳號重新啟用',
	'INACTIVE_REASON_UNKNOWN'		=> '不知道',
	'INACTIVE_USERS'				=> '未啟用的會員',
	'INACTIVE_USERS_EXPLAIN'		=> '這是已經註冊但是尚未啟用帳號的會員列表。如果您希望的話，那麼您可以啟用、刪除或提醒 (發送 e-mail) 這些會員。',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> '這是最近十個已經註冊但是尚未啟用帳號的會員列表。您可以從適當的選單項目或下面的「檢視未啟用的會員」連結檢視完整列表，從那裡您可以啟用、刪除或提醒 (發送 e-mail) 這些會員。',

	'NO_INACTIVE_USERS'	=> '沒有未啟用的會員',

	'SORT_INACTIVE'		=> '停用日期',
	'SORT_LAST_VISIT'	=> '最後訪問',
	'SORT_REASON'		=> '理由',
	'SORT_REG_DATE'		=> '註冊日期',

	'USER_IS_INACTIVE'		=> '會員尚未啟用',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>已增加或已編輯此會員的會員權限</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>已增加或已編輯此群組的會員權限</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>已增加或已編輯此會員的全域版主權限</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>已增加或已編輯此群組的全域版主權限</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>已增加或已編輯此會員的管理員權限</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>已增加或已編輯此群組的管理員權限</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>已增加或已編輯管理員</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>已增加或已編輯全域版主</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>已增加或已編輯此會員的版面使用權</strong> 從 %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>已增加或已編輯此會員的版面版主使用權</strong> 從 %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>已增加或已編輯此群組的版面使用權</strong> 從 %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>已增加或已編輯此群組的版面版主使用權</strong> 從 %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>已增加或已編輯版主</strong> 從 %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>已增加或已編輯版面權限</strong> 從 %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>已移除管理員</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>已移除全域版主</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>已移除版主</strong> 從 %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>已移除會員/群組的版面權限</strong> 從 %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>權限已轉移，從</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>權限已復原，從</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>嘗試登入 ACP 失敗</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>登入 ACP 成功</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>已移除會員的附加檔案</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>已增加或已編輯附加檔案副檔名</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>已移除附加檔案副檔名</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>已更新附加檔案副檔名</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>已增加副檔名群組</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>已編輯副檔名群組</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>已移除副檔名群組</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>幽靈的附加檔案已上傳到文章中</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>幽靈的附加檔案已刪除</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>解除會員名稱封鎖</strong> 理由是「<em>%1$s</em>」<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>解除 IP 封鎖</strong> 理由是「<em>%1$s</em>」<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>解除 e-mail 封鎖</strong> 理由是「<em>%1$s</em>」<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>已封鎖會員名稱</strong> 理由是「<em>%1$s</em>」<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>已封鎖 IP</strong> 理由是「<em>%1$s</em>」<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>已封鎖 e-mail</strong> 理由是「<em>%1$s</em>」<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>已解除會員名稱封鎖</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>已解除 IP 封鎖</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>已解除 e-mail 封鎖</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>已增加新的 BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>已編輯 BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>已刪除 BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>已增加新的 bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>已刪除 bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>已更新存在的 bot</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>已清除管理員記錄</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>已清除錯誤記錄</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>已清除版主記錄</strong>',
	'LOG_CLEAR_USER'		=> '<strong>已清除會員記錄</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>已清除會員記錄</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>已更改附加檔案設定</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>已更改認證設定</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>已更改頭像設定</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>已更改 cookie 設定</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>已更改 e-mail 設定</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>已更改討論區特色</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>已更改負荷設定</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>已更改私人訊息設定</strong>',
	'LOG_CONFIG_POST'			=> '<strong>已更改發表設定</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>已更改會員註冊設定</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>已更改搜尋設定</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>已更改安全性設定</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>已更改伺服器設定</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>已更改討論區設定</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>已更改簽名檔設定</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>已更改確認代碼設定</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>已核准主題</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>已推文主題</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>已刪除文章</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>在舊的版面上刪除已移動的主題</strong><br /> %s',
	'LOG_DELETE_TOPIC'			=> '<strong>已刪除主題</strong><br /> %s',
	'LOG_FORK'					=> '<strong>已複製主題</strong><br /> 從 %s',
	'LOG_LOCK'					=> '<strong>已鎖定主題</strong><br /> %s',
	'LOG_LOCK_POST'				=> '<strong>已鎖定文章</strong><br /> %s',
	'LOG_MERGE'					=> '<strong>已合併文章</strong> 到主題<br />» %s',
	'LOG_MOVE'					=> '<strong>已移動主題</strong><br /> 從 %1$s 到 %2$s',
	'LOG_POST_APPROVED'			=> '<strong>已核准文章</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>已拒絕文章 「%1$s」 理由如下</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>已編輯文章 「%1$s」 由</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>已結束檢舉</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>已刪除檢舉</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>已移動分割文章</strong><br />» 到 %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>已分割文章</strong><br />» 從 %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>已核准主題</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>已拒絕主題 「%1$s」 理由如下</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>重新同步計算主題數量</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>已改變主題類型</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>已解除鎖定主題</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>已解除鎖定文章</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>已增加不允許的會員名稱</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>已刪除不允許的會員名稱</strong>',

	'LOG_DB_BACKUP'			=> '<strong>資料庫備份</strong>',
	'LOG_DB_DELETE'			=> '<strong>已刪除資料庫備份檔</strong>',
	'LOG_DB_RESTORE'		=> '<strong>已還原資料庫備份檔</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>已排除 IP/主機名稱 從下載列表</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>已增加 IP/主機名稱 到下載列表</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>已移除 IP/主機名稱 從下載列表</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber 錯誤</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail 錯誤</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>已建立新的版面</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>已刪除版面</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>已刪除版面和它的子版面/strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>已刪除版面和已移動子版面</strong> 到 %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>已刪除版面和已移動文章 </strong> 到 %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>已刪除版面和它的子版面，已移動文章</strong> 到 %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>已刪除版面，已移動文章</strong> 到 %1$s <strong>和已移動子版面</strong> 到 %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>已刪除版面和它的文章</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>已刪除版面，它的文章以及子版面</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>已刪除版面和它的文章，已移動子版面</strong> 到 %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>已編輯版面細節</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>已移動版面</strong> %1$s 到 %2$s <strong>下面</strong>',
	'LOG_FORUM_MOVE_UP'						=> '<strong>已移動版面</strong> %1$s 到 %2$s <strong>上面</strong>',
	'LOG_FORUM_SYNC'						=> '<strong>重新同步版面</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>已建立新的會員群組</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>已設定「%1$s」為預設會員群組</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>已刪除會員群組</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>已降級組長在會員群組</strong> %1$s 中<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>已升級會員為組長在會員群組</strong> %1$s 中<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>已移除會員從會員群組</strong> %1$s 中<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>已更新會員群組細節</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>已增加組長到會員群組</strong> %1$s 中<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>已核准會員在會員群組</strong> %1$s 中<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>已增加會員到會員群組</strong> %1$s 中<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>已增加圖檔組到資料庫</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>已增加圖檔組到檔案系統</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>已刪除圖檔組</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>已編輯圖檔組細節</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>已編輯圖檔組</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>已匯出圖檔組</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>找不到圖檔組「%2$s」在本地位置上</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>已重新整理「%2$s」在本地位置上的圖檔組</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>已重新整理圖檔組</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>已啟用未啟用的會員</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>已刪除未啟用的會員</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>已發送提醒 e-mails 給未啟用的會員</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>已轉換 從 %1$s 到 phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>已安裝 phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/瀏覽器/X_FORWARDED_FOR 檢查已失敗</strong><br />»會員 IP「<em>%1$s</em>」已檢查衝突到 session IP「<em>%2$s</em>」，會員瀏覽器串流「<em>%3$s</em>」已檢查衝突到 session 瀏覽器串流「<em>%4$s</em>」以及會員 X_FORWARDED_FOR 串流「<em>%5$s</em>」已檢查衝突到 session X_FORWARDED_FOR 串流「<em>%6$s</em>」。',

	'LOG_JAB_CHANGED'			=> '<strong>已改變 Jabber 帳號</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>已改變 Jabber 密碼</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>已註冊 Jabber 帳號</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>已改變 Jabber 設定</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>已刪除語言包</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>已安裝語言包</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>已更新語言包細節</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>已取代語言檔案</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>已送出語言檔案以及放置在儲存資料夾中</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>發送大量 e-mail</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>已改變在主題「%1$s」中的發表者</strong><br />» 從 %2$s 到 %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>已停用模組</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>已啟用模組</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>已移動模組</strong><br />» %1$s 在 %2$s 下面',
	'LOG_MODULE_MOVE_UP'	=> '<strong>已移動模組</strong><br />» %1$s 在 %2$s 上面',
	'LOG_MODULE_REMOVED'	=> '<strong>已移除模組</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>已增加模組</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>已編輯模組</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>已增加管理員角色</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>已編輯管理員角色</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>已移除管理員角色</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>已增加版面角色</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>已編輯版面角色</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>已移除版面角色</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>已增加版主角色</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>已編輯版主角色</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>已移除版主角色</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>已增加會員角色</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>已編輯會員角色</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>已移除會員角色</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>已啟用個人資料欄位</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>已增加個人資料欄位</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>已停用個人資料欄位</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>已改變個人資料欄位</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>已移除個人資料欄位</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>已修剪版面</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>已自動修剪版面</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>已停用會員</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>已裁減會員並且刪除文章</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>已裁減會員並且保留文章</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>清除快取</strong>',

	'LOG_RANK_ADDED'		=> '<strong>已增加等級</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>已移除等級</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>已更新等級</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>已增加檢舉/拒絕理由</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>已移除檢舉/拒絕理由</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>已更新檢舉/拒絕理由</strong><br />» %s',
	'LOG_REFERER_INVALID'		=> '<strong>回傳確認失敗</strong><br />»回傳內容是「<em>%1$s</em>」。這請求被拒絕以及這 session 被中斷。',

	'LOG_RESET_DATE'			=> '<strong>重新設定討論區啟始日期</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>重新設定最高線上人數記錄</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>重新同步會員文章數量</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>重新同步加小點的主題數量</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>重新同步文章、主題、會員之統計</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>已建立搜尋索引</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>已移除搜尋索引</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>已增加風格</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>已刪除風格</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>已編輯風格</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>已匯出風格</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>已增加樣板組到資料庫</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>已增加樣板組在檔案系統</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>已刪除快取的樣板版本在樣板組 <em>%1$s</em> 中</strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>已刪除樣板組</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>已編輯樣板組 <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>已編輯樣板細節</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>已匯出樣板組</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>已重新整理樣板組</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>已增加主題到資料庫</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>已增加主題在檔案系統</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>已刪除主題</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>已編輯主題細節</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>已編輯主題 <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>已編輯主題 <em>%1$s</em></strong><br />» 修改檔案 <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>已匯出主題</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>已重新整理主題</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>已更新資料庫從版本 %1$s 到版本 %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>已更新 phpBB 從版本 %1$s 到版本 %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>已啟用會員</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>已封鎖會員經由會員管理</strong> 理由是「<em>%1$s</em>」<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>已封鎖 IP 經由會員管理</strong> 理由是「<em>%1$s</em>」<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>已封鎖 e-mail 經由會員管理</strong> 理由是「<em>%1$s</em>」<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>已刪除會員</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>已移除所有此會員的附加檔案</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>已移除會員頭像</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>已移除所有此會員的文章</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>已移除會員簽名檔</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>已停用會員</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>已移動會員的文章</strong><br />» 文章由「%1$s」移動到「%2$s」版面',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>已改變會員的密碼</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>已強迫會員的密碼重新啟用</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>已改變會員「%1$s」的 e-mail</strong><br />» 從「%2$s」到「%3$s」',
	'LOG_USER_UPDATE_NAME'	=> '<strong>已改變會員名稱</strong><br />» 從「%1$s」到「%2$s」',
	'LOG_USER_USER_UPDATE'	=> '<strong>已更新會員細節</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>已啟用會員帳號</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>已移除會員頭像</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>已移除會員簽名檔</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>已增加會員意見/反應</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>已增加會員意見/反應：</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>已停用會員帳號</strong>',
	'LOG_USER_LOCK'				=> '<strong>此會員已鎖定自己的主題</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>已移動所有的文章到版面</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>已強迫會員帳號重新啟用</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>此會員已解除鎖定自己的主題</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>已增加會員警告</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>下面的警告已發給這個會員</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>此會員已改變預設群組</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>此會員已從會員群組組長降級</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>此會員已加入群組</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>此會員已加入群組並且需要被核准</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>此會員已退出群組</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>已增加字詞過濾</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>已刪除字詞過濾</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>已編輯字詞過濾</strong><br />» %s',

// MOD : MSSTI RSS Feeds (V1.2.1) - Start
	'ACP_RSS'					=> 'RSS 管理',
	'ACP_RSS_FEEDS'				=> 'RSS',
	'LOG_CONFIG_RSS_FEEDS'		=> '<strong>設定 RSS 消息來源</strong>',
// MOD : MSSTI RSS Feeds (V1.2.1) - End

));

$lang = array_merge($lang, array(
	'LOG_ANNOUNCEMENT_UPDATED'			=> '<strong>公告已更新</strong>',
));

?>
