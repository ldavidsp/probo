<?php
// Run database updates prior to config changes.
echo "Running database updates....\n";
passthru('drush updb --cache-clear=0 -y');
// Import all config changes.
echo "Importing configuration from yml files...\n";
passthru('drush config-import -y');
echo "Import of configuration complete.\n";
//Clear all cache
echo "Rebuilding cache.\n";
passthru('drush cr');
echo "Rebuilding cache complete.\n";
