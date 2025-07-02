<?php
$counterFile = 'counter.txt';
if (!file_exists($counterFile)) file_put_contents($counterFile, 0);

$count = (int)file_get_contents($counterFile);
$count++;
file_put_contents($counterFile, $count);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Astro Black</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilo.css">

</head>
<body>
  <div class="nebula"></div>

  <div class="stars">
    <div class="star" style="top: 50%; left: 70%; animation-delay: 3s; animation-duration: 7s;"></div>
    <div class="star" style="top: 60%; left: 25%; animation-delay: 4s; animation-duration: 4.5s;"></div>
    <div class="star" style="top: 75%; left: 60%; animation-delay: 5s; animation-duration: 6.5s;"></div>
    <div class="star" style="top: 85%; left: 15%; animation-delay: 6s; animation-duration: 5.5s;"></div>
    <div class="star" style="top: 10%; left: 50%; animation-delay: 1.5s; animation-duration: 6.2s;"></div>
    <div class="star" style="top: 30%; left: 70%; animation-delay: 2.5s; animation-duration: 4.8s;"></div>
    <div class="star" style="top: 45%; left: 10%; animation-delay: 3.5s; animation-duration: 5.3s;"></div>
  </div>

  <div class="meteors">
    <div class="meteor"></div>
    <div class="meteor"></div>
    <div class="meteor"></div>
    <div class="meteor"></div>
    <div class="meteor"></div>
    <div class="meteor"></div>
    <div class="meteor"></div>
    
  </div>

  <div class="container">
    <img src="rh-logo.png" alt="RH Logo" class="rh-logo" />
    <h1></h1>
    <img src="astro.png" alt = "Nombre Gorra" class= "astro" />
    <img src="cap.png" alt="Gorra Astro Black" />
    <div class="original">Original</div>
    <img src="palomita.webp" alt="Verificado" class="palomita">
    <div class="authentic">Authentic Product</div>
  </div>
</body>
</html>
