    </div>
    <!-- Place this tag after the last +1 button tag. -->
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/platform.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
    <?=$app->get('parts/bot')?>

    <script src="<?=$app->url?>bower_components/jquery/dist/jquery.min.js"></script>
    <script>window.app_url = '<?=$app->url?>'</script>
    <script>window.app_server_url = '<?=$app->server_url?>'</script>
    <script src="<?=$app->url?>leaf/js/script.js"></script>
  </body>
</html>