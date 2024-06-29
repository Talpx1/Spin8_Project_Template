<?php declare(strict_types=1);

/**
 * %PLUGIN_NAME%
 *
 * @package           %PLUGIN_NAMESPACE%
 * @author            %PLUGIN_AUTHOR%
 * @copyright         %YEAR% %PLUGIN_AUTHOR%
 * @license           %PLUGIN_LICENSE%
 *
 * @wordpress-plugin
 * Plugin Name:       %PLUGIN_NAME%
 * Plugin URI:        %PLUGIN_URI%
 * Description:       %PLUGIN_DESCRIPTION%
 * Version:           %PLUGIN_VERSION%
 * Requires at least: %MIN_WORDPRESS_VERSION%
 * Requires PHP:      %MIN_PHP_VERSION%
 * Author:            %PLUGIN_AUTHOR%
 * Author URI:        %PLUGIN_AUTHOR_URI%
 * License:           %PLUGIN_LICENSE%
 * License URI:       %PLUGIN_LICENSE_URI%
 * Text Domain:       %PLUGIN_SLUG%
 * Domain Path:       /languages
 * Update URI:        %PLUGIN_UPDATE_URI%
*/

defined('ABSPATH') || die('[%PLUGIN_NAME%] Direct access is not allowed!');

$autoloader = __DIR__.'/vendor/autoload.php';

if (!file_exists($autoloader) || !is_readable($autoloader)) {
    throw new RuntimeException("[%PLUGIN_NAME%] Can't require the autoloader in ".basename(__FILE__).", it's either missing or non-readable. Check the autoloader in {$autoloader}");
}

require_once $autoloader;

require_once __DIR__.'/vendor/spin8/framework/src/bootstrap.php';