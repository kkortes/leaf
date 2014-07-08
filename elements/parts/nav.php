<div class="top-nav relative base-padding">
  <i class="icon icon-list2" style="font-size:30px;"></i>
  <div class="drop up max left card fill-white">
    <div class="crow up no-gutter keep-alive">
      <div class="ws-6">
        <ul class="unstyled">
          <li class="base-padding">
            <strong class="label"><?=__('Page(s)', '')?></strong>
          </li>
          <?
          $glob = glob(__DIR__.'/../pages/*');
          foreach($glob as $node) {
            $page = explode('/',$node);
            $page = end($page);
            $node = $page;
            $page = explode('.',$page);

            if(isset($page[1])) {
              if($page[0] == 'compontents') continue;
              if($page[0] == 'crow') continue;
              if($page[0] == 'index') continue;

              $class = '';
              if(isset($_GET['page']) && $page[0] == $_GET['page']) {
                $class = 'active';
              }
            ?>
              <li><a href="<?=$app->url?><?=$page[0]?>" class="<?=$class?> list-item"><?=ucfirst($page[0])?></a></li>
            <?
            }
          }
          ?>
        </ul>
      </div>
      <div class="ws-6">
        <ul class="unstyled">
          <li class="base-padding">
            <strong class="label"><?=__('Component(s)', '')?></strong>
          </li>
          <?
          $glob = glob(__DIR__.'/../compontents/*');
          foreach($glob as $node) {
            $page = explode('/',$node);
            $page = end($page);
            $node = $page;
            $page = explode('.',$page);

            if(isset($page[1])) {
              $class = '';
              if(isset($_GET['page']) && $_GET['page'] == 'compontents' && isset($_GET['compontent']) && $_GET['compontent'] == $page[0]) {
                $class = 'active';
              }
            ?>
              <li><a href="<?=$app->url?>compontents/compontent/<?=$page[0]?>" class="<?=$class?> list-item"><?=ucfirst($page[0])?></a></li>
            <?
            }
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>