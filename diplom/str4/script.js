// Получаем форму и элементы ввода
const form = document.querySelector('form');
const nameInput = form.querySelector('#name');
const emailInput = form.querySelector('#email');
const messageInput = form.querySelector('#message');

// Обработчик отправки формы
form.addEventListener('submit', function(event) {
  // Отменяем стандартное поведение формы
  event.preventDefault();

  // Создаем объект для отправки данных на сервер
  const xhr = new XMLHttpRequest();

  // Настраиваем запрос
  xhr.open('POST', 'https://example.com/contact.php');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  // Отправляем запрос
  xhr.send('name=' + nameInput.value + '&email=' + emailInput.value + '&message=' + messageInput.value);

  // Обработчик завершения запроса
  xhr.onload = function() {
    if (xhr.status === 200) {
      alert('Сообщение успешно отправлено!');
    } else {
      alert('Произошла ошибка при отправке сообщения.');
    }
  };
});
