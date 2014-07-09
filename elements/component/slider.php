<?
include "base.php";
?>
<div class="container">
  <div class="crow up">
    <div class="ws-9">
      <h1>
      Sliders
      </h1>

      <h2>Usage</h2>
      .slider > .slider-nav & .crow.no-gutter.fly.stripe.keep-alive > .slide (any amount)

      <h2>Consider using</h2>
      A constant height for each .slide to make sure the slider sticks in place<br />
      Another interval (defaults to 8 seconds)
      
      <h2><i class="icon icon-warning"></i> Side note(s)</h2>
      Make sure to run initSlider() function in <i>scripts.js</i> to enable the slider functionality<br />
      .stripe must have code logics for its width. Amount of slides times 100% should be the total width
    </div>
    <div class="ws-3">
      <div class="spacer half"></div>
      <div class="label">Example (inspect me):</div>
      <div class="spacer quarter"></div>
      
      <?
        $slides = array(1,2,3,4,5);
      ?>
      <div class="slider">
        <div class="crow no-gutter fly stripe keep-alive" style="width:<?=count($slides)*100?>%;">
          <? foreach($slides as $i) { ?>
            <div class="slide">
              <img src="<?=$app->server_url?>assets/image/dummies/hero<?=$i?>.jpg" />
            </div>
          <? } ?>
        </div>
        <div class="slider-nav">
          <ul class="inline">
            <?  
            $i=0;
            foreach($slides as $g) { ?>
              <li>
                <a href="#" class="circle <?=(!$i) ? 'active' : ''?>"></a>
              </li>
            <?
            $i++;
            }
            ?>
          </ul>
        </div>
      </div>

    </div>
  </div>
    <h2>Raw output, various sizes</h2>
</div>
<?=$component?>