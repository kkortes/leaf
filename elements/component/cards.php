<?
include "base.php";
?>
<div class="container">
	<div class="crow up">
		<div class="ws-8">
			<h1>
			Cards
				<div class="inline-block relative">
					<i class="icon icon-link"></i>
					<div class="drop down-left" style="width:500px;">
						<div class="tile base-padding fill-blue-grey text-white">
							<a href="http://www.google.com/design/spec/components/cards.html" class="text-white">http://www.google.com/design/spec/components/cards.html</a>
						</div>
					</div>
				</div>
				<div class="inline-block relative">
					<i class="icon icon-text"></i>
					<div class="drop down-left" style="width:500px;">
						<div class="tile base-padding fill-blue-grey text-white text-plus-2">
							“A card is a piece of paper that contains a unique data set of related, heterogeneous information, for example, a photo, text, and link all about a single subject. Cards typically are an entry point to more complex and detailed information. Cards have a constant width and variable height. The maximum height is limited to what can fit within a single view on a platform, but it can temporarily expand as needed (for example, to display a comment field). Cards do not flip to reveal information on their back.”
						</div>
					</div>
				</div>
			</h1>

			<h2>Usage</h2>
			.card

			<h2>Consider using</h2>
			.fill-{color}<br />
			.base-padding & .strong-padding<br />
			<a href="/grid" class="text-blue-grey">.crow</a> inside a .card
		</div>
		<div class="ws-4">
			<div class="spacer half"></div>
			<div class="label">Example:</div>
			<div class="card">
				<div class="image">
					<img src="<?=$app->url?>assets/image/dummies/ex1.png" style="width:100%;" />
				</div>
				<div class="strong-padding">
					Located two hours south of Sydney in the Southern Highlands of South Wales, ...
					<br /><br />
					<a href="#" class="button text text-grey text-plus-2">Share</a>
					<a href="#" class="button text text-orange">Learn more</a>
				</div>
			</div>
		</div>
	</div>
		<h2>Raw output, various sizes</h2>
</div>
<?=$component?>