<?
if(!defined("ABSPATH")){
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />


<base href="<?=THEME_PATH?>" />

<title>
	<?=wp_title("", false)?> / <?=get_bloginfo("name")?>
</title>

<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link href="/favicon.ico" rel="shortcut icon"  />
<link href="/favicon.ico" rel="icon" type="image/x-icon" />

<meta name="description" content="<?=get_bloginfo("description")?>" />

<link href="prod/production.css" rel="stylesheet" />
<script type="text/javascript" src="prod/production.js"></script>

<?
	wp_head();
?>

</head>


<body>

<!--[if lt IE 8]>
	<p class="browserupgrade">
		You are using an <strong>outdated</strong> browser.
		Please
		<a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience
	</p>
<![endif]-->

Хидер



