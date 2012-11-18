<?php

# Loop over all tables and drop
$result = db_query("SHOW TABLES");
while($row = db_fetch_array($result)) {
  $table = array_pop($row);
  $result2 = db_query("DROP $table");
};
