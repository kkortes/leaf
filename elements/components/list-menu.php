<ul class="unstyled minimized">
  <? foreach(array(1,2,3) as $i) { ?>
  <li>
    <a href="#" class="list-item base-padding">
      <div class="pull-left">
        <i class="icon icon-flag"></i> Top menu
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
                    <i class="icon icon-flag"></i> Second sub menu
                  </div>
                  <div class="pull-right">
                    <i class="icon icon-arrow-down6 toggle" data-class="icon-arrow-down6" data-altclass="icon-arrow-up5"></i>
                  </div>
                </a>
                <ul>
                  <? foreach(array(1,2,3) as $f) { ?>
                    <li>
                      <a href="http://google.se" class="list-item">
                        <i class="icon icon-googleplus"></i> Google.com
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