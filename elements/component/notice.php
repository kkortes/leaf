<?
$component = $app->get('pages/notice');
?>
<div class="container">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      Notice
        <div class="inline-block relative">
          <i class="icon icon-link"></i>
          <div class="drop down-left" style="width:500px;">
            <div class="tile base-padding fill-blue-grey text-white">
              <a href="http://www.google.com/design/spec/components/snackbars-and-toasts.html" target="_blank" class="text-white">http://www.google.com/design/spec/components/snackbars-and-toasts.html</a>
            </div>
          </div>
        </div>
      </h1>

      <h2>Usage</h2>
      .drop.{direction}.max.notice > .message > span & .pull-right > .button.flat
      
      <h2>Consider using</h2>
      &.down<br />
      &.up<br />
      .fill-{color}<br />
      .text-{color}

      <h2><i class="icon icon-warning"></i> Side note(s)</h2>
      Below, in the raw output, the notices has been placed as .drop's inside a .relative which triggers the dropdown hover visibilty. Normally you would want javascript to show/hide the notices.
    </div>
    <div class="ws-4">
    </div>
  </div>
    <h2>Raw output</h2>
</div>
<?=$component?>