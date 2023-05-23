<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./assets/libs/aos-master/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <title>Задание №5</title>
  </head>
  <body>
    <div class="__wrapper" data-aos="fade-in" data-aos-offset="70">
    <?php
    require('./php/header.php');
    require('./php/main_content_about.php');
    require('./php/footer.php');
    ?>
    <script src="./assets/libs/aos-master/dist/aos.js"></script>
    <script>AOS.init()</script>
  </body>
</html>