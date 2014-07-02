<div class="fullwidth">
  <?
    $module = (isset($_GET['module'])?$_GET['module']:'info-module');
    $class = explode('/', $module);
    $class = end($class);
  ?>
  <div class="container">
    <div class="crow mod-row no-gutter">
      <div class="ws-3">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row no-gutter">
      <div class="ws-4">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-4">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-4">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row no-gutter">
      <div class="ws-9">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row no-gutter">
      <div class="ws-6">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-6">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row no-gutter">
      <div class="ws-8">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-4">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row no-gutter">
      <div class="ws-12">
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
  </div>
</div>