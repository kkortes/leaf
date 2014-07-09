<div class="container">
	<div class="crow">
		<div class="ws-8">
			<h1>
				Color schemes
				<div class="inline-block relative">
          <i class="icon icon-link"></i>
          <div class="drop down-left" style="width:500px;">
            <div class="tile base-padding fill-blue-grey text-white">
              <a href="http://www.google.com/design/spec/style/color.html" target="_blank" class="text-white">http://www.google.com/design/spec/style/color.html</a>
            </div>
          </div>
        </div>
			</h1>

			<h2>Usage</h2>
			.text-{color}<br />
			.fill-{color}<br />
			.border-{color}
			<br /><br />
			&.{target}-{color}-minus-{1to5}<br />
			&.{target}-{color}-base<br />
			&.{target}-{color}-plus-{1to4}<br />
			&.{target}-{color}-accent-{1to4}<br />

			<h2><i class="icon icon-warning"></i> Side note(s)</h2>
			You can define a color anywhere, like so: <?=htmlspecialchars('<div class="fill-cyan"><div class="child"></div></div>')?>, then add class ".fill-cyan-minus-3" on .child to make it brighter

			<div class="spacer"></div>
		</div>
		<div class="ws-4"></div>
	</div>
</div>
<?
	$colors = array(
		'red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'light-blue', 'cyan', 'teal', 'green', 'light-green', 'lime', 'yellow', 'amber', 'orange', 'deep-orange', 'brown', 'grey', 'blue-grey'
	);
	$colors = Colors::getAll();
	$steps = Colors::getSteps(true);
	
?>

<div class="crow fly no-gutter">
<?
	$i=0;
	foreach($colors as $color => $data) {
		if($i!=0 && $i%4==0) echo '</div><div class="crow fly no-gutter">'
?>
	<div class="fill-<?=$color?> tile">
		<h3 style="padding:5px 10px;"><?=ucfirst($color)?></h3>
		<ul class="unstyled">
		<? 
			$s=0;
			foreach($data['shades'] as $rgba) { ?>
			<li class="fill-<?=$steps[$s]?>" style="padding:10px;">
				<div class="clearfix">
					<div class="pull-left">#<?=$rgba?></div>
					<div class="pull-right">.<?=$steps[$s]?></div>
				</div>
			</li>
		<? $s++;} ?>
		<? 
			$a=10;
			foreach($data['accent'] as $rgba) { ?>
			<li class="fill-<?=$steps[$a]?>" style="padding:10px;">
				<div class="clearfix">
					<div class="pull-left">#<?=$rgba?></div>
					<div class="pull-right">.<?=$steps[$a]?></div>
				</div>
			</li>
		<? $a++;} ?>
		</ul>
	</div>
<?
$i++;
} 
?>
</div>