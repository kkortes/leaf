<ul class="inline nav text-center">
  <li><strong><?=__('Page(s)', '')?></strong></li>
  <?
  $glob = glob(__DIR__.'/../pages/*');
  foreach($glob as $node) {
    $page = explode('/',$node);
    $page = end($page);
    $node = $page;
    $page = explode('.',$page);

    if(isset($page[1])) {
      if($page[0] == 'modules') continue;
      if($page[0] == 'crow') continue;
      if($page[0] == 'index') continue;

      $class = '';
      if(isset($_GET['page']) && $page[0] == $_GET['page']) {
        $class = 'class="active"';
      }
    ?>
      <li><a href="<?=$app->url?><?=$page[0]?>" <?=$class?>><?=$page[0]?></a></li>
    <?
    }
  }
  ?>

  <li><strong><?=__('Module(s)', '')?></strong></li>
  <?
  $glob = glob(__DIR__.'/../modules/*');
  foreach($glob as $node) {
    $page = explode('/',$node);
    $page = end($page);
    $node = $page;
    $page = explode('.',$page);

    if(isset($page[1])) {
      $class = '';
      if(isset($_GET['page']) && $_GET['page'] == 'modules') {
        $class = 'class="active"';
      }
    ?>
      <li><a href="<?=$app->url?>modules/module/<?=$page[0]?>" <?=$class?>><?=$page[0]?></a></li>
    <?
    }
  }
  ?>
</ul>