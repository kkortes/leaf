<div class="button flat text-white relative top-nav desktop-nav">
  <span>Components <i class="icon icon-arrow-down6"></i></span>
  <div class="drop down left card fill-white" style="width:200px; z-index:12;">
    <div class="crow up no-gutter keep-alive">
      <div class="ws-12">
        <ul class="unstyled">
          <?
          $glob = glob($app->root.'elements/component/*');
          foreach($glob as $node) {
            $page = explode('/',$node);
            $page = end($page);
            $node = $page;
            $page = explode('.',$page);

            if(isset($page[1])) {
              if($page[0] == 'base') continue;

              $class = '';
              if(isset($_GET['page']) && $_GET['page'] == 'component' && isset($_GET['component']) && $_GET['component'] == $page[0]) {
                $class = 'active';
              }
              $name = str_replace('-', '/', $page[0]);
            ?>
              <li><a href="<?=$app->url?>component/type/<?=$page[0]?>" class="<?=$class?> list-item"><?=ucfirst($name)?></a></li>
            <?
            }
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>