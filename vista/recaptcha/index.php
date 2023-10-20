<?php
include_once __DIR__.'/../../includes/configuracion.php';
include_once(STRUCTURE_PATH.'head.php');
?>
<main class="p-5 text-center bg-light">
  <h1 class="mb-3">Programación Web Dinámica 2023 - Universidad del Comahue</h1>
  <h4 class="mb-3">Librerías Útiles: reCaptcha - Fast Excel Reader.</h4>
  <p>Se realiza investigación e implementación de las librerías reCaptcha de google y Fast Excel Reader de Avadim483.</p>
  <div class="row justify-content-md-center align-items-center gx-3 gy-3 p-5">
    <h2 class="mb-3">GRUPO 9.2 - Integrantes</h2>  
  </div>


  <h1>reCAPTCHA Library</h1>
  <p>The reCAPTCHA library is a free service provided by Google that helps protect websites from spam and abuse. It uses advanced risk analysis techniques to tell humans and bots apart.</p>
  <h2>How it works</h2>
  <p>When a user visits a website that uses reCAPTCHA, they are presented with a challenge that is easy for humans to solve but difficult for bots. This challenge can be in the form of a checkbox, image recognition, or audio challenge.</p>
  <p>Once the user completes the challenge, reCAPTCHA sends a token to the website's server, which can then be used to verify that the user is not a bot.</p>
  <h2>Getting started</h2>
  <p>To get started with reCAPTCHA, you will need to sign up for an API key from the <a href="https://www.google.com/recaptcha/admin/create">reCAPTCHA admin console</a>. Once you have your API key, you can add reCAPTCHA to your website by following the <a href="https://developers.google.com/recaptcha/docs/display">displaying reCAPTCHA documentation</a>.</p>


</main>
  
  <?php
    include STRUCTURE_PATH.'footer.php';
  ?>