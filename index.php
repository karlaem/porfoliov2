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
<div id="myWebApp" class="marginleft">
        <div id="home" class="page">
            <div  class="content">
                <h1>Home</h1>

            </div>
        </div>
        <div id="work" class="page">
            <div class="content">
                <h1>Work</h1>

            </div>
        </div>
        <div id="about" class="page">
            <div  class="content">
                <h1>About</h1>

            </div>
        </div>
        <div id="contact" class="page">
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