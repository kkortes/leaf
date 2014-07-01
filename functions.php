<?
	// Download function target a ?download=directory/file
	// Notice! This function is unsafe to leave at it is.
  // Make restrictions for which files are allowed to be downloaded.
	if(isset($_GET['download']) && $_GET['download']) {
    $filename = explode('/', $_GET['download']);
    $filename = end($filename);

    $url = $app->server_root.$_GET['download'];
    
    if(is_file($url)) {
      header("Content-Type: application/octet-stream");
      header("Content-Transfer-Encoding: Binary");
      header("Content-disposition: attachment; filename=\"".$filename."\"");
      readfile($url);
      exit;
    }
  }

  // Placeholder for eventual translations
  if(!function_exists('__')) {
    function __($value = false) {
      return $value;
    }
  }

  // A ul/li list renderer for the search function
  if(!function_exists('renderList')) {
    function renderList($pagetree, $render = '') {
      foreach($pagetree as $node => $path) {
        if(is_array($path)) {
          $render .= '<li class="directory" rel="'.str_replace('.','', $node).'">'.$node.' <span>+</span></li><ul>';
          $render = renderList($path, $render).'</ul>';
        }else{
          $render .= '<li rel="'.str_replace('.','', $node).'">'.$path.'</li>';
        }
      }
      return $render;
    }
  }

  // Recursive function to build an array with filedata
  if(!function_exists('search')) {
    function search($search, $pagetree = array(), $parent = false) {
      $glob = glob($search);

      if($glob) {
        foreach($glob as $node) {
          $nodename = str_replace(str_replace('*', '', $search), '', $node);     
          if(is_dir($node)) {
            if($parent)
              $pagetree[$parent][$nodename] = search($node.'/*', array(), false);
            else
              $pagetree = search($node.'/*', $pagetree, $nodename);
          }else{
            if($parent)
              $pagetree[$parent][$nodename] = $nodename;
            else
              $pagetree[$nodename] = $nodename;
          }
        }
      }else{
        $nodename = explode('/', str_replace('/*', '', $search));
        $nodename = end($nodename);
        $pagetree[$nodename] = '<li class="directory">'.$nodename.'</li>';
      }
      return $pagetree;
    }
  }
?>