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
                        <span class="title">Hello, I am </span>
                        <span class="title">Karla Mercado</span>
                        </h1>
                    </section>
                    <h1 class="title2">Hello, I'm Karla Mercado</h1>
                    <h2 class="center3">I’m a creative front-end developer looking to work at an agency and eager to bring projects to life through thoughtful design solutions.</h2>
                    <button href="#" data-nav="work" class="cta">See my work</button>
                    <img class="bighide" src="imgs/compuwire.gif" alt="computer image">
                </div><!--.hometext-->
            </div><!--.homecontent-->
        </div>
    </div><!--.home-->    
    <div id="work" class="page">
        <div class="content">
            <div class="workcontent">
                <h1>My work</h1>
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
</div>
<div id="about" class="page marginleft">
    <div  class="content">
        <div class="aboutcontent">
            <div class="about">
                <h1>About me</h1>
                <div class="longtext">
                    <p>I am a front-end developer from Mexico now living in Vancouver, I want to help people make their ideas come true and to be a part of a creative team of people. I love learning about art and technology. You can contact me if you also share a passion for creation.</p>
                </div><!--.longtext-->
                <div class="resume">
                    <svg id="Capa_20" data-name="Capa 20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.88 30.65"><rect class="cls-1" x="0.5" y="0.5" width="20.88" height="29.65" rx="2.38"/><polyline class="cls-2" points="15.65 0.5 15.65 6.27 21.39 6.27"/></svg>
                    <a class="download" href="documents/karlaMercadoResume2021.pdf" target="_blank">resume.pdf</a>
                </div>
                <div class="skills">
                    <h2 class="center2" >What I do best</h2>
                    <div class="skillcontainer">
                        <div class="col">
                            <h3>Strategy & Branding</h3>
                            <ul>
                                <li>Research & Discovery</li>
                                <li>Brand Identity</li>
                                <li>Brand Guideline</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Digital Design</h3>
                            <ul>
                                <li>Web Design</li>
                                <li>UI - UX Design</li>
                                <li>E-commerce</li>
                                <li>Packaging</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Coding</h3>
                            <ul>
                                <li>Front-end</li>
                                <li>Back-end</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Art & Animation</h3>
                            <ul>
                                <li>3D Modeling</li>
                                <li>Motion Graphics</li>
                                <li>Illustration</li>
                                <li>Film Edition & Visual Effects</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="process">
                    <div class="limage">
                        <img src="imgs/logowiggle.gif" alt="my logo">
                    </div>
                    <div class="rimage">
                        <h2>My process</h2>
                        <ol>
                            <li>Having a video call or a coffee and chat to understand how can I help you for your project.</li>
                            <li>We will analyse the problem together and shape the project.</li>
                            <li>Create a product that will make us proud.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--.aboutcontent-->
    </div><!--.content-->
</div><!--.about-->
<div id="contact" class="page marginleft phonetop">
    <div  class="content">
        <div class="bgcontact">
            <div class="contactform">
                <h1>Let's work together</h1>
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

<?php
// Navigation
$homeActive = "active";
include("includes/nav.php");
?>   
<script type="module" src="js/main.js"></script>
<script type="module" src="js/validate.js"></script>
</body>
</html>