<?
include "base.php";
?>
<div class="container">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      List/text
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
      ul.unstyled > li.list-item > .text

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
          <a href="http://google.com" target="_blank" class="list-item">
            <div class="text">
              Information about Google<br />
              <span class="text-grey small">Click here to read more about google and use their amazing search engine!</span>
            </div>
          </a>
        </li>
        <li>
          <a href="<?=$app->url?>" class="list-item">
            <div class="text">
              Information about Leaf<br />
              <span class="text-grey small">Click here to read more about leaf and what it has to offer!</span>
            </div>
          </a>
        </li>
        <li>
          <a href="http://www.zombo.com/" target="_blank" class="list-item">
            <div class="text">
              Feeling bored?<br />
              <span class="text-grey small">Click here!</span>
            </div>
          </a>
        </li>
      </ul>

    </div>
  </div>
    <h2>Raw output, various sizes</h2>
</div>
<?=$component?>