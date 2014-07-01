<?
/*
  Remove SAMPLE. from my name
*/
$url = $_SERVER['PHP_SELF'];
if(strpos($url, '.php')) {
  $url = explode('.php', $url);
  array_pop($url);
  $url = implode('.php', $url);
  $explode = explode('/', $url);
  $end = end($explode);
  $url = str_replace($end, '', $url);
}

$json = array(
  'localhost' => array(
    'url'         => $url,
    'server_url'  => $url,
    'root'        => __DIR__.'/',
    'server_root' => __DIR__.'/',
    'mysql'       => array(
        'user'    => '',
        'pw'      => '',
        'host'    => '',
        'db'      => '',
        'prefix'  => ''
    ),
  ),
  'live' => array(
    'url'         => $url,
    'server_url'  => $url,
    'root'        => __DIR__.'/',
    'server_root' => __DIR__.'/',
    'mysql'       => array(
        'user'    => '',
        'pw'      => '',
        'host'    => '',
        'db'      => '',
        'prefix'  => ''
    )
  ),
);

echo json_encode($json);
?>