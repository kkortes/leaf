<? 
  include_once "App.php";
  $app = new App(array('functions'));
  
  $app->pointer = 'elements/';
  
  echo $app->get('header');

  echo $app->get('pages/'.(isset($_GET['page']) ? $_GET['page'] : 'index'));

  echo $app->get('footer');
?>