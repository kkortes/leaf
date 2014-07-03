<div>
  <?
    $icons = @file_get_contents($app->root.'/leaf/fonts/icomoon/selection.json');
    $icons = json_decode($icons);
    
    $wrappers = array(
      'circle'
    );

    $colors = array(
      'red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'light-blue', 'cyan', 'teal', 'green', 'light-green', 'lime', 'yellow', 'amber', 'orange', 'deep-orange', 'brown', 'grey', 'blue-grey'
    );

  ?>
    <div class="crow no-gutter">
  <?
    $i=0;
    foreach($icons->icons as $icon) {
      $wrapper = $wrappers[rand(0, count($wrappers)-1)];
      $color = $colors[rand(0, count($colors)-1)];
      ?>
      <div class="w-5">
        <div class="<?=$wrapper?> fill-<?=$color?> fill-minus-2">
          <i>
            <i class="icon icon-<?=$icon->properties->name?>"></i><br />
            <?=$icon->properties->name?>
          </i>
        </div>
      </div>
      <?
      $i++;
    }
  ?>
  </div>
</div>