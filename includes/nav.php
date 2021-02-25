<?php
// array of navigation
$arrMenu = array(
    array('menu'=>'Home', 'link'=>'index.php'),
    array('menu'=>'Work', 'link'=>'portfolio.php'),
    array('menu'=>'About', 'link'=>'about.php'),
    array('menu'=>'Contact', 'link'=>'contact.php'),
);
// active
$homeActive = (isset($homeActive)) ? $homeActive : "";
$workActive = (isset($workActive)) ? $workActive : "";
$aboutActive = (isset($aboutActive)) ? $aboutActive : "";
$contactActive = (isset($contactActive)) ? $contactActive : "";
?>

<!--responsive menu-->
<div class="fixedtop">
    <div class="margins">
        <nav role="navigation">
            <a href="index.php" class="tinylogo"><img src="imgs/logomorado.svg" alt="Karla Mercado Portfolio Logo"></a>
            <div id="menuToggle">
                <input type="checkbox"/>
                <span></span>
                <span></span>
                <span></span>

                <ul id="menu">
                    <?php
                    //show regular menu
                    foreach ($arrMenu as $key => $nav) {
                    ?>
                    <a href="<?=$nav["link"]?>"><li><?=$nav["menu"]?></li></a>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav><!--end of nav-->
    </div>
</div>

<!--main menu-->
<div class="left">
    <div class="margins">
        <div class="nav">
            <!--optimized for seo, adding the logo h1 fist and the the nav-->
            <div class="logo">
                <a href="index.php"><h1>Karla Mercado web developer digital animator and artist</h1></a>
            </div><!-- .logo -->
            <div id="menuRegular">
                <a class="<?=$homeActive?>" href="index.php">Home</a>
                <a class="<?=$workActive?>" href="portfolio.php">Work</a>
                <a class="<?=$aboutActive?>" href="about.php">About</a>
                <a class="<?=$contactActive?>" href="contact.php">Contact</a>
            </div> 
        </div><!--.nav-->
    </div><!--.margins-->
</div><!--.left-->