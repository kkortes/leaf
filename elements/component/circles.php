<?
include "base.php";
?>
<div class="container">
	<div class="crow up">
		<div class="ws-8">
			<h1>
			Circles
			</h1>

			<h2>Usage</h2>
			.circle

			<h2>Consider using</h2>
			.fill-{color}<br />
			.icon.icon-{icon} inside a .circle<br />
			<?=htmlspecialchars('<img />')?>-tag inside a .circle<br />
			A set width value (and height value if makeResize() isn't running)

			<h2><i class="icon icon-warning"></i> Side note(s)</h2>
			Make sure to run makeResize() function in <i>scripts.js</i> for correct measurements, even responsively<br />
			.circle can align any number of elements centered within in, just make sure to wrap them in a div
		</div>
		<div class="ws-4">
			<div class="spacer half"></div>
			<div class="label">Example (inspect me):</div>
			<div class="spacer quarter"></div>

			<div class="circle fill-red" style="width:60px;">
				<i class="icon icon-googleplus text-white"></i>
			</div>

			<div class="circle" style="width:60px;">
				<img src="<?=$app->url?>assets/image/dummies/kim.jpg" />
			</div>
		</div>
	</div>
		<h2>Raw output, various sizes</h2>
</div>
<?=$component?>