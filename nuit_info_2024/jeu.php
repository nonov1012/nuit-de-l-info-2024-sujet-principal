<?php
include __DIR__ . '/inc/head.php';
?>
<style>
    /* STYLE GÉNÉRAL */
    body {
        font-family: 'Press Start 2P', cursive;
        background: #2F2F2F;
        color: #fff;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h1 {
        margin-top: 20px;
        color: #ff0;
        text-shadow: 0 0 10px #ff0, 0 0 20px #ff0;
        font-size: 2em;
    }

    .container2 {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        margin: 30px;
        gap: 50px;
    }

    .column {
        background-color: #222;
        border: 3px solid #0032ff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 20px #0032ff;
    }

    .column h2 {
        text-align: center;
        color: #ff0;
        text-shadow: 0 0 10px #ff0, 0 0 20px #ff0;
        font-size: 1.2em;
    }

    .column ul {
        list-style: none;
        padding: 0;
    }

    .column li {
        margin: 10px 0;
        padding: 15px;
        background-color: #000;
        color: #fff;
        border: 2px solid #ff0;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        transition: background-color 0.3s, color 0.3s;
    }

    .column li:hover {
        background-color: #ff0;
        color: #000;
    }

    .line-canvas {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .button-container {
        margin-top: 20px;
    }

    button {
        font-family: 'Press Start 2P', cursive;
        background: #0032ff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 0 10px #0032ff, 0 0 20px #0032ff;
        transition: background-color 0.3s, box-shadow 0.3s;
    }

    button:hover {
        background: #ffd700;
        box-shadow: 0 0 20px #ffd700, 0 0 40px #ffd700;
    }

    .result {
        margin-top: 20px;
        color: #ff0;
        font-size: 1.2em;
        text-shadow: 0 0 10px #ff0, 0 0 20px #ff0;
    }

    .header-wrap {
        display: block;
        width: auto;
        height: auto;
        padding: 0;
        text-align: center;
        font-size: 25px;
        font-family: "Press Start 2P", cursive;
        transform: perspective(200px) rotateX(10deg);
        letter-spacing: 0.1em;
        user-select: none;
        text-shadow: 0 -1px 0 #fff, 0 1px 0 #004d40, 0 2px 0 #00483B, 0 3px 0 #004639, 0 4px 0 #004336, 0 5px 0 #004134, 0 6px 0 #003F32, 0 7px 0 #003D30, 0 8px 0 #003A2D, 0 9px 0 #00382B, 0 10px 0 #003528, 0 11px 0 #003225, 0 12px 0 #002F22, 0 13px 0 #002B1E, 0 14px 0 #00281C, 0 15px 0 #001F13, 0 22px 30px rgba(0, 0, 0, 0.9), 0 22px 30px rgba(0, 0, 0, 0.9), 0 22px 15px rgba(0, 0, 0, 0.9), 0 11px 15px rgba(0, 0, 0, 0.9), 0 15px 20px rgba(0, 0, 0, 0.9), 0 15px 11px rgba(0, 0, 0, 0.9), 0 16px 11px rgba(0, 0, 0, 0.9);
        transition: text-shadow 0.3s ease 0.3s, transform 0.3s ease 0.3s, letter-spacing 0.3s ease 0.3s;
    }

    .header-wrap:hover {
        transition: text-shadow 0.33s ease, transform 0.3s ease, letter-spacing 0.3s ease;
        text-shadow: 0 0 0 #004134, 0 1px 0 #00483B, 0 2px 0 #003528, 0 3px 3px rgba(0, 0, 0, 0.9);
        transform: translate(0px, 15px) perspective(200px) rotateX(10deg);
        letter-spacing: 0.125em;
    }

    /* IMPORTATION DES FONTS */
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
    
</style>
<div class="wrapper">
    <div class="header-wrap">
        <h1>3D Retro Buttons</h1>
    </div>
</div>
<h1>Reliez les éléments</h1>
<div class="container2">
    <div class="column" id="human-column">
        <h2>Corps Humain</h2>
        <ul>
            <li data-id="heart" style="color: #ff0000;">Cœur</li>
            <li data-id="lungs" style="color: #00ffff;">Poumons</li>
            <li data-id="veins" style="color: #ff00ff;">Veines</li>
            <li data-id="nervous" style="color: #ff8000;">Système nerveux</li>
            <li data-id="stomach" style="color: #ffffff;">Estomac</li>
        </ul>
    </div>
    <div class="column" id="ocean-column">
        <h2>Océan</h2>
        <ul>
            <li data-id="currents" style="color: #ff0000;">Courants marins</li>
            <li data-id="photosynthesis" style="color: #00ffff;">Photosynthèse</li>
            <li data-id="circulation" style="color: #ff00ff;">Circulation thermohaline</li>
            <li data-id="coral" style="color: #ff8000;">Récifs coralliens</li>
            <li data-id="benthic" style="color: #ffffff;">Zone benthique</li>
        </ul>
    </div>
</div>
<canvas class="line-canvas" id="canvas"></canvas>
<div class="button-container">
    <button id="validate-button">Valider</button>
</div>
<div class="result" id="result"></div>
<script src="js/jeu.js"></script>