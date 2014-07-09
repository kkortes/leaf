<div class="fullwidth">
  <?
    $module = (isset($_GET['type'])?$_GET['type']:'images');
    $class = explode('/', $module);
    $class = end($class);
  ?>
  <div class="container">
    <div class="crow mod-row no-gutter up">
      <div class="ws-3">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row no-gutter up">
      <div class="ws-4">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
      <div class="ws-4">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
      <div class="ws-4">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row no-gutter up">
      <div class="ws-9">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row no-gutter up">
      <div class="ws-6">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
      <div class="ws-6">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row no-gutter up">
      <div class="ws-8">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
      <div class="ws-4">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row no-gutter up">
      <div class="ws-12">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('components/'.$module)?>
        </div>
      </div>
    </div>
  </div>
</div>