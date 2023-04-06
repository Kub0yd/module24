<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Application/CSS/index.css" />
    <title>MVS practice</title>
  </head>
  <body>
   <header>
      <p>SPA LAND</p>
      <nav>
       <a href="./index.php">Главная</a>
       <a href="./index.php?url=portfolio">Портфолио</a>
       <a href="#">Ссылка 3</a>
      </nav>
     </header>
     <main>
      <div class="text-block">
        <?php include $content_view; ?>
      </div>  
     </main>
    
     <footer>
      <p>Контакты: телефон +7 (123) 456-78-90, email: example@mail.com</p>
     </footer>
  </body>
</html>