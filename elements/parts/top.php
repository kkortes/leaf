<div class="top fill-blue-grey text-white">
  <div class="fullwidth">
    <div class="fill-plus-2" style="padding:8px 0 5px 0;">
      <div class="container">
        <div class="crow no-gutter">
          <div class="ws-12">
            
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="crow no-gutter">
        <div class="ws-6">
          <div class="tabs fill-blue-grey">
            <ul class="inline">
              <?
              $pages = array(
                $app->url.'getting-started' => array(
                  'text' => 'Getting Started',
                  'link' => true
                ),
                $app->url.'grid' => array(
                  'text' => 'Grid',
                  'link' => true
                ),
                $app->url.'compontents' => array(
                  'text' => $app->get('parts/nav'),
                  'link' => false
                ),
              );
              foreach($pages as $link => $page) {
              ?>
              <li>
                <?
                if($page['link']) {
                ?>
                <a href="<?=$link?>" class="button tab-link text-white"><?=$page['text']?></a>
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