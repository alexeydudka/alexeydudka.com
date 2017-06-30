<?php 
    include_once "functions.php";
    global $title, $description, $keywords, $abspath;
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
        <meta http-equiv="Cache-Control" content="public, max-age=86400"/>
        <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="<?php echo $description; ?>" >
        <meta name="keywords" content="<?php echo $keywords; ?>" >
        <meta property="og:title" content="<?php echo $title; ?>"/>
        <meta property="og:description" content="<?php echo $description; ?>"/>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
        <link rel="stylesheet" href="<?php echo $abspath; ?>inc/plugins/mobilepopup/mobilepopup.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $abspath; ?>inc/css/style.min.css">
    </head>
    <body>
    <header class="section header-menu-section white-bkg">
        <div class="container header-menu">
            <a href="<?php echo $abspath; ?>" class="logo-image withhovering"><img src="<?php echo $abspath; ?>inc/images/myphoto.gif"></a>
            <a href="<?php echo $abspath; ?>" class="logo-text withhovering">Alexey Dudka</a>
            <nav>
                <ul>
                    <li><a href="<?php echo $abspath; ?>/mobilepopup">Mobilepopup</a></li>
                    <li><a href="https://github.com/alexeydudka">My Github</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="section">
        <div class="container">
            <div class="page-content">  
