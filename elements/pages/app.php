<div class="fullwidth">
	<div class="container">
	  <div class="crow">
	    <div class="ws-12">
				<h2>Explanation of <i>App.php</i></h2>
				<p>App.php is a system file that is located in the project root folder.</p>
				<p>When developing a web it's important to have good server variables to use for links and includes, this is what App.php does for you.</p>
				<p>Don't you think it would be nice to be able to use:
				<code><?=htmlspecialchars('<script src="<?=$app->url?>assets/script.js"></script>');?></code>
				everywhere and not worry if your url structure is "localhost/myweb", "myweb" or "myweb.com"?
				</p>
				<p>App.php can be included standalone, as it is. Though if you do it that way, it's important that the file is placed in your project root folder. If not, its parameters won't be accurate.
				</p>
				<p>To enable App.php simply include it at the top of your first file that executes upon visit:
				</p>
				<p><code>include_once "App.php";</code></p>
				<p>then start App.php
				</p>
				<p><code>$app = new App();</code></p>
				<p>$app now consists of (for this project):</p>
				<p><code>var_dump($app);</code></p>
				<?
				$app->pointer = '';
				var_dump($app);
				$app->pointer = 'elements/';
				?>

				<hr />

				<h2>Working with config.json.php</h2>
				<p>When including App.php it will use default parameters as seen above. You can override those by creating a config.json.php file. With App.php comes a dummy file for this, containing the basic structure for your overrides. See SAMPLE.config.json.php</p>
				<p>
					<?
					var_dump(file_get_contents($app->server_root.'SAMPLE.config.json.php'));
					?>
				</p>
				<p>App.php will notice if you are in LIVE or LOCALHOST production environment and use the corresponding values to that.</p>
				<p>If you decide to use a config.json.php file for you project, note that the config.json.php have to be positioned in your project root to get the server variables accurate.</p>
				<p>For your App.php to detect where config.json.php is located, simple pass a string containing the path of where it is located like so:</p>
				<p><code>$app = new App(array(), __DIR__.'/../');</code></p>
				<p>$app will now contain the basic server variables, but also those that you choose to include, like in the example, mysql credentials.</p>

				<hr />

				<h2>Including files/classes to your project</h2>
				<p>$app is loaded with two functions that you'll have to keep in mind:</p>
				<p><code>$app->get();</code></p>
				<p>and</p>
				<p><code>$app->includer();</code></p>

				<h3>Working with $app->get();</h3>
				<p>If you want to render any php element in your project, simply point to it using this function (after declaring $app object):</p>
				<p><code>echo $app->get('pages/myphppage');</code></p>
				<p class="small">Notice! Don't use .php-endings in the call, ->get does that for you.</p>
				<p>If you are unsatisfied with $app->get() including elements from root, you can simply specify a pointer from where to prioritize reading like so:</p>
				<p><code>$app->pointer = 'public/';</code></p>
				<p>$app->get('pages/myphppage') will then include 'public/pages/myphppage.php' from your project root.</p>
				<p>$app->get works with its own scope, so it's not like a regular php include call. If you want to pass any variable, arrays or other datas into the element you are rendering, simply pass them into the function like so:</p>
				<p><code>$app->get('pages/myphppage', array('variable' => $value, 'anothervariable' => 'staticvalue'));</code></p>
				<p>This keeps your files clean from programming logics and only the variables passed in can be used.</p>
				<p>Important to keep in mind is that your global $app object will be avaible in all your elements rendered by $app->get().</p>

				<h3>Working with $app->includer();</h3>
				<p>$app->includer(array()) scans the targeted directories for files/directories matching the inputs and includes those. This is very inconvenient instead of using phps "include" and/or "include_once" several times at the top of every page.</p>
				<p>Simply do:</p>
				<p><code>$app->includer(array('classes', 'misc/phptimefunctions', 'functions'));</code></p>
				<p>to include files.</p>
				<p>The code above will go through and do (in order):</p>
				<ul>
					<li>A search for classes.php</li>
					<li>If not found, a search for *.php in classes directory</li>
					<li>If any of the above statements are fulfilled, include the files found</li>
					<li>Search for phptimefunctions.php in misc directory</li>
					<li>If not found, a search for *.php in misc/phptimefunctions directory</li>
					<li>If any of the above statements are fulfilled, include the files found</li>
					<li>Search for functions.php</li>
					<li>If not found, a search for *.php in functions directory</li>
					<li>If any of the above statements are fulfilled, include the files found</li>
				</ul>

				<p>$app->includer() should be used right after declaring your $app object:</p>
				<p><code>$app = new App(); <br />$app->includer(array('includes', 'specificdir/include'));</code></p>

				<p>Like $app->get(), $app->includer() also forwards your $app object into all files included. That way you can use any system variables set in you config.json.php in your included files.</p>

				<hr />

				<h3>Lastly</h3>
				<p>App.php is totally optional. You can remove the file and SAMPLE.config.json.php if so desired. They are not hooked onto any other file, so don't worry about crashes based on dependencies.</p>
				<p>You can have several App.php setups in your project. Lets say you have two apps in your main app, and wants curresponding server variables to each app. Just make sure a copy of config.json.php is located in each and every app root.</p>
				<p>When including files to your project, use $app->root. If you want to include something from your web root (not nessecarly the same as project root) use $app->server_root. When linking to pages or anything else, the same goes for $app->url and $app->server_url.</p>

				<p>Now code happy! App.php ignores if you use "localhost/myproject", "myproject" or "myproject.com" as your developing url, it will give you the right system variables no matter what. This is very convenient when you are hosting your web live.</p>
			</div>
		</div>
	</div>
</div>