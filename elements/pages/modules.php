<div class="fullwidth">
  <?
    $module = (isset($_GET['module'])?$_GET['module']:'info-module');
    $class = explode('/', $module);
    $class = end($class);
  ?>
  <div class="container">
    <div class="crow mod-row">
      <div class="ws-3">
        <span class="label label-info pull-right">25 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <span class="label label-info pull-right">25 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <span class="label label-info pull-right">25 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <span class="label label-info pull-right">25 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row">
      <div class="ws-4">
        <span class="label label-info pull-right">33 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-4">
        <span class="label label-info pull-right">33 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-4">
        <span class="label label-info pull-right">33 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row">
      <div class="ws-9">
        <span class="label label-info pull-right">75 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-3">
        <span class="label label-info pull-right">25 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row">
      <div class="ws-6">
        <span class="label label-info pull-right">50 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-6">
        <span class="label label-info pull-right">50 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row">
      <div class="ws-8">
        <span class="label label-info pull-right">66 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
      <div class="ws-4">
        <span class="label label-info pull-right">33 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
    <div class="crow mod-row">
      <div class="ws-12">
        <span class="label label-info pull-right">100 %</span>
        <div class="mod mod-<?=$class?>">
          <?=$app->get('modules/'.$module)?>
        </div>
      </div>
    </div>
  </div>
</div>