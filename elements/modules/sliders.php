<?
  $slides = array(1,2,3,4,5);
?>
<div class="slider">
  <div class="crow no-gutter fly stripe" style="width:<?=count($slides)*100?>%;">
    <? foreach($slides as $slide) { ?>
      <div class="slide">
        <img />
      </div>
    <? } ?>
  </div>
  <div class="slider-nav">
    <ul class="inline">
      <? foreach($slides as $slide) { ?>
        <li>
          <a href="#" class="circle fill-teal" style="display:block;">
            abc
          </a>
        </li>
      <? } ?>
    </ul>
  </div>
</div>