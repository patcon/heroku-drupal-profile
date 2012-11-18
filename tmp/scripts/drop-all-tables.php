<?php

# Loop over all tables and drop
$result = db_query("SHOW TABLES");
while($row = db_fetch_array($result)) {
  $table = array_pop($row);
  db_query("DROP $table");
}
