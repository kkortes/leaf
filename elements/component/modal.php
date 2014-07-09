<div class="modal">
  <div class="modal-inner crow no-gutter">
    <div class="container">
      <div class="crow fill-white card no-gutter" style="display:block;">
        <div class="ws-12">
          <div class="fill-teal tile" style="padding:10px 0px; width:100%;">
            <?=$app->get('parts/nav')?>
          </div>
          <div class="spacer quarter"></div>
          
          <div class="crow up">
            <div class="ws-8">
              <h1>
              Modal
                <div class="inline-block relative">
                  <i class="icon icon-link"></i>
                  <div class="drop down-left" style="width:500px;">
                    <div class="tile base-padding fill-blue-grey text-white">
                      <a href="http://www.google.com/design/spec/components/dialogs.html" target="_blank" class="text-white">http://www.google.com/design/spec/components/dialogs.html</a>
                    </div>
                  </div>
                </div>
              </h1>

              <h2>Usage</h2>
              .modal > .modal-inner

              <h2>Consider using</h2>
              <a href="<?=$app->url?>grid">&.crow</a> on .modal-inner to centerize .container<br />
              <a href="<?=$app->url?>grid">.crow</a> in .container to access the grid inside the modal<br />
              .text-{color}<br />
              .fill-{color}<br />
              .tile

              <h2><i class="icon icon-warning"></i> Side note(s)</h2>
              There isn't any javascript for this modal, you'll have to write that code yourself. <br />
              Make sure .modal is placed in a wrapper with position:relative; on it
            </div>
            <div class="ws-4">
              <div class="spacer half"></div>
              <div class="label">Example</div>
              <div class="spacer quarter"></div>
              Inspect me :)
            </div>
          </div>

          <div class="spacer half"></div>
        </div>
      </div>
    </div>
  </div>
</div>