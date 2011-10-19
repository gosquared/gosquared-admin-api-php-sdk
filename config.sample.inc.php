<?php

define("GS_ADMIN_SDK_API_KEY", "");                           // Your API Key here. Contact us at support@gosquared.com if you'd like access
define("GS_ADMIN_SDK_API_ENV", "sandbox");                    // Set to sandbox when testing
define("GS_ADMIN_SDK_API_VERSION", '1.0');                    // Set to the API version you require
/*
 * This next option allows you to control debugging functionality. This enables verbose logging, and all requests send to the
 * GoSquared api will be logged to STDOUT. Please ensure this is set to false when in production.
 */
define("GS_ADMIN_SDK_DEBUG", false);

// You shouldn't change these
define('GS_ADMIN_SDK_API_REQUEST_SCHEME', 'https');
define('GS_ADMIN_SDK_API_HOST', 'www.gosquared.com');
define('GS_ADMIN_SDK_API_ENDPOINT', '/api/admin_api.php');
