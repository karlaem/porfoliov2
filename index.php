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
        <div id="contact" class="page marginleft phonetop">
            <div  class="content">
                <div class="bgcontact">
                    <div class="contactform">
                        <h1>Let's work together</h1>
                        <h3>Send a message</h3>
                        <p>If you want to collaborate feel very welcome to contact me. I am available for freelance and full time employment.</p>

                        <div class="emailicon">
                            <img src="imgs/email.svg" alt="message">
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
</body>
</html>