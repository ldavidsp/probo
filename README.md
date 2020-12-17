# HCWH Starterkit

[![Pantheon hcwh-starterkit](https://img.shields.io/badge/dashboard-pantheon-yellow.svg)](https://dashboard.pantheon.io/sites/fe020847-021a-4500-9cce-c9cfa9f616c8)
[![Dev Site hcwh-starterkit](https://img.shields.io/badge/site-development-green.svg)](https://dev-hcwh-starterkit.pantheonsite.io/)
[![Documentation](https://img.shields.io/badge/documentation-blue.svg)](https://hcwh.atlassian.net/wiki/spaces/DSK/overview)

## Installation

1. Copy `/web/sites/example.settings.php` to `/web/sites/default/settings.main.php` and add to repository.
1. Copy `/config/default` to `/config/main` and add to repository.
1. Install database from StarterKit.

## Important files and directories

### `/web`

Pantheon will serve the site from the `/web` subdirectory due to the configuration in `pantheon.yml`, facilitating a Composer based workflow. Having your website in this subdirectory also allows for tests, scripts, and other files related to your project to be stored in your repo without polluting your web document root.

### `/config`

One of the directories moved to the git root is `/config`. This directory holds Drupal's `.yml` configuration files.

### `composer.json`

This site is managed by Composer! All core and contrib modules are added to the project via `composer.json` and `composer.lock` keeps track of the exact version of each modules (or other dependency). Modules, and themes are placed in the correct directories thanks to the `"installer-paths"` section of `composer.json`. `composer.json` also includes instructions for `drupal-scaffold` which takes care of placing some individual files in the correct places like `settings.pantheon.php`.

## Updating your site

When using this repository to manage your Drupal site, you will no longer use the Pantheon dashboard to update your Drupal version. Instead, you will manage your updates using Composer. Ensure your site is in Git mode, clone it locally, and then run composer commands from there.  Commit and push your files back up to Pantheon as usual. See [Update Drupal core via Composer](https://www.drupal.org/docs/8/update/update-drupal-core-via-composer).
