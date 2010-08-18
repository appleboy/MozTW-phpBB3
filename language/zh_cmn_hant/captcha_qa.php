<?php
/**
*
* captcha_qa [正體中文]
*
* @package language
* @version $Id: captcha_qa.php 10450 2010-01-26 10:57:00Z Kellanved $
* @copyright (c) 2009 phpBB TW Group (心靈捕手)
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
	'CAPTCHA_QA'				=> 'CAPTCHA 問答集',
	'CONFIRM_QUESTION_EXPLAIN'	=> '這個問題是識別的一種方法以及防止自動提交。',
	'CONFIRM_QUESTION_WRONG'	=> '針對確認問題，您提供了一個無效的答案。',

	'QUESTION_ANSWERS'			=> '答案',
	'ANSWERS_EXPLAIN'			=> '請輸入問題之有效的答案，每一個一行。',
	'CONFIRM_QUESTION'			=> '問題',

	'ANSWER'					=> '答案',
	'EDIT_QUESTION'				=> '編輯問題',
	'QUESTIONS'					=> '問題',
	'QUESTIONS_EXPLAIN'			=> '在註冊期間，使用者將被要求回答在此所指定的問題之一。要使用這個外掛，至少要有一個問題被設定在預設的語言中。這些問題也許對您的使用者來說很容易回答，但是它超出機器人能夠運用 Google™ 搜尋的能力。使用大量的以及經常改變的問題之設定，將可達到最佳效果。如果您的問題需要標點符號或大寫，那麼啟用嚴格的設定。',
	'QUESTION_DELETED'			=> '問題已刪除',
	'QUESTION_LANG'				=> '語言',
	'QUESTION_LANG_EXPLAIN'		=> '寫入這個問題和它的答案的語言。',
	'QUESTION_STRICT'			=> '嚴格檢查',
	'QUESTION_STRICT_EXPLAIN'	=> '如果啟用，那麼大寫以及空白也將能夠被執行。',

	'QUESTION_TEXT'				=> '問題',
	'QUESTION_TEXT_EXPLAIN'		=> '在註冊時將被問到的問題。.',

	'QA_ERROR_MSG'				=> '請填滿所有的欄位，以及至少輸入一個答案。',
	'QA_LAST_QUESTION'			=> '當這個外掛啟用時，您不能刪除所有的問題。',
));

?>