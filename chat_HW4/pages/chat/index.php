<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <title>Чат</title>
    <link rel="stylesheet" href="/assets/css/style.css" />
    <script src="/assets/js/app.js" defer></script>
  </head>
  <body>
    <div class="container">
      <!-- start Header -->
      <header>Чат</header>
      <!-- end Header -->

      <!-- start Nav -->
      <nav>
        <a href="index.html">Главная</a>
        <a href="chat.html">Чат</a>
      </nav>
      <!-- end Nav -->

      <!-- start main -->
      <main>
        <h1>Чат</h1>

        <input class="form-control" type="text" placeholder="Введите имя" id="name" />
        <textarea class="form-control" type="text" placeholder="Введите сообщение" id="message"></textarea>
        <button onclick="send()" type="button">Отправить</button><br />

        <span id="name"></span>
        <span id="messages"></span>
        <p id="error"></p>
      </main>
      <!-- end main -->

      <!-- start Footer -->
      <footer>©2023</footer>
      <!-- end Footer -->
    </div>
  </body>
</html>
