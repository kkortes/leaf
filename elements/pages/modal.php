<div class="modal">
	<div class="modal-inner crow no-gutter">
		<div class="container">
			<div class="crow fill-white card no-gutter">
				<div class="ws-12">
					<div class="fill-teal tile" style="padding:10px 35px;">
						<?=$app->get('parts/nav')?>
					</div>
					<div class="spacer quarter"></div>
					<?=$app->get('component/modal', array('dontinclude' => true))?>
					<div class="spacer half"></div>
				</div>
			</div>
		</div>
	</div>
</div>