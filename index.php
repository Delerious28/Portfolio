<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <title>Beau Sulzle</title>
</head>

<body>

<header class="header">
    <div class="title">
    <h11>Beausulzle.nl</h11>
    </div>
    <nav>
        <ul>
            <li><a href="#home">Beau Sulzle</a></li>
            <li><a href="#ervaring">Ervaring</a></li>
            <li><a href="#about">Programs</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<div id="home" class="container1">
    <div class="text-container">
        <h1>Welcome to My Website</h1>
        <p>This is the center text content.</p>
    </div>
    <div class="text-container bottom-container">
        <h1>Second Text Container</h1>
        <p>This is the bottom text content.</p>
    </div>
    <img class="ik" src="img/b2.png" alt="Your Image">
</div>




<div id="ervaring" class="container2">
    <h2>Ervaring</h2>
    <div class="content-container">
        <div class="images-container">
            <img src="img/r1.png" alt="Image 1">
            <img src="img/r2.png" alt="Image 2">
            <img src="img/r.jpeg" alt="Image 3">
            <img src="img/a3.png" alt="Image 4">
        </div>

        <div class="text-box">
            <h2>Your Title</h2>
            <p>Your text content goes here.</p>
        </div>
    </div>

    <div class="button-container">
        <a href="ervaring.php" class="bn53">More info</a>
    </div>
</div>



<div id="about" class="container3">
    <h3>Programs</h3>
    <div class="content-container">
        <div class="program-buttons">
            <a href="javascript:void(0)" class="bn39" onclick="showTextBox('Phpstorm')"><span class="bn39span">Phpstorm</span></a>
            <a href="javascript:void(0)" class="bn39" onclick="showTextBox('Visualcode')"><span class="bn39span">Visualcode</span></a>
            <a href="javascript:void(0)" class="bn39" onclick="showTextBox('Eclipse')"><span class="bn39span">Eclipse</span></a>
            <a href="javascript:void(0)" class="bn39" onclick="showTextBox('Pycharm')"><span class="bn39span">Pycharm</span></a>
        </div>
        <div class="text-box-container">
            <div id="Phpstorm-box" class="text-box program-text-box">
                <p>Information about Phpstorm goes here.</p>
            </div>
            <div id="Visualcode-box" class="text-box program-text-box">
                <p>Information about Visualcode goes here.</p>
            </div>
            <div id="Eclipse-box" class="text-box program-text-box">
                <p>Information about Eclipse goes here.</p>
            </div>
            <div id="Pycharm-box" class="text-box program-text-box">
                <p>Information about Pycharm goes here.</p>
            </div>
        </div>
    </div>
</div>






<div id="services" class="container4">
    <h2>Services</h2>
    <div class="content-container">
        <p>Your services section content goes here.</p>
    </div>
</div>

<div id="contact" class="container5">
    <h2>Contact</h2>
    <div class="content-container">
        <p>Your contact section content goes here.</p>
    </div>
</div>

<div id="navigation">
    <a href="#home">Home</a>
    <a href="#ervaring">Ervaring</a>
    <a href="#about">Programs</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
</div>

</body>
<script src="script.js"></script>
<script src="button.js"></script>

</html>
