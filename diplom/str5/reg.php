<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js">
        const form = document.querySelector('.registration-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  
  const formData = new FormData(form);
  const xhr = new XMLHttpRequest();
  xhr.open('POST', form.action);
  xhr.send(formData);
  
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Обработка успешного ответа от сервера
        console.log(xhr.responseText);
      } else {
        // Обработка ошибки
        console.error(xhr.responseText);
      }
    }
  }
});

    </script>
    <title>iSMART - Зарегистрироваться</title>
</head>
<body>
    <header class="header-menu-item">
        <nav>
          <ul>
            <li><a href="../str1/index.html">Главная</a></li>
            <li><a href="../str3/products.html">Каталог</a></li>
            <li><a href="../str2/about.html">О нас</a></li>
            <li><a href="../str4/support_form.html">Поддержка</a></li>
            <li><a href="../str6/vhod.html">Вход</a></li>
            <li><a href="../str5/reg.html">Зарегистрироваться</a></li>
          </ul>
        </nav>
        <h1 class="logo">iSmart</a></h1>
        <div class="auth-form-container">
          <form id="login-form" class="auth-form" style="display:none;">
            <h3>Вход</h3>
            <input type="email" id="login-email" placeholder="Электронная почта" required>
            <input type="password" id="login-password" placeholder="Пароль" required>
            <button type="submit">Войти</button>
          </form>
          <form id="signup-form" class="auth-form" style="display:none;">
            <h3>Регистрация</h3>
            <input type="text" id="signup-name" placeholder="Имя" required>
            <input type="email" id="signup-email" placeholder="Электронная почта" required>
            <input type="password" id="signup-password" placeholder="Пароль" required>
            <button type="submit">Зарегистрироваться</button>
          </form>
        </div>
      </header>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="registration-container">
        <h2 class="registration-title">Регистрация</h2>
        <form class="registration-form" action="#" method="post">
          <label for="name">Имя</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
          <label for="password">Пароль</label>
          <input type="password" id="password" name="password" required>
          <label for="confirm-password">Подтвердите пароль</label>
          <input type="password" id="confirm-password" name="confirm-password" required>
          <div class="registration-checkbox">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">Я прочитал и согласен с <a href="#">условиями использования</a></label>
          </div>
          <input type="submit" value="Зарегистрироваться">
        </form>
      </div>
    <form class="registration-form" action="register.php" method="post">
    <?php
// Подключаемся к базе данных
$host = 'localhost';  // адрес сервера БД
$user = 'username';   // имя пользователя БД
$password = 'password'; // пароль пользователя БД
$db_name = 'database_name'; // имя базы данных
$link = mysqli_connect($host, $user, $password, $db_name);

// Проверяем подключение к БД
if (!$link) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

// Получаем данные из формы
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Хешируем пароль для сохранения в базе данных
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Добавляем нового пользователя в базу данных
$query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
$result = mysqli_query($link, $query);

// Проверяем, была ли ошибка при выполнении запроса к БД
if ($result) {
    echo "Вы успешно зарегистрированы!";
} else {
    echo "Ошибка: " . $query . "<br>" . mysqli_error($link);
}

// Закрываем соединение с БД
mysqli_close($link);
?>



<br>
<br>
<br>
<br>
<br>
      <footer>
        <p>&copy; iSmart 2023</p>
      </footer>
</body>
</html>