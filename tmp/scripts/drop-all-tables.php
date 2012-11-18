<?php

require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

# Loop over all tables and drop
$result = db_query("SHOW TABLES");
while($row = db_fetch_array($result)) {
  $table = array_pop($row);
  db_query("DROP $table");
}
