// Изменение цвета фона при наведении на элементы меню в шапке
var navItems = document.querySelectorAll('nav li');
for (var i = 0; i < navItems.length; i++) {
  navItems[i].addEventListener('mouseover', function() {
    this.style.backgroundColor = '#111';
  });
  navItems[i].addEventListener('mouseout', function() {
    this.style.backgroundColor = 'transparent';
  });
}
// Обработка данных формы регистрации и входа
var loginForm = document.getElementById('login-form');
var signupForm = document.getElementById('signup-form');

loginForm.addEventListener('submit', function(event) {
  event.preventDefault();
  var email = document.getElementById('login-email').value;
  var password = document.getElementById('login-password').value;
  // Отправка запроса на сервер для проверки данных и входа в систему
});

signupForm.addEventListener('submit', function(event) {
  event.preventDefault();
  var name = document.getElementById('signup-name').value;
  var email = document.getElementById('signup-email').value;
  var password = document.getElementById('signup-password').value;
  // Отправка запроса на сервер для регистрации нового пользователя
});
