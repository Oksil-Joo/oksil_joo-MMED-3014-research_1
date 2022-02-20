
<?php

use Attrations;

spl_autoload_register(function ($class) {
    $replaced = str_replace("\\", "/", $class);
    require_once '../includes/classes/' . $replaced . '.php';
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canada Tour</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>
    <div class="container">
    <header>
        <h1 class="hidden">title</h1>
        <div class="top">
            <h2 class="title">CANADA TOUR</h2>
        </div>
    </header>
    <div class="boxCon">
        <main>
            <h1 class="hidden">contents</h1>
            <!-- <h2 class="subTitle">TOUR ATTRACTIONS</h2> -->
            <img src="images/ontario.jpg" alt="ontario">
            <h3 class="subject">CANADA TOUR RECOMMENDATION</h3>
            <p>Recommendation period</p>
            <article>In summer, dry and clear weather continues with temperatures around 25-28 degrees Celsius. Summer is considered the best time to travel. Victoria is located in a high latitude, but unlike other Canada regions, it does not fall much below zero in winter due to the mild oceanic climate representing the western coast of North America. Even on cold days, most of them stay between minus 1 and 3 degrees Celsius, and it rains continuously because winter is rainy.</article>
            <a href=""></a>
            <h3 class="subject">AURORA</h3>
            <p>Recommendation period</p>
            <article>In summer, dry and clear weather continues with temperatures around 25-28 degrees Celsius. Summer is considered the best time to travel. Victoria is located in a high latitude, but unlike other Canada regions, it does not fall much below zero in winter due to the mild oceanic climate representing the western coast of North America. Even on cold days, most of them stay between minus 1 and 3 degrees Celsius, and it rains continuously because winter is rainy.</article>
            <h3 class="subject">WEATHER</h3>
            <p>Recommendation period</p>
            <article>In summer, dry and clear weather continues with temperatures around 25-28 degrees Celsius. Summer is considered the best time to travel. Victoria is located in a high latitude, but unlike other Canada regions, it does not fall much below zero in winter due to the mild oceanic climate representing the western coast of North America. Even on cold days, most of them stay between minus 1 and 3 degrees Celsius, and it rains continuously because winter is rainy.</article>
        </main>
        <footer class="deco">
            <p>Created By Oksil Joo</p>
        </footer>
    </div>
    </div>
</body>
</html>