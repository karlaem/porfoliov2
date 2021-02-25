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
                <div class="msg">
                    <?php
                    //check error messages
                    if (isset($_GET["error"])){                        
                    echo '<div class="error"><h2>Something went wrong. Try Again</h2</div>';
                    }
                    if (isset($_GET["success"])){                        
                    echo '<div class="success"><h2>Thank you your message was send</h2></div>';
                    }
                    ?>
                </div>
                <div class="homecontent">
                    <div class="hometext">
                        <section class="container hide">
                            <h1 class="name">
                            <span class="title">Hello, I am</span>
                            <span class="title">Karla Mercado</span>
                            </h1>
                        </section>
                        <h1 class="title2">Hello, I'm Karla Mercado</h1>
                        <h2 class="center">I’m a creative front-end developer looking to work at a small agency eager to bring projects to life through thoughtful design solutions.</h2>
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
        <div id="contact" class="page marginleft phonetop">
            <div  class="content">
                <div class="bgcontact">
                    <div class="contactform">
                        <h1>Let's work together</h1>
                        <h3>Send a message</h3>
                        <p>If you want to collaborate feel very welcome to contact me. I am available for freelance and full time employment.</p>

                        <div class="emailicon">
                        <svg id="Capa_19" data-name="Capa 19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.1 16.73"><defs><style>.cls-1{fill:none;stroke-miterlimit:10;}.cls-1,.cls-2{stroke:#000;}.cls-2{fill:#fff;stroke-linecap:round;stroke-linejoin:round;}</style></defs><rect class="cls-1" x="0.5" y="0.5" width="30.1" height="15.73" rx="3.12"/><polyline class="cls-2" points="1.46 1.45 15.72 7.86 29.64 1.45"/></svg>
                            <p>karlaest20@gmail.com</p>
                        </div>

                        <form id="contactform"  method="post" action="sendemail.php" enctype="multipart/form-data" name="EmailForm">
                            <div class="fieldgroup required">
                                <label for="fname">Your name</label>
                                <input type="text" id="name" name="name" placeholder="Your name..">
                                <div class="popup">   
                                    <div class="arrow-up"></div>             
                                    <p>Write your name</p>
                                </div>   
                            </div><!--.fieldgroup-->

                            <div class="fieldgroup required">
                                <label for="fname">Your email</label>
                                <input type="text" id="email" name="email" placeholder="name@email.com">
                                <div class="popup">         
                                    <div class="arrow-up"></div>          
                                    <p>Write your email</p>
                                </div>   
                            </div><!--.fieldgroup-->

                            <div class="fieldgroup">
                                <label for="subject">I want to...</label>
                                <select name="subject">
                                    <option value="knowMore">Know more information</option>
                                    <option value="resume">Ask for resume</option>
                                    <option value="hire">Hire me &#128516;</option>
                                    <option value="tips">Tips on coding, art or design</option>
                                    <option value="question">Questions</option>
                                    <option value="chat">Platicar</option>
                                </select>
                                <div class="popup">  
                                    <div class="arrow-up"></div>                
                                    <p>Write your name</p>
                                </div>   
                            </div><!--.fieldgroup-->

                            <div class="fieldgroup required">
                                <label for="msg">Message</label>
                                <textarea id="msg" name="msg" placeholder="Write something.."></textarea>
                                <div class="popup">   
                                    <div class="arrow-up"></div>               
                                    <p>Write your Message</p>
                                </div>  
                            </div><!--.fieldgroup-->

                            <input class="cta" type="submit" value="Send">
                        </form>
                        <img class="bighide" src="imgs/logowiggle.gif" alt="karla mercado logo animation">
                    </div>
                </div>
            </div><!--content-->
        </div><!--#contact-->
    </div>
<?php
// Navigation
$homeActive = "active";
include("includes/nav.php");
?>   

<script type="module" src="js/main.js"></script>
<script type="module" src="js/validate.js"></script>
</body>
</html>