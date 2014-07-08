<ul class="unstyled">
  <? foreach(array(1,2,3) as $i) { ?>
  <li>
    <a href="#" class="list-item">
      <div class="pull-left" style="margin:0 10px 10px 0;">
        <div class="circle" style="width:40px;">
          <img src="http://portrait.jpg.to" />
        </div>
      </div>
      <div class="text">
        Hello! How are you?<br />
        <span class="small">to Alex, Scott, Jenn <span class="text-grey">- Ola, yea I..</span></span>

        <div class="drop up right">
          <span class="small text-grey">15m</span>
        </div>
      </div>
    </a>
  </li>
  <? } ?>
</ul>

<ul class="unstyled minimized">
  <? foreach(array(1,2,3) as $i) { ?>
  <li>
    <a href="#" class="list-item base-padding">
      <div class="pull-left">
        <i class="icon icon-flag"></i> Menu
      </div>
      <div class="pull-right">
        <i class="icon icon-arrow-down6 toggle" data-class="icon-arrow-down6" data-altclass="icon-arrow-up5"></i>
      </div>
    </a>
    <ul>
      <? foreach(array(1,2,3) as $g) { ?>
        <li>
          <a href="#" class="list-item base-padding">
            <div class="pull-left">
              <i class="icon icon-flag"></i> Sub menu
            </div>
            <div class="pull-right">
              <i class="icon icon-arrow-down6 toggle" data-class="icon-arrow-down6" data-altclass="icon-arrow-up5"></i>
            </div>
          </a>
          <ul>
            <? foreach(array(1,2,3) as $f) { ?>
              <li>
                <a href="#" class="list-item base-padding">
                  <div class="pull-left">
                    <i class="icon icon-flag"></i> Sub-sub menu
                  </div>
                  <div class="pull-right">
                    <i class="icon icon-arrow-down6 toggle" data-class="icon-arrow-down6" data-altclass="icon-arrow-up5"></i>
                  </div>
                </a>
                <ul>
                  <? foreach(array(1,2,3) as $f) { ?>
                    <li>
                      <a href="http://google.se" class="list-item base-padding">
                        <i class="icon icon-facebook"></i> To google!
                      </a>
                    </li>
                  <? } ?>
                </ul>
              </li>
            <? } ?>
          </ul>
        </li>
      <? } ?>
    </ul>
  </li>
  <? } ?>
</ul>