<!DOCTYPE html>
<html lang="en">
<head>
  <title>Leaf 0.1 ALPHA - CSS Framework</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?=$app->url?>favicon.ico?v=4" />

  <link rel="stylesheet" type="text/css" href="<?=$app->url?>leaf/fonts/icomoon/style.css" />
  <link rel="stylesheet" type="text/css" href="<?=$app->url?>leaf/css/base.css" />
  <link rel="stylesheet" type="text/css" href="<?=$app->url?>assets/css/style.css" />  

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500,500italic,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css' />
</head>
<body class="page-<?=(isset($_GET['page']) ? $_GET['page'] : 'index')?>">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52663932-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=522665991192560&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?=$app->get('parts/top')?>
<div id="wrapper">
	<div class="drop left top base-padding sharer">
		<div class="fb-like" data-href="http://leaf.kortes.se" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

		<div class="drop down-left base-padding" style="padding-top:25px;">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://leaf.kortes.se" data-text="Check out Leaf CSS Framework!" data-via="kortekim" data-hashtags="materialdesign, leaf">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

			<div class="drop down-left " style="padding-left:10px;">
				<!-- Place this tag where you want the +1 button to render. -->
				<div class="g-plusone" data-size="medium" data-href="http://leaf.kortes.se"></div>

        <div class="drop down-left base-padding" style="padding-bottom:5px;">
          <strong>Support project</strong>
          <div class="spacer quarter"></div>
          <div class="image card">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="line-height:0;">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="THW6HTLHVAH2S">
            <input type="image" src="http://s2.postimg.org/l1fuv5dmd/support.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            </form>
          </div>

          <div class="drop down-left" style="padding-left:10px;">
            <a href="https://gittip.com/kortekim" target="_blank" class="card image">
              <img src="http://s30.postimg.org/rz9fb6rz1/Screen_Shot_2014_07_09_at_20_58_41.png" />
            </a>

            <div class="drop down-left" style="padding-left:10px;padding-top:5px;">
              <div class="relative">
                <div class="image card fill-white" style="padding:3px;">
                  <img src="http://s11.postimg.org/8yxr24w0v/bitcoin.png" />
                </div>
                <div class="drop bottom-left fill-white card" style="width:310px;padding:5px;">
                  1PiRdutMwncxkjp8quxQiF1qFUBGBjwhfg
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</div>
	</div>