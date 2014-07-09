<div class="top fill-blue-grey text-white">
  <div class="fullwidth">
    <div class="fill-plus-2" style="padding:6px 0;">
    </div>

    <div class="container">
      <div class="crow no-gutter">
        <div class="ws-12">
          <div class="clearfix show-on-mobile base-padding">
            <div class="pull-right">
              <a href="#" class="icon icon-list2 text-white" style="font-size:26px;"></a>
            </div>
          </div>
          <div class="tabs fill-blue-grey">
            <ul class="inline">
              <?
              $pages = array(
                $app->url => array(
                  'text' => 'Start',
                  'link' => true,
                  'active' => (!isset($_GET['page'])) ? true : false
                ),
                $app->url.'getting-started' => array(
                  'text' => 'Getting Started',
                  'link' => true,
                  'active' => (isset($_GET['page']) && $_GET['page'] == 'getting-started') ? true : false
                ),
                $app->url.'colors' => array(
                  'text' => 'Colors',
                  'link' => true,
                  'active' => (isset($_GET['page']) && $_GET['page'] == 'colors') ? true : false
                ),
                $app->url.'grid' => array(
                  'text' => 'Grid',
                  'link' => true,
                  'active' => (isset($_GET['page']) && $_GET['page'] == 'grid') ? true : false
                ),
                $app->url.'components' => array(
                  'text' => $app->get('parts/nav'),
                  'link' => false,
                  'active' => (isset($_GET['page']) && $_GET['page'] == 'component') ? true : false
                ),
              );
              foreach($pages as $link => $page) {
              ?>
              <li>
                <?
                if($page['link']) {
                ?>
                <a href="<?=$link?>" class="button tab-link text-white <?=($page['active'] ? 'active' : '')?>"><?=$page['text']?></a>
                <? }else{ ?>
                <?=$page['text']?>
                <? } ?>
              </li>
              <? } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>