<?
$component = $app->get('pages/dropdowns');
?>
<div class="container">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      Dropdowns
      </h1>

      <h2>Usage</h2>
      .drop.{direction}
      
      <h2>Consider using</h2>
      .relative (as wrapper)<br />
      &.up.left or &.up.right (inset)<br />
      &.up-left or &.up-right (outset)<br />
      &.down.left or &.down.right (inset)<br />
      &.down-left or &.down-right (outset)<br />
      &.right-up or &.right-down (outset)<br />
      &.left-up or &.left-down (outset)<br />
      &.max<br /><br />
      .fill-{color}<br />
      .text-{color}<br />
      .base-padding

      <h2><i class="icon icon-warning"></i> Side note(s)</h2>
      No javascript required, the show transition triggers on hover<br />
      Using no .relative-wrapper makes the .drop visible by default
    </div>
    <div class="ws-4">
      <div class="spacer half"></div>
      <div class="label">Example (inspect me):</div>
      <div class="spacer quarter"></div>
      <div class="tile fill-cyan">
        <?=$app->get('parts/nav')?>
      </div>
    </div>
  </div>
    <h2>Raw output</h2>
</div>
<?=$component?>

<div class="spacer"></div>