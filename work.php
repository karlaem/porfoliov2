<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // links
    include("includes/header.php");
    ?>
    <title>Karla Mercado Web Developer and Front End Designer Portfolio Work</title>
</head>
<body>  
    <div id="work" class="page marginleft phonetop">
        <h1>My work</h1>
        <div class="content">
            <div class="nav">
                <a href="#" data-nav="work">Web Development</a>
                <a href="#" data-nav="art">Art</a>
            </div>
            <div class="workcontent">
                <h1>Web Development & Brand Design</h1>
                <div class="cards">
                    <a href="patches.php">
                        <div class='card'>
                            <img src="imgs/camino.jpg" alt="Patches ecommerce design and development">
                            <h3>Patches ecommerce design and development</h3>
                        </div>
                    </a><!--.patches-->
                    <a href="scoop.php">
                        <div class='card'>
                            <img src="imgs/scoopg.jpg" alt="Ice cream company branding">
                            <h3>Ice cream company branding, logo, social media & stickers design</h3>
                        </div>
                    </a><!--.scoop-->
                    <a href="secret.php">
                        <div class='card'>
                            <img src="imgs/secretg.jpg" alt="Secret menu website and responsive app">
                            <h3>Secret menu website and responsive app development</h3>
                        </div>
                    </a><!--.secret-->
                    <a href="dress.php">
                        <div class='card'>
                            <img src="imgs/dress.jpg" alt="The dress ecomerce landing page design and branding">
                            <h3>The dress ecomerce landing page design and branding</h3>
                        </div>
                    </a><!--.dress-->
                    <a href="diverse.php">
                        <div class='card'>
                            <img src="imgs/diverse.jpg" alt="Diverse dialogue, a blog site and portfolio for a broadcaster">
                            <h3>Diverse dialogue, a blog site and portfolio for a broadcaster.</h3>
                        </div>
                    </a><!--.diverse-->
                    <a href="lila.php">
                        <div class='card'>
                            <img src="imgs/lilag.jpg" alt="DJ Lila a music portfolio design and development">
                            <h3>DJ Lila a music portfolio design and development</h3>
                        </div>
                    </a><!--.lila-->
                </div>
            </div><!--.workcontent-->
        </div>
    </div><!--.work-->

    <div id="art" class="page marginleft phonetop">
        <h1>My work</h1>
        <div class="content">
            <div class="nav">
                <a href="#" data-nav="work">Web Development</a>
                <a href="#" data-nav="art">Art</a>
            </div>
            <div class="artcontent">
                <h1>Art</h1>
            </div>
        </div>
    </div><!--.art-->
<?php
// Navigation
$workActive = "active";
include("includes/nav.php");
?>   
 <script type="module" src="js/main.js"></script>
</body>
</html>