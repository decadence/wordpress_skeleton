<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>

    <title>
        <?= wp_title("", false) ?> / <?= get_bloginfo("name") ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link href="/favicon.ico" rel="shortcut icon"/>
    <link href="/favicon.ico" rel="icon" type="image/x-icon"/>

    <meta name="description" content="<?= get_bloginfo("description") ?> "/>

    <link href="<?= THEME_PATH ?>/css/reset.css" rel="stylesheet"/>
    <link href="<?= THEME_PATH ?>/css/style.css" rel="stylesheet"/>
    <link href="<?= THEME_PATH ?>/css/medias.css" rel="stylesheet"/>

    <script src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="<?= THEME_PATH ?>/js/ready.js"></script>

    <?
    wp_head();
    ?>

</head>


<body>

<?php
//wp_cache_close()
dump(remember("value", 10, function () {
    $class = new stdClass();
    sleep(3);
    $class->number = rand(0, 1000);
    return $class;
}));
?>


