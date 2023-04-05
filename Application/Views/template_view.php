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
      <img src="logo.png" alt="Логотип">
      <nav>
       <a href="#">Ссылка 1</a>
       <a href="#">Ссылка 2</a>
       <a href="#">Ссылка 3</a>
      </nav>
     </header>
     
     <main>
        <?php include $content_view; ?>
        <img src="Application/images/background.jpg" alt="Изображение">
     </main>
    
     <footer>
      <p>Контакты: телефон +7 (123) 456-78-90, email: example@mail.com</p>
     </footer>
  </body>
</html>