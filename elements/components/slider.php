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