<?php
/**
*
* acp_profile [正體中文]
*
* @package language
* @version $Id: profile.php 9342 2009-02-26 23:46:46Z terrafrost $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> '增加自行定義個人資料欄位成功。',
	'ALPHA_ONLY'			=> '只允許數字與字母',
	'ALPHA_SPACERS'			=> '數字、字母和空格',
	'ALWAYS_TODAY'			=> '總是目前日期',

	'BOOL_ENTRIES_EXPLAIN'	=> '現在輸入您的選項',
	'BOOL_TYPE_EXPLAIN'		=> '定義類型，不是選框，就是按鈕。如果是要給會員勾選，那麼只有選框會顯示。在那種情況下，<strong>第二種</strong> 語言選項將被使用。按鈕是無意義的。',

	'CHANGED_PROFILE_FIELD'		=> '個人資料欄位更改成功。',
	'CHARS_ANY'					=> '任何字元',
	'CHECKBOX'					=> '選框',
	'COLUMNS'					=> '列',
	'CP_LANG_DEFAULT_VALUE'		=> '預設值',
	'CP_LANG_EXPLAIN'			=> '欄位描述',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> '解釋這個欄位介紹給會員。',
	'CP_LANG_NAME'				=> '介紹給會員的欄位名稱/描述',
	'CP_LANG_OPTIONS'			=> '選項',
	'CREATE_NEW_FIELD'			=> '建立新的欄位',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> '至少有一個自訂的欄位沒有被翻譯。請點選「翻譯」連結輸入需要的翻譯。',

	'DEFAULT_ISO_LANGUAGE'			=> '預設語言 [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> '此個人資料的欄位尚未輸入預設的語言。',
	'DEFAULT_VALUE'					=> '預設值',
	'DELETE_PROFILE_FIELD'			=> '移除個人資料欄位',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> '您確認要刪除這個個人資料欄位嗎？',
	'DISPLAY_AT_PROFILE'			=> '在會員控制台中顯示',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> '會員可以在會員控制台中更改這個個人資料欄位。',
	'DISPLAY_AT_REGISTER'			=> '顯示在註冊的頁面',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> '如果啟用這個選項，那麼在註冊時會顯示此欄位。',
	'DISPLAY_PROFILE_FIELD'			=> '公開顯示個人資料欄位',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> '個人資料欄位將會顯示在「負荷設定」中允許的所有位置。如果設定為「否」，那麼這筆資料將不會顯示在主題頁面、個人資料以及會員列表中。',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> '現在輸入您的選項，每一個選項一行。',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> '請注意！您可以更改選項文字，也可以在最後增加新的選項，不建議在已經存在的選項之間增加新的選項 - 這結果將分配給會員錯誤的選項。如果您要移除已經存在的選項之間的選項，那麼也是同樣會有錯誤發生。刪除選項時需要從最後一個選項開始，設定這個項目的會員將自動重設回預設的選項。',
	'EMPTY_FIELD_IDENT'				=> '欄位定義空白',
	'EMPTY_USER_FIELD_NAME'			=> '請輸入欄位名稱/標題',
	'ENTRIES'						=> '輸入',
	'EVERYTHING_OK'					=> '一切正常',

	'FIELD_BOOL'				=> '布耳值 (是/否)',
	'FIELD_DATE'				=> '日期',
	'FIELD_DESCRIPTION'			=> '欄位描述',
	'FIELD_DESCRIPTION_EXPLAIN'	=> '解釋這個欄位顯示出給會員。',
	'FIELD_DROPDOWN'			=> '下拉選單',
	'FIELD_IDENT'				=> '欄位定義',
	'FIELD_IDENT_ALREADY_EXIST'	=> '選擇的欄位定義已經存在，請選擇另外一個名稱。',
	'FIELD_IDENT_EXPLAIN'		=> '欄位定義是在資料庫和風格中定義欄位的名稱。',
	'FIELD_INT'					=> '數字',
	'FIELD_LENGTH'				=> '輸入框的長度',
	'FIELD_NOT_FOUND'			=> '個人資料欄位未找到。',
	'FIELD_STRING'				=> '單行文字欄位',
	'FIELD_TEXT'				=> '文字編輯區',
	'FIELD_TYPE'				=> '欄位類型',
	'FIELD_TYPE_EXPLAIN'		=> '設定後，您不能再修改欄位類型。',
	'FIELD_VALIDATION'			=> '欄位生效',
	'FIRST_OPTION'				=> '第一選項',

	'HIDE_PROFILE_FIELD'			=> '隱藏個人資料欄位',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> '除了會員本人、版主、以及管理員可以看見之外，對所有其他會員隱藏此個人資料欄位。如果不顯示在會員控制台，那麼會員將無法看見或改變此欄位，此欄位的值只能由管理員改變。',

	'INVALID_CHARS_FIELD_IDENT'	=> '欄位定義只能包含小寫 a-z 和 _',
	'INVALID_FIELD_IDENT_LEN'	=> '欄位定義字元長度不能超過 17',
	'ISO_LANGUAGE'				=> '語言 [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> '語言特定選項 [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> '最大的字元長度',
	'MAX_FIELD_NUMBER'		=> '最大的允許數字',
	'MIN_FIELD_CHARS'		=> '最小的字元長度',
	'MIN_FIELD_NUMBER'		=> '最小的允許數字',

	'NO_FIELD_ENTRIES'			=> '沒有輸入定義',
	'NO_FIELD_ID'				=> '沒有指定欄位 ID。',
	'NO_FIELD_TYPE'				=> '沒有指定欄位類型。',
	'NO_VALUE_OPTION'			=> '選項無輸入時等值',
	'NO_VALUE_OPTION_EXPLAIN'	=> '無輸入時的值。如果欄位是必填的，而且會員在此選擇了這個選項，那麼他將得到一個錯誤。',
	'NUMBERS_ONLY'				=> '只允許數字 (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> '基本選項',
	'PROFILE_FIELD_ACTIVATED'	=> '個人資料欄位啟用成功。',
	'PROFILE_FIELD_DEACTIVATED'	=> '個人資料欄位停用成功。',
	'PROFILE_LANG_OPTIONS'		=> '語言特定選項',
	'PROFILE_TYPE_OPTIONS'		=> '個人資料類型特定選項',

	'RADIO_BUTTONS'				=> '按鈕',
	'REMOVED_PROFILE_FIELD'		=> '個人資料欄位移除成功。',
	'REQUIRED_FIELD'			=> '必填欄位',
	'REQUIRED_FIELD_EXPLAIN'	=> '強制會員或管理員需要填寫或指定的個人資料欄位。如果不顯示在註冊的頁面，那麼只有當會員編輯個人資料時，才必須填寫此欄位。',
	'ROWS'						=> '行',

	'SAVE'							=> '儲存',
	'SECOND_OPTION'					=> '第二選項',
	'STEP_1_EXPLAIN_CREATE'			=> '在這裡，您可以輸入新增個人資料欄位的第一個基本參數。這資訊對於第二步您能夠繼續設定選項完成您的個人資料欄位是需要的。',
	'STEP_1_EXPLAIN_EDIT'			=> '在這裡，您可以更改個人資料欄位的基本參數。相關的選項將在第二步重新設計。',
	'STEP_1_TITLE_CREATE'			=> '增加個人資料欄位',
	'STEP_1_TITLE_EDIT'				=> '編輯個人資料欄位',
	'STEP_2_EXPLAIN_CREATE'			=> '在這裡，您可以定義一些您想要調適的共同選項。',
	'STEP_2_EXPLAIN_EDIT'			=> '在這裡，您可以更改一些共同的選項。<br /><strong>請注意！更改個人資料欄位將不會影響會員已經輸入的資料。</strong>',
	'STEP_2_TITLE_CREATE'			=> '個人資料類型特定選項',
	'STEP_2_TITLE_EDIT'				=> '個人資料類型特定選項',
	'STEP_3_EXPLAIN_CREATE'			=> '因為討論區安裝了多種語言，您也必須填寫其餘的語言項目。個人資料欄位將工作於預設的語言下，您也可以稍後再完成剩下的語言項目。',
	'STEP_3_EXPLAIN_EDIT'			=> '因為討論區安裝了多種語言，您現在也可以更改或增加其餘的語言項目。個人資料欄位將工作於預設的語言下。',
	'STEP_3_TITLE_CREATE'			=> '繼續語言定義',
	'STEP_3_TITLE_EDIT'				=> '語言定義',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> '輸入預設顯示的詞語，一個預設值。如果您希望第一個位置顯示空白，那麼請留白。',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> '輸入預設顯示的文字，一個預設值。如果您希望第一個位置顯示空白，那麼請留白。',
	'TRANSLATE'						=> '翻譯',

	'USER_FIELD_NAME'	=> '顯示出給會員的欄位名稱/標題',

	'VISIBILITY_OPTION'				=> '看得見的選項 (可複選)',
));

?>