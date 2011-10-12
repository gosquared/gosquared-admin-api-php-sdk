<?php

define("GS_ADMIN_SDK_API_KEY", "");                           // Your API Key here
define("GS_ADMIN_SDK_API_ENV", "production");                 // Set to sandbox to test
define("GS_ADMIN_SDK_API_VERSION", '1.0');
/*
 * This next option allows you to control debugging functionality. This enables verbose logging, and all requests send to the
 * GoSquared api will be logged to STDERR. Please ensure this is set to false when in production.
 */
define("GS_ADMIN_SDK_DEBUG", false);

// You shouldn't change these
define('GS_ADMIN_SDK_API_REQUEST_SCHEME', 'https');
define('GS_ADMIN_SDK_API_HOST', 'www.gosquared.com');
define('GS_ADMIN_SDK_API_ENDPOINT', '/api/admin_api.php');