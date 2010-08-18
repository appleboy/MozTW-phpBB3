<?php
/** ported from mediawiki's openid extension: http://www.mediawiki.org/wiki/Extension:OpenID **/
	function toUserName($openid) {
        if (Auth_Yadis_identifierScheme($openid) == 'XRI') {
			return toUserNameXri($openid);
		} else {
			return toUserNameUrl($openid);
		}
	}

	# We try to use an OpenID URL as a legal MediaWiki user name in this order
	# 1. Plain hostname, like http://evanp.myopenid.com/
	# 2. One element in path, like http://profile.typekey.com/EvanProdromou/
	#    or http://getopenid.com/evanprodromou

    function toUserNameUrl($openid) {
		static $bad = array('query', 'user', 'password', 'port', 'fragment');

	    $parts = parse_url($openid);

		# If any of these parts exist, this won't work

		foreach ($bad as $badpart) {
			if (array_key_exists($badpart, $parts)) {
				return NULL;
			}
		}

		# We just have host and/or path

		# If it's just a host...
		if (array_key_exists('host', $parts) &&
			(!array_key_exists('path', $parts) || strcmp($parts['path'], '/') == 0))
		{
			$hostparts = explode('.', $parts['host']);

			# Try to catch common idiom of nickname.service.tld

			if ((count($hostparts) > 2) &&
				(strlen($hostparts[count($hostparts) - 2]) > 3) && # try to skip .co.uk, .com.au
				(strcmp($hostparts[0], 'www') != 0))
			{
				return $hostparts[0];
			} else {
				# Do the whole hostname
				return $parts['host'];
			}
		} else {
			if (array_key_exists('path', $parts)) {
				# Strip starting, ending slashes
				$path = preg_replace('@/$@', '', $parts['path']);
				$path = preg_replace('@^/@', '', $path);
				if (strpos($path, '/') === false) {
					return $path;
				}
			}
		}

		return NULL;
	}

	function toUserNameXri($xri) {
		$base = xriBase($xri);

		if (!$base) {
			return NULL;
		} else {
			# =evan.prodromou
			# or @gratis*evan.prodromou
			$parts = explode('*', substr($base, 1));
			return array_pop($parts);
		}
	}	

	function xriBase($xri) {
		if (substr($xri, 0, 6) == 'xri://') {
			return substr($xri, 6);
		} else {
			return $xri;
		}
	}