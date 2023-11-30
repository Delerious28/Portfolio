<?php
include('include/conn.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="image/logo.png">
    <title>Beau Sulzle</title>
</head>

<body>

<header class="header">
    <h1>Beausulzle.nl</h1>
    <nav>
        <ul>
            <li><a href="#home">Beau Sulzle</a></li>
            <li><a href="#introduce">Ervaring</a></li>
            <li><a href="#about">Programs</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="container1">
    <section id="home" class="section1">
        <h2> Beau Sulzle </h2>
        <div class="content-container">
            <p class="image-text2">Sup</p>
            <div class="xtxt"><p class="xtext"> Beausulzle.nl</p>
            </div>
            <img class="ik" src="image/[removal.ai]_04478772-fe14-4382-aac3-158e81ff2b42-whatsapp-image-2023-11-25-at-23-15-19_45ee120a_D67OVU.png" alt="geen img">
        </div>
    </section>
</div>

<div class="container">
    <section id="introduce" class="section2">
        <h2> Experience </h2>
        <div class="image-container">
            <div class="image-frame">
                <p class="image-text3">Sup2</p>
                <img src="image/PicsArt_11-26-12.44.51.png" alt="Home Image 1">
            </div>
        </div>
    </section>
</div>


<div class="container">
    <section id="about" class="section3">
        <h5> Operating systems and Programs</h5>
        <div class="content-container">
            <button class="hobby-button" onclick="showContent('button1')">
                <img src="image/r1.png" alt="Hobby 1" class="button-image">
            </button>
            <button class="hobby-button" onclick="showContent('button2')">
                <img src="image/r2.png" alt="Hobby 2" class="button-image">
            </button>
            <button class="hobby-button" onclick="showContent('button3')">
                <img src="image/a3.png" alt="Hobby 3" class="button-image">
            </button>
            <button class="hobby-button" onclick="showContent('button4')">
                <img src="image/g5.png" alt="Hobby 4" class="button-image">
            </button>
            <button class="hobby-button" onclick="showContent('button5')">
                <img src="image/g1.jpg" alt="Hobby 5" class="button-image">
            </button>
            <div id="button-content" class="button-content">
            </div>
            <button class="hobby-button" onclick="showContent('button6')">
                <img src="image/o1.png" alt="Hobby 1" class="button-image">
            </button>
            <button class="hobby-button" onclick="showContent('button7')">
                <img src="image/o2.png" alt="Hobby 2" class="button-image">
            </button>
            <button class="hobby-button" onclick="showContent('button8')">
                <img src="image/o3.png" alt="Hobby 3" class="button-image">
            </button>
            <button class="hobby-button" onclick="showContent('button9')">
                <img src="image/o4.png" alt="Hobby 4" class="button-image">
            </button>
            <button class="hobby-button" onclick="showContent('button10')">
                <img src="image/o5.png" alt="Hobby 5" class="button-image">
            </button>
            <div id="button-content" class="button-content">
            </div>

        </div>
    </section>
</div>


<div class="container">
    <section id="services" class="section">
        <h2>Services</h2>

        <div class="service">
            <div class="service-content">
                <div class="h3text">
                    <h3>Web Development</h3>
                </div>
                <p>
                    I specialize in crafting dynamic and responsive websites using a variety of technologies,
                    including HTML, CSS, JavaScript, PHP, and SQL. From creating visually appealing user interfaces
                    to implementing robust backend functionality, I can bring your web ideas to life.
                </p>
            </div>
            <img src="image/hy.png" alt="error">
            <a href="youtube.com" class="bn13">Go to Test.php</a>
        </div>

        <div class="service">
            <div class="service-content">
                <div class="h3text">
                    <h3>Computer Building</h3>
                </div>
                <p>
                    Whether you're looking to assemble a high-performance gaming rig or a reliable workstation,
                    I offer computer building services tailored to your needs. From selecting the right components
                    to ensuring optimal performance, let me build the perfect system for you.
                </p>
            </div>
            <img src="image/r.jpeg" alt="error">
            <a href="youtube.com" class="bn13">Go to Test.php</a>
        </div>

        <div class="service">
            <div class="service-content">
                <div class="h3text">
                    <h3>Computer Repair</h3>
                </div>
                <p>
                    Dealing with computer issues? I provide expert troubleshooting and repair services.
                    From diagnosing hardware problems to resolving software issues, I can get your computer
                    back to peak performance.
                </p>
            </div>
            <img src="image/we.png" alt="error">
            <a href="youtube.com" class="bn13">Go to Test.php</a>
        </div>
    </section>
</div>


<div id="myModal" class="modal">
    <div class="modal-content">
        <span id="closeBtn" class="close">&times;</span>
        <p id="modal-message"></p>
    </div>
</div>
<div class="container">
    <section id="contact" class="section">
        <div class="image-container">
        </div>
        <h2>Contact Section</h2>

        <form id="contact-form" action="process_form.php" method="post">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button class="submit" type="submit" data-emoji="">
                <span id="emoji-text">Submit</span>
            </button>
        </form>
    </section>
</div>


<div id="fixedMenu" class="fixed-menu">
    <nav>
        <ul>
            <li><a href="#home" onclick="smoothScroll('#home')">Beau Sulzle</a></li>
            <li><a href="#introduce" onclick="smoothScroll('#introduce')">Experience</a></li>
            <li><a href="#about" onclick="smoothScroll('#about')">Programs</a></li>
            <li><a href="#services" onclick="smoothScroll('#services')">Services</a></li>
            <li><a href="#contact" onclick="smoothScroll('#contact')">Contact</a></li>
        </ul>
    </nav>
</div>
<script src="script/button.js"></script>
<script src="script/confirm.js"></script>
<script src="script/but.js"></script>
<script src="script/scroll.js"></script>
</body>

</html>
