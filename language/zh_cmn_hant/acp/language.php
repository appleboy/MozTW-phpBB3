<?php
/**
*
* acp_language [正體中文]
*
* @package language
* @version $Id: language.php 9649 2009-06-21 19:17:20Z bantu $
* @copyright (c) 2001 - 2007 phpBB TW Group (心靈捕手)
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
	'ACP_FILES'						=> '控制台語言檔案',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> '在這裡，您可以安裝/移除語言包。預設的語言包有標記星號 (*)。',

	'EMAIL_FILES'			=> 'E-mail 檔案',

	'FILE_CONTENTS'				=> '檔案內容',
	'FILE_FROM_STORAGE'			=> '檔案來自 storage 資料夾',

	'HELP_FILES'				=> '說明檔案',

	'INSTALLED_LANGUAGE_PACKS'	=> '已安裝的語言包',
	'INVALID_LANGUAGE_PACK'		=> '該語言包看起來是無效的。請重新上傳語言包所有檔案。',
	'INVALID_UPLOAD_METHOD'		=> '您選擇的上傳功能無效，請選擇其他方式。',

	'LANGUAGE_DETAILS_UPDATED'			=> '語言細節更新成功。',
	'LANGUAGE_ENTRIES'					=> '語言文字',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> '在這裡，您可以變更已經存在的語言包文字或尚未翻譯的部分。<br /><strong>注意！</strong>當您變更一個語言檔案，該檔案將會儲存在特別的資料夾內供您下載。這個改變不會被您的會員看見，直到您取代了您網站空間上原有的語言檔 (經由上傳覆蓋)。',
	'LANGUAGE_FILES'					=> '語言檔案',
	'LANGUAGE_KEY'						=> '語言關鍵',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> '這份語言包已經安裝完畢。',
	'LANGUAGE_PACK_DELETED'				=> '這份語言包 <strong>%s</strong> 已經移除完畢。所有使用此語言包的會員將會重設為系統預設語言。',
	'LANGUAGE_PACK_DETAILS'				=> '語言包細節',
	'LANGUAGE_PACK_INSTALLED'			=> '該語言包 <strong>%s</strong> 已經安裝完畢。',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> '當地名稱',
	'LANGUAGE_PACK_NAME'				=> '檔名',
	'LANGUAGE_PACK_NOT_EXIST'			=> '您選擇的語言包不存在。',
	'LANGUAGE_PACK_USED_BY'				=> '已使用 (包含機器人)',
	'LANGUAGE_VARIABLE'					=> '語言變數',
	'LANG_AUTHOR'						=> '語言包作者',
	'LANG_ENGLISH_NAME'					=> '英文檔名',
	'LANG_ISO_CODE'						=> 'ISO 代碼',
	'LANG_LOCAL_NAME'					=> '當地名稱',

	'MISSING_LANGUAGE_FILE'		=> '找不到語言檔案：<strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> '找不到語言變數',
	'MODS_FILES'				=> '外掛的語言檔案',

	'NO_FILE_SELECTED'				=> '您沒有指定語言檔。',
	'NO_LANG_ID'					=> '您沒有指定語言包。',
	'NO_REMOVE_DEFAULT_LANG'		=> '您不可以移除預設的語言包。<br />如果您要移除這個語言包，那麼請先變更您的討論區預設的語言。',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> '沒有解除安裝的語言包',

	'REMOVE_FROM_STORAGE_FOLDER'		=> '從 storage 資料夾中移除',

	'SELECT_DOWNLOAD_FORMAT'	=> '選擇下載格式',
	'SUBMIT_AND_DOWNLOAD'		=> '送出以及下載檔案',
	'SUBMIT_AND_UPLOAD'			=> '送出以及上傳檔案',

	'THOSE_MISSING_LANG_FILES'			=> '從 %s 語言資料夾中找不到下面的語言檔',
	'THOSE_MISSING_LANG_VARIABLES'		=> '從 <strong>%s</strong> 語言包中找不到下面的語言變數',

	'UNINSTALLED_LANGUAGE_PACKS'	=> '解除安裝的語言包',

	'UNABLE_TO_WRITE_FILE'		=> '檔案無法寫入 %s。',
	'UPLOAD_COMPLETED'			=> '上傳完畢。',
	'UPLOAD_FAILED'				=> '發生不明原因導致上傳失敗。您也許需要手動取代相關檔案。',
	'UPLOAD_METHOD'				=> '上傳方式',
	'UPLOAD_SETTINGS'			=> '上傳設定',

	'WRONG_LANGUAGE_FILE'		=> '選擇的語言檔是無效的。',
));

?>