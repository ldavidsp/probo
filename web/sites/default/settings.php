<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * The development configuration should be disabled by default.
 */
$config['config_split.config_split.development']['status'] = FALSE;

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all environments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Load local development override configuration, if available.
 *
 * Use settings.local.php to override variables on secondary (staging,
 * development, etc) installations of this site. Typically used to disable
 * caching, JavaScript/CSS compression, re-routing of outgoing emails, and
 * other things that should not happen on development and testing sites.
 *
 * Keep this code block at the end of this file to take full effect.
 */

if (getenv('LANDO') === 'ON' && file_exists($app_root . '/' . $site_path . '/settings.lando.php')) {
  include $app_root . '/' . $site_path . '/settings.lando.php';
}

if (getenv('PROBO_ENVIRONMENT') && file_exists($app_root . '/' . $site_path . '/settings.probo.php')) {
  include $app_root . '/' . $site_path . '/settings.probo.php';
}

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}

// Automatically generated include for settings managed by ddev.
if (file_exists($app_root . '/' . $site_path . '/settings.ddev.php') && getenv('IS_DDEV_PROJECT') == 'true') {
  include $app_root . '/' . $site_path . '/settings.ddev.php';
}
$settings['install_profile'] = 'standard';
