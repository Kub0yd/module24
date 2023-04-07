<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Application/CSS/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>MVS practice</title>
  </head>
  <body>
   <header>
      <p>СПА-САЛОН</p>
      <nav>
       <a href="./index.php">Главная</a>
       <a href="./index.php?url=addresses">Контакты</a>
       <a href="./index.php?url=feedback">Отзыв</a>
      </nav>
     </header>
     <main>
      <div class="text-block">
        <?php include $content_view; ?>
      </div>  
     </main>
    
     <footer>
      <div class="footer-container">
          <div class="footer-dev">
            <p>Разработал <a href="https://github.com/Kub0yd/module24">Егоров В.С.</a></p>
          </div>
          <div class="footer-logo">
            <img src="Application\images\icon.png" alt="Logo">
            <h4>Пример MVC-архитектуры</h4>
          </div>
          <div class="footer-links">
            <a href="#">
              <img src="Application/images/white_twitter_bird.png" alt="Twitter">
            </a>
            <a href="#">
              <img src="Application/images/white_facebook.png" alt="Facebook">
            </a>
            <a href="#">
              <img src="Application/images/white_share_this.png" alt="Share">
            </a>
          </div>
          
      </div>   
     </footer>
  </body>
</html>