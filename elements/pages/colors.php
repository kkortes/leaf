<?
	$colors = array(
		'red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'light-blue', 'cyan', 'teal', 'green', 'light-green', 'lime', 'yellow', 'amber', 'orange', 'deep-orange', 'brown', 'grey', 'blue-grey'
	);
	$modes = array(
		'm450', 'm400', 'm300', 'm200', 'm100', 'base', 'p100', 'p200', 'p300', 'p400', 'a100', 'a200', 'a300', 'a400'
	);
?>

<div class="crow fly no-gutter">
<?
	$i=0;
	foreach($colors as $color) {
		if($i!=0 && $i%4==0) echo '</div><div class="crow fly no-gutter">'
?>
	<div class="<?=$color?>">
		<h3 style="padding:5px 10px;"><?=ucfirst($color)?></h3>
		<ul class="unstyled">
		<? foreach($modes as $mode) { ?>
			<li class="<?=$color?> <?=$mode?>" style="padding:10px;"><?=$mode?></li>
		<? } ?>
		</ul>
	</div>
<?
$i++;
} 
?>
</div>