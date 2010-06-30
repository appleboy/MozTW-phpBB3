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

// Start session management
$user->session_begin();

// Complete the authentication process using the server's response.
$openid_return_to = request_var('openid_return_to', '');
$response = $consumer->complete($openid_return_to);

if ($response->status == Auth_OpenID_CANCEL)
{
    // This means the authentication was cancelled.
    trigger_error('Verification cancelled.');
}
else if ($response->status == Auth_OpenID_FAILURE)
{
    trigger_error('OpenID authentication failed.');
}
else if ($response->status == Auth_OpenID_SUCCESS)
{
    // This means the authentication succeeded.
    $openid = $response->identity_url;

    $sql = "SELECT *
            FROM " . USERS_TABLE . "
    WHERE user_openid = '$openid' ";
    if ( !($result = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Error in obtaining userdata', '', __LINE__, __FILE__, $sql);
    }
    if( $row = $db->sql_fetchrow($result) )
    {
        $user->session_create($row['user_id']);
    }
    else
    {
        $_SESSION['openid'] = $openid;
        if (empty($user->lang))
        {
            $user->setup();
        }
        $user->lang["REG_FROM_OPENID"] = "Create User from OpenID";
        page_header($user->lang["REG_FROM_OPENID"]);
        $template->assign_var("OPEN_ID", $openid);
        $usernameFromOpenID = toUserName($response->getDisplayIdentifier());
        $sql = "SELECT *
                FROM " . USERS_TABLE . "
        WHERE username = '$usernameFromOpenID' ";
        if ( !($result = $db->sql_query($sql)) )
        {
            message_die(GENERAL_ERROR, 'Error in obtaining userdata', '', __LINE__, __FILE__, $sql);
        }
        if( !($row = $db->sql_fetchrow($result)) )
        {
            $template->assign_var("USERNAME_FROM_OPENID", $usernameFromOpenID);
        }

        $sreg = $response->extensionResponse('sreg', false);
        if (@$sreg['email']) {
            $template->assign_var("EMAIL_FROM_SREG", $sreg['email']);             
        }
        if (@$sreg['nickname']) {
            $template->assign_var("NICKNAME_FROM_SREG", $sreg['email']);             
        }
        if (@$sreg['fullname']) {
            $template->assign_var("FULLNAME_FROM_SREG", $sreg['email']);             
        }

        $template->set_filenames(array("body" => "new_openid_user.html"));
        page_footer();
        exit;
    }
    header ("Location: index.php");
}
?>
