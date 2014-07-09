<?
$component = $app->get('components/buttons');
?>
<div class="container">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      Buttons
        <div class="inline-block relative">
          <i class="icon icon-link"></i>
          <div class="drop down-left" style="width:500px;">
            <div class="tile base-padding fill-blue-grey text-white">
              <a href="http://www.google.com/design/spec/components/buttons.html" target="_blank" class="text-white">http://www.google.com/design/spec/components/buttons.html</a>
            </div>
          </div>
        </div>
      </h1>

      <h2>Usage</h2>
      a.button<br />
      a.button.circle<br />
      a.button.flat<br />
      a.button.text<br />
      input.button (submit button)
      

      <h2>Consider using</h2>
      .fill-{color}<br />
      .text-{color}<br />
    </div>
    <div class="ws-4">
      <div class="spacer half"></div>
      <div class="label">Example (inspect me):</div>
      <div class="spacer quarter"></div>
      <a href="#" class="button circle fill-cyan">
        <i class="icon icon-plus3 text-white"></i>
      </a>
    </div>
  </div>
    <h2>Raw output</h2>
</div>
<?=$component?>