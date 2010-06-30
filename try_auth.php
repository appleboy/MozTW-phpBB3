<?php

session_start();
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require($phpbb_root_path . 'common.' . $phpEx);
require($phpbb_root_path . 'includes/functions_display.' . $phpEx);
require($phpbb_root_path . 'includes/openid/common.' . $phpEx);

// Start session management
$user->session_begin();

// Render a default page if we got a submission without an openid
// value.
$openid = request_var('openid_url', '');
if (empty($openid))
{
    exit(0);
}

$scheme = 'http';
if (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on')
{
    $scheme .= 's';
}

$port = 80 == $_SERVER['SERVER_PORT'] ? "" : ":" . $_SERVER['SERVER_PORT'];
$webRoot = "/" == dirname($_SERVER['PHP_SELF']) ? "" : dirname($_SERVER['PHP_SELF']);
$process_url = sprintf("$scheme://%s%s%s/finish_auth.php",
                       $_SERVER['SERVER_NAME'], $port,
                       $webRoot);

$trust_root = sprintf("$scheme://%s%s%s",
                      $_SERVER['SERVER_NAME'], $port,
                      $webRoot);

// Begin the OpenID authentication process.
$auth_request = $consumer->begin($openid);

// Handle failure status return values.
if (!$auth_request) 
{
    trigger_error('OpenID authentication failed.');
}

$auth_request->addExtensionArg('sreg', 'optional', 'email');

// Redirect the user to the OpenID server for authentication.  Store
// the token for this authentication so we can verify the response.

$redirect_url = $auth_request->redirectURL($trust_root,
                                           $process_url);

header("Location: ".$redirect_url);

?>
