<?php 
    include_once "functions.php";
    global $title, $description, $keywords;
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
        
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
        <link rel="stylesheet" href="//mobilepopup.alexeydudka.com/src/mobilepopup.min.css">
        <link rel="stylesheet" type="text/css" href="/inc/css/style.min.css">
    </head>
    <body>
    <?php include_once("analyticstracking.php") ?>
    <header class="section header-menu-section white-bkg">
        <div class="container header-menu">
            <a href="/" class="logo-image withhovering"><img src="/inc/images/myphoto.gif"></a>
            <a href="/" class="logo-text withhovering">Alexey Dudka</a>
            <nav>
                <a href="" class="toggle-menu-top">
                    <div class="toggle-menu-top-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <ul>
                    <li><a href="/mobilepopup">Mobilepopup</a></li>
                    <li><a href="https://github.com/alexeydudka">My Github</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="section">
        <div class="container">
            <div class="page-content">  
