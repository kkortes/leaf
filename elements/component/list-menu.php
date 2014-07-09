<?
include "base.php";
?>
<div class="container">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      List/menu
        <div class="inline-block relative">
          <i class="icon icon-link"></i>
          <div class="drop down-left" style="width:500px;">
            <div class="tile base-padding fill-blue-grey text-white">
              <a href="http://www.google.com/design/spec/components/lists.html" target="_blank" class="text-white">http://www.google.com/design/spec/components/lists.html</a>
            </div>
          </div>
        </div>
      </h1>

      <h2>Usage</h2>
      ul.unstyled.minimized > li > a.list-item & ul (repeat)

      <h2>Consider using</h2>
      .base-padding<br />
      .icon.icon-{icon}

      <h2><i class="icon icon-warning"></i> Side note(s)</h2>
      Make sure to run activateLists() function in <i>scripts.js</i> for expand functionality<br />
      The javascript checks if href is set to # and expands if so, elsewise it triggers a normal click<br />
      For the expands to work, make sure the nested UL's are inside the LI's and not the a-tags
    </div>
    <div class="ws-4">
      <div class="spacer half"></div>
      <div class="label">Example (inspect me):</div>
      <div class="spacer quarter"></div>
      
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

    </div>
  </div>
    <h2>Raw output, various sizes</h2>
</div>
<?=$component?>