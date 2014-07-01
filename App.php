<?
/**
 * Description of App
 *
 * @author kortekim twitter
 */

class App {

  static $confdir = __DIR__;
  static $conffile = 'config.json.php';

  public $env = 'localhost';
  public $url = null;
  public $server_url = null;
  public $root = null;
  public $server_root = null;
  public $pointer = null;

  public function __construct($includes = array(), $confdir = false) {
    if($confdir)
      $this::$confdir = $confdir;
    else
      $this::$confdir .= '/';
    
    $this->checkIfLive();

    $url = $_SERVER['PHP_SELF'];
    if(strpos($url, '.php')) {
      $url = explode('.php', $url);
      array_pop($url);
      $url = implode('.php', $url);
      $explode = explode('/', $url);
      $end = end($explode);
      $url = str_replace($end, '', $url);
    }

    $config = array(
      'url' => $url,
      'server_url' => $url,
      'root' => __DIR__.'/',
      'server_root' => __DIR__.'/'
    );

    $parsed = $this->parseConfig();
  
    if(isset($parsed->{$this->env}))
      $config = array_merge($config, (array) $parsed->{$this->env});

    foreach($config as $key => $value)
      $this->{$key} = $value;

    if($includes)
      $this->includer($includes);
  }

  public function checkIfLive() {
    if(!in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1')))
      $this->env = 'live';
  }

  public function parseConfig() {
    $file = $this::$confdir.$this::$conffile;
    
    $config = array();
    if(file_exists($file))
      $config = json_decode($this->get($file));

    return $config;
  }

  public function get($path, $variablesx = array()) {
    $path = $this->pointer.$path;
    
    if(!strpos($path, '.php'))
      $path = $path.'.php';
    
    if(file_exists($path)) {
      ob_start();
        extract($variablesx);
        $app = $this;

        include $path;

      $output = ob_get_clean();
      return $output;
    }else{
      throw new Exception('Element does not exists');
    }
  }

  public function includer($includes = array(), $directory = false) {
    foreach ($includes as $dir) {
      $this->autoload($directory . $dir);
    }
  }

  public function autoload($file){
    if(is_dir($file)) {
      foreach(glob($file.'/*') as $file) {
        $this->autoload($file);
      }
    }else{
      if(!strpos($file, '.php'))
        $file = $file.'.php';
      if(is_file($file)) {
        $app = $this;
        include_once $file;
      }
    }
  }
}
?>