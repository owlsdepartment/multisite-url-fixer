<?php

/**
 * Plugin Name: Multisite URL Fixer
 * Plugin URI: https://github.com/Genyus/multisite-url-fixer
 * Description: Fixes WordPress issues with home and site URL on multisite when using Bedrock
 * Version: 1.0.1
 * Author: Roots
 * Author URI: https://roots.io/
 * License: MIT License
 */

require_once __DIR__ . '/src/URLFixer.php';

use Roots\Bedrock\URLFixer;

if ( is_multisite() ) {
    (new URLFixer)->addFilters();
}
