<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php assets('imgs'); ?>/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="../fissioncss/src/style.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/prism.css">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700,700i|Lato:300,300i,400,400i,700,700i|Space+Mono:400,400i,700,700i" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/plugins/unescaped-markup/prism-unescaped-markup.js"></script>

<?php wp_head(); ?>
</head>
<body <?php body_class("ff-sans"); ?>>

<header class="fl fl-row fl-wrap bg-brand-blue c-white">
    <h1 class="px1 fl-100 fl-20-m m0 fs2 c-white m0 py1 bg-lighten-1">Fission.css</h1>
    <nav class="fl fl-100 fl-80-m py1">
        <ul class="list list-inline m0 ml-auto-m ">
            <li><a class="px1 c-white td-none hov-in" href="#">Home</a></li>
            <li><a class="px1 c-white td-none hov-in" href="#">Docs</a></li>
            <li><a class="px1 c-white td-none hov-in" href="https://github.com/roikles/fission-css">Github</a></li>
        </ul>
    </nav>
</header>