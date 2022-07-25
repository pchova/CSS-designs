<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Polina Chetnikova">
        <meta name="description" 
              content="see: https://moz.com/learn/seo/meta-description">
        
        <title>Practice CSS with pchova</title>
        
<!--  CSS Links and Font Imports-->
        <link rel="stylesheet"
              href="css/stylesheet.css?version=<?php print time(); ?>"
              type="text/css">
        <link rel="stylesheet" media="(max-width:800px)"
              href="css/tablet.css?version=<?php print time(); ?>"
              type="text/css">
        <link rel="stylesheet" media="(max-width:600px)"
              href="css/phone.css?version=<?php print time(); ?>"
              type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
        
<!--Open Graph Meta Elements for Social Media 
(i.e. how your website looks and what it says when you send it as a link)-->
        <meta property="og:title" content="Polina Chetnikova's Website">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://localhost/Ps-Website/main.php">
        <meta property="og:description" content="A site of her ongoing projects, inspiration,
                                                and a place to practice coding.">
        <meta property="og:image" content="images/hatsune-me.jpg">
    </head>
    
<?php
print '<body>';
print PHP_EOL;

include 'header.php';
print PHP_EOL;



