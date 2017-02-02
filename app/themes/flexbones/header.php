<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php assets('imgs'); ?>/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/prism.css">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700,700i|Lato:300,300i,400,400i,700,700i|Space+Mono:400,400i,700,700i" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/plugins/unescaped-markup/prism-unescaped-markup.js"></script>

<?php wp_head(); ?>
</head>
<body <?php body_class("ff-sans"); ?>>