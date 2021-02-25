<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // links
    include("includes/header.php");
    ?>
    
    <title>Karla Mercado Web Developer and Front End Designer Portfolio Home</title>
</head>
<body>
<div id="myWebApp" class="marginleft phonetop">
        <div id="home" class="page">
            <div  class="content">
                <div class="homecontent">
                    <div class="hometext">
                        <section class="container hide">
                            <h1 class="name">
                            <span class="title">Hello, I am</span>
                            <span class="title">Karla Mercado</span>
                            </h1>
                        </section>
                        <h1 class="title2">Hello, I'm Karla Mercado</h1>
                        <h2 class="center">I’m a creative front end developer looking to work at a small agency eager to bring projects to life through thoughtful design solutions.</h2>
                        <button href="#" data-nav="work" class="cta">See my work</button>
                        <img class="bighide" src="imgs/compuwire.gif" alt="computer image">
                    </div>
                </div>
            </div>
        </div>
        <div id="work" class="page">
            <div class="content">
                <h1>Work</h1>
                <p>holaaa</p>
                <a href="project.php"> project 1</a>
        </div>

            </div>
        </div>
        <div id="about" class="page marginleft">
            <div  class="content">
                <h1>About</h1>

            </div>
        </div>
        <div id="contact" class="page marginleft">
            <div  class="content">
                <h1>Contact</h1>
            
            </div>
        </div>
    </div>
<?php
// Navigation
$homeActive = "active";
include("includes/nav.php");
?>   

<script type="module" src="js/main.js"></script>
</body>
</html>