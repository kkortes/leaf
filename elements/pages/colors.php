<?
	$colors = array(
		'red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'light-blue', 'cyan', 'teal', 'green', 'light-green', 'lime', 'yellow', 'amber', 'orange', 'deep-orange', 'brown', 'grey', 'blue-grey'
	);
	$colors = Colors::getAll();
	$steps = Colors::getSteps(true);
	array_pop($steps);
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