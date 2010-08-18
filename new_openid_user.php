<?php
session_start();
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require($phpbb_root_path . 'common.' . $phpEx);
require($phpbb_root_path . 'includes/functions_display.' . $phpEx);
require($phpbb_root_path . 'includes/openid/common.' . $phpEx);
require($phpbb_root_path . 'includes/openid/openid2username.' . $phpEx);
require($phpbb_root_path . 'includes/functions_user.' . $phpEx);
if ($openid = $_SESSION["openid"])
{
    // Start session management
    $user->session_begin();
    $username = request_var('username', '');
    $email = request_var('email', '');
    $choice = request_var('choice', '');
    switch($choice)
    {
        case "create_new":
            if (usernameAvailable($username))
            {
                $userId = insertUserRow($username, $email);
                $user->session_create($userId);
            }
            else
            {
                trigger_error("Username unavailable, please login with your openid and make another choice.");
            }
            break;
        case "detect_by_openid":
            if (usernameAvailable($username))
            {
                $userId = insertUserRow($username, $email);
                $user->session_create($userId);
            }
            else
            {
                trigger_error("Username unavailable, please login with your openid make another choice.");
            }
            break;
        case "bind_existed":
        default:
            $password	= request_var('password', '', true);
            $result = $auth->login($username, $password, false, 1, false);
            if ($result['status'] == LOGIN_SUCCESS)
            {
                $userId = bind($username);
                $user->session_create($result["user_row"]["user_id"]);
            }
            else
            {
                trigger_error("Authenticate failed, please login with your openid and retry.");
            }
            break;
    }
    header ("Location: index.php");
}
else
{
    trigger_error("Access denied, please login with your openid first.");
}

function usernameAvailable($username)
{
    global $db;
    $sql = "SELECT user_id
            FROM " . USERS_TABLE . "
    WHERE username = '$username' ";
    if ( !($result = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Error in obtaining userdata', '', __LINE__, __FILE__, $sql);
    }
    return !($row = $db->sql_fetchrow($result));
}
function insertUserRow($username, $email = "")
{
    global $db, $openid;
    $group_id = 2;
    $sql = "SELECT *
            FROM " . GROUPS_TABLE . "
            WHERE group_name = 'REGISTERED' ";
    if ( !($result = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Error in obtaining userdata', '', __LINE__, __FILE__, $sql);
    }
    if( $row = $db->sql_fetchrow($result) )
    {
        $group_id = $row['group_id'];
    }
    // add user
    $user_row = array(
        'username' => $username,
        'user_password' => '',
        'user_email' => empty($email)?'openid@mailinator.com':$email,
        //'user_email' => 'openid@mailinator.com',
        'group_id' => $group_id,
        // 'user_timezone' => '0',
        'user_dst' => '0',
        // 'user_lang' => 'en',
        'user_type' => '0',
        'user_actkey' => '', 
        'user_ip' => $_SERVER['REMOTE_ADDR'],
        'user_inactive_reason' => '0',
        'user_website' => $openid,
        'user_inactive_time' => '0');
    $user_id = user_add($user_row);

    $sql = "UPDATE " . USERS_TABLE . " SET user_openid ='" . $openid . "'
    WHERE user_id = $user_id";
    if ( !($result = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Error in obtaining userdata', '', __LINE__, __FILE__, $sql);
    }
    else
    {
        return $user_id;
    }
}
function bind($username)
{
    global $db, $openid;
    $sql = "update " . USERS_TABLE . "
    set user_openid = '$openid' WHERE username = '$username' ";
    if ( !($result = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Error in obtaining userdata', '', __LINE__, __FILE__, $sql);
    }
    else
    {
        return $user_id;
    }
}

?>
