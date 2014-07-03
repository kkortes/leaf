<!DOCTYPE html>
<html lang="en">
<head>
  <title>Leaf - CSS Framework</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?=$app->url?>favicon.ico?v=3" />

  <link rel="stylesheet" type="text/css" href="<?=$app->url?>leaf/fonts/icomoon/style.css" />
  <link rel="stylesheet" type="text/css" href="<?=$app->url?>leaf/css/base.css" />  

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500,500italic,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css' />
</head>
<body class="page-<?=(isset($_GET['page']) ? $_GET['page'] : 'index')?>">
<?=$app->get('parts/top')?>
<div id="wrapper" class="<?=(isset($_GET['page']) && $_GET['page'] != 'colors' && $_GET['page'] != 'icons' ? 'fill-grey fill-minus-5' : '')?>">