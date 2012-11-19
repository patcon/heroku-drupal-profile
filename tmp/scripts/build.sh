#!/bin/bash

drush make $BUILD_DIR/profile/build-test.make www --prepare-install
echo "-----> Appending settings.php snippets..."
for f in $BUILD_DIR/profile/tmp/snippets/*.settings.php
do
  # Concatenate newline and snippet, then append to settings.php
  echo "" | cat - $f | tee -a $BUILD_DIR/www/sites/default/settings.php > /dev/null
done
