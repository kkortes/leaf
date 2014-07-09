<?
include "base.php";
?>
<div class="container">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      Tiles
      </h1>

      <h2>Usage</h2>
      .tile

      <h2>Consider using</h2>
      .fill-{color}<br />
      .base-padding & .strong-padding<br />
      <a href="/grid">.crow</a> inside a .tile
    </div>
    <div class="ws-4">
      <div class="spacer half"></div>
      <div class="label">Example (inspect me):</div>
      <div class="spacer quarter"></div>
      <div class="tile fill-white">
        <div class="image">
          <img src="<?=$app->url?>assets/image/cows.jpg" style="width:100%;" />
        </div>
        <div class="strong-padding">
          Cows running free <a href="http://college.careofhaus.se" target="_blank" class="text-grey text-minus-1 small">- photo found here</a>
        </div>
      </div>
    </div>
  </div>
    <h2>Raw output, various sizes</h2>
</div>
<?=$component?>