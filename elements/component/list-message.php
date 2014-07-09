<?
include "base.php";
?>
<div class="container">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      List/message
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
      ul.unstyled > li > a.list-item > .text & .pull-left > .circle

      <h2>Consider using</h2>
      .text-{color}<br />
      .small
    </div>
    <div class="ws-4">
      <div class="spacer half"></div>
      <div class="label">Example (inspect me):</div>
      <div class="spacer quarter"></div>
      
      <ul class="unstyled">
      <li>
        <a href="#" class="list-item">
          <div class="pull-left" style="margin:0 10px 10px 0;">
            <div class="circle" style="width:40px;">
              <img src="<?=$app->server_url?>assets/image/dummies/hero<?=rand(2,4)?>.jpg" />
            </div>
          </div>
          <div class="text">
            <div>
              Hey guys. Long time no see.<br />
              <span class="small">to Hero 1, Hero 2</span>
            </div>
            <div class="drop up right small">
              <span class="text-grey">Just now</span>
            </div>
          </div>
        </a>
      </li>
      <li>
        <a href="#" class="list-item">
          <div class="pull-left" style="margin:0 10px 10px 0;">
            <div class="circle" style="width:40px;">
              <img src="<?=$app->server_url?>assets/image/dummies/hero<?=rand(5,7)?>.jpg" />
            </div>
          </div>
          <div class="text">
            <div>
              I'm fine, thanks! And you?<br />
              <span class="small">to Hero 2 <span class="text-grey">- RE: Hello! How are you?</span></span>
            </div>
            <div class="drop up right small">
              <span class="text-grey">5m</span>
            </div>
          </div>
        </a>
      </li>
      <li>
        <a href="#" class="list-item">
          <div class="pull-left" style="margin:0 10px 10px 0;">
            <div class="circle" style="width:40px;">
              <img src="<?=$app->server_url?>assets/image/dummies/hero<?=rand(8,10)?>.jpg" />
            </div>
          </div>
          <div class="text">
            <div>
              Hello! How are you?<br />
              <span class="small">to Hero 1 <span class="text-grey">- Conversation started</span></span>
            </div>
            <div class="drop up right small">
              <span class="text-grey">10m</span>
            </div>
          </div>
        </a>
      </li>
    </ul>

    </div>
  </div>
    <h2>Raw output, various sizes</h2>
</div>
<?=$component?>