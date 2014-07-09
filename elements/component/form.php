<?
$component = $app->get('pages/form');
?>
<div class="container">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      Form
        <div class="inline-block relative">
          <i class="icon icon-link"></i>
          <div class="drop down-left" style="width:500px;">
            <div class="tile base-padding fill-blue-grey text-white">
              <a href="http://www.google.com/design/spec/components/text-fields.html" target="_blank" class="text-white">http://www.google.com/design/spec/components/text-fields.html</a>
            </div>
          </div>
        </div>
      </h1>

      <h2>Usage</h2>
      .input > label/.label & input/textarea/select/checkbox/radio
      

      <h2>Consider using</h2>
      &.error<br />
      disabled<br />
      .onoffswitch (inspect example)<br />
      <a href="<?=$app->url?>grid">.crow</a> to set the grid for your form

      <h2><i class="icon icon-warning"></i> Side note(s)</h2>
      All validation has to be created by you, Leaf CSS framework does not provide that.
    </div>
    <div class="ws-4">
      <div class="spacer half"></div>
      <div class="label">Example (inspect me):</div>
      <div class="spacer quarter"></div>
      <div class="crow no-gutter up">
        <div class="ws-6">
          <div class="input">
            <label for="name1">
              First name
            </label>
            <input type="text" name="firstname" id="name1" placeholder="Enter first name" />
            <div class="drop down-left max error-message">
              <span>Incorrect input</span>
              <div class="pull-right">
                <i class="icon icon-warning"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="ws-6">
          <div class="input error">
            <label for="name2">
              Last name
            </label>
            <input type="text" name="lastname" id="name2" placeholder="Enter last name" value="13@37" />
            <div class="drop down-left max error-message">
              <span>Incorrect input</span>
              <div class="pull-right">
                <i class="icon icon-warning"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="ws-6">
          <div class="input">
            <div class="onoffswitch">
              <input type="checkbox" name="switch" class="checkbox" id="sw1">
              <label class="switch" for="sw1">
                <div class="inner">
                  <div class="on">
                    <div class="value">
                      Yes
                    </div>
                  </div>
                  <div class="off">
                    <div class="value">
                      No
                    </div>
                  </div>
                </div>
                <div class="handle"></div>
              </label>
            </div>
          </div>
        </div>
        <div class="ws-6">
          <div class="input">
            <input type="submit" class="button fill-cyan text-white" value="Submit" />
          </div>
        </div>
      </div>

    </div>
  </div>
    <h2>Raw output</h2>
</div>
<?=$component?>
<div class="spacer"></div>