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
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<header class="header">
    <div class="title">
        <h11>Beausulzle.nl</h11>
    </div>
    <nav>
        <ul>
            <li><a href="#home">Beau Sulzle</a></li>
            <li><a href="#ervaring">About me</a></li>
            <li><a href="#about">Programs</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <button class="toggle-btn toggle-btn-light" onclick="toggleMode()"></button>
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
    <img class="ik" id="responsiveImage" src="img/b2.png" alt="Your Image">
</div>




<div id="ervaring" class="container2">

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
    <div class="text-container2">
        <h4>Welcome to My Website</h4>
        <img class="iik" id="responsiveImage" src="img/hireme.png" alt="Your Image">

        <div class="buttons">
        <a href="path/to/your/cv.pdf" download="Beau_Sulzle_CV.pdf">
            <button class="download-btn1">Resume</button>
        </a>
        <a href="path/to/your/cv.pdf" download="Beau_Sulzle_CV.pdf">
            <button class="download-btn2">Hire me</button>
        </a>
        </div>

    </div>

    <div class="content-container">
        <div class="images-container">
            <a href="https://www.linkedin.com/in/beau-sulzle-3106b3268/" target="_blank">
                <img src="img/LinkedIn_logo_initials.png" alt="LinkedIn">
            </a>
            <a href="https://github.com/Delerious28" target="_blank">
                <img src="img/github.png" alt="GitHub">
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=beausulzle@gmail.com" target="_blank">
                <img src="img/gmail.png" alt="Your Website">
            </a>
            <a onclick="loadDiscordChat()">
                <img src="img/discord.png" alt="Discord">
            </a>
        </div>
    </div>
</div>

<div id="navigation">
    <a href="#home">Home</a>
    <a href="#ervaring">About me</a>
    <a href="#about">Programs</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
</div>

</body>
<script src="script.js"></script>
<script src="button.js"></script>
<script src="image.js"></script>
<script>
    function toggleMode() {
        document.body.classList.toggle('dark-mode');
    }
</script>
<script>
    function toggleMode() {
        const body = document.body;
        const toggleBtn = document.querySelector('.toggle-btn');

        body.classList.toggle('dark-mode');
        toggleBtn.classList.toggle('toggle-btn-dark');
        toggleBtn.classList.toggle('toggle-btn-light');
    }
</script>
<script>
    function loadDiscordChat() {
        var script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/@widgetbot/crate@3';
        script.async = true;
        script.defer = true;
        document.head.appendChild(script);

        script.onload = function () {
            new Crate({
                server: '1005842678451282031', // Delerious28's server
                channel: '1188142193093910739' // #general
            });

            // Move the Discord button to a different location in the DOM
            var discordButton = document.querySelector('.w-crate-toggle');
            var newLocation = document.getElementById('newLocation');

            if (newLocation && discordButton) {
                newLocation.appendChild(discordButton);
            }
        };

        return false;
    }
</script
</html>
