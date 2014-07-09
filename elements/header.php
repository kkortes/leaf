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
<?=$app->get('parts/top')?>
<div id="wrapper">