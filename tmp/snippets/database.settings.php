preg_match('|^mysql://(.*):(.*)@(.*)/(.*)\?reconnect=true$|', $_ENV['CLEARDB_DATABASE_URL'], $db_url_parts);

$databases = array (
  'default' =>. 
  array (
    'default' =>. 
    array (
      'database' => $db_url_parts[4],
      'username' => $db_url_parts[1],
      'password' => $db_url_parts[2],
      'host' => $db_url_parts[3],
      'port' => '', 
      'driver' => 'mysql',
      'prefix' => '', 
    ),  
  ),  
);
