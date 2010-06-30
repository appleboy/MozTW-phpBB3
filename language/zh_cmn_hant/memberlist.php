<?php
/**
*
* memberlist [正體中文]
*
* @package language
* @version $Id: memberlist.php 8574 2008-05-29 13:59:47Z Kellanved $
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
	'ABOUT_USER'	=> '個人資料',
	'ACTIVE_IN_FORUM'	=> '最常討論的版面',
	'ACTIVE_IN_TOPIC'	=> '最常討論的主題',
	'ADD_FOE'	=> '加入黑名單',
	'ADD_FRIEND'	=> '加入好友',
	'AFTER'	=> '之後',

	'ALL'	=> '全部',

	'BEFORE'	=> '之前',

	'CC_EMAIL'	=> '將這封 e-mail 的副本寄給自己。',
	'CONTACT_USER'	=> '連絡',

	'DEST_LANG'	=> '語系設定',
	'DEST_LANG_EXPLAIN'	=> '選擇一個適合收件人的語系',

	'EMAIL_BODY_EXPLAIN'	=> '這封電子郵件將以純文字的方式發送，請勿加入任何 HTML 或 BBCode 代碼。這封電子郵件的回信信箱將設定為您的電子郵件信箱。',
	'EMAIL_DISABLED'	=> '很抱歉！與電子郵件相關的功能都已經被關閉了。',
	'EMAIL_SENT'	=> '您的電子郵件已經發送給對方了。',
	'EMAIL_TOPIC_EXPLAIN'	=> '這封電子郵件將以純文字的方式發送，請勿加入任何 HTML 或 BBCode 代碼。請注意！主題的內容已經包含在電子郵件內。這封郵件的回信信箱將設定為您的電子郵件信箱。',
	'EMPTY_ADDRESS_EMAIL'	=> '您必須提供一個有效的收件者電子信箱。',
	'EMPTY_MESSAGE_EMAIL'	=> '您必須填入電子郵件內容。',
	'EMPTY_MESSAGE_IM'		=> '您必須填入信件內容。',
	'EMPTY_NAME_EMAIL'	=> '您必須填入收件者的會員名稱。',
	'EMPTY_SUBJECT_EMAIL'	=> '您必須填入電子郵件主旨。',
	'EQUAL_TO'	=> '等於',

	'FIND_USERNAME_EXPLAIN'	=> '您可以使用下列表格來搜尋特定會員。您不需輸入表格內所有的欄位。搜尋時可以使用萬用字元 * 符號做出部分比對。如果想搜尋特定日期時，請使用這個格式：<kbd>西元年份-月-日</kbd>，例如 <samp>2007-10-15</samp>。當想要同時選擇一位或是多位會員時，您可以標記多選核取方塊進行複選的動作，然後點選「選擇已標記會員」回到之前的表格。',
	'FLOOD_EMAIL_LIMIT'	=> '很抱歉！您現在無法再次發送電子郵件，請稍後再試。',

	'GROUP_LEADER'	=> '群組組長',

	'HIDE_MEMBER_SEARCH'	=> '隱藏會員搜尋',

	'IM_ADD_CONTACT'	=> '新增為聯絡人',
	'IM_AIM'	=> '請注意！您必須安裝 AOL Instant Messenger 後才能使用這個功能。',
	'IM_AIM_EXPRESS'	=> 'AIM Express',
	'IM_DOWNLOAD_APP'	=> '下載程式',
	'IM_ICQ'	=> '請注意！會員可能已選擇不接受未經請求的訊息。',
	'IM_JABBER'	=> '請注意！會員可能已選擇不接受未經請求的訊息。',
	'IM_JABBER_SUBJECT'	=> '這是一個自動發出的訊息，請勿回覆！訊息是由會員 %1$s 於 %2$s 發出。',
	'IM_MESSAGE'	=> '您的訊息',
	'IM_MSNM'	=> '請注意！您需要安裝 MSN Messenger 後才能使用這個功能。',
	'IM_MSNM_BROWSER'	=> '您的瀏覽器不支援這個功能。',
	'IM_MSNM_CONNECT'	=> 'MSNM 尚未登入。\n您需要登入 MSNM 後才能繼續。',
	'IM_NAME'	=> '您的名字',
	'IM_NO_DATA'			=> '這位會員並沒有合適的聯絡方式。',
	'IM_NO_JABBER'			=> '很抱歉！這個討論區不支援對 Jabber 會員直接傳送訊息。您需要在您的系統安裝一個 Jabber 的客戶端程式來連絡以上的接收者。',
	'IM_RECIPIENT'	=> '聯絡人',
	'IM_SEND'	=> '傳送訊息',
	'IM_SEND_MESSAGE'	=> '傳送訊息',
	'IM_SENT_JABBER'	=> '您寫給 %1$s 的訊息已經傳送成功。',
	'IM_USER'	=> '傳送一個即時訊息',

	'LAST_ACTIVE'	=> '最後訪問',
	'LESS_THAN'	=> '少於',
	'LIST_USER'	=> '1 位會員',
	'LIST_USERS'	=> '%d 位會員',
	'LOGIN_EXPLAIN_LEADERS'	=> '您必須註冊並且登入後才能檢視管理團隊列表。',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> '您必須註冊並且登入後才能使用會員列表。',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> '您必須註冊並且登入後才能搜尋會員。',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> '您必須註冊並且登入後才能檢視個人資料。',

	'MORE_THAN'	=> '多於',

	'NO_EMAIL'	=> '您沒有發送 e-mail 給這個會員的權限。',
	'NO_VIEW_USERS'	=> '您沒有檢視會員列表或個人資料的權限。',

	'ORDER'	=> '順序',
	'OTHER'	=> '其他',

	'POST_IP'	=> 'IP/網域名稱',

	'RANK'	=> '等級',
	'REAL_NAME'	=> '收件者名稱',
	'RECIPIENT'	=> '收件者',
	'REMOVE_FOE'	=> '移除黑名單',
	'REMOVE_FRIEND'	=> '移除好友',

	'SEARCH_USER_POSTS'	=> '搜尋會員發表的所有文章',
	'SELECT_MARKED'	=> '選擇已標記會員',
	'SELECT_SORT_METHOD'	=> '選擇排列方式 ',
	'SEND_AIM_MESSAGE'	=> '傳送 AIM 訊息',
	'SEND_ICQ_MESSAGE'	=> '傳送 ICQ 訊息',
	'SEND_IM'	=> '即時訊息',
	'SEND_JABBER_MESSAGE'	=> '傳送 Jabber 訊息',
	'SEND_MESSAGE'	=> '傳送訊息',
	'SEND_MSNM_MESSAGE'	=> '傳送 MSNM 或 WLM 訊息',
	'SEND_YIM_MESSAGE'	=> '傳送 YIM 訊息',
	'SORT_EMAIL'	=> 'E-mail',
	'SORT_LAST_ACTIVE'	=> '最後訪問',
	'SORT_POST_COUNT'	=> '文章總數',

	'USERNAME_BEGINS_WITH'	=> '帳號開始字母為 ',
	'USER_ADMIN'	=> '管理會員',
	'USER_BAN'				=> '封鎖中',
	'USER_FORUM'	=> '會員統計',
	'USER_ONLINE'	=> '線上',
	'USER_PRESENCE'	=> '個人頭像',

	'VIEWING_PROFILE'	=> '檢視個人資料 - %s',
	'VISITED'	=> '最後訪問',

	'WWW'	=> '網站',
));

?>