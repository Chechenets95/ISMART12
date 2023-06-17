const form = document.querySelector('#search-form');
form.addEventListener('search-button', function(event) {
  event.preventDefault(); // отменяем действие по умолчанию (отправку формы)
  const query = document.querySelector('#search-input').value;
  // здесь вы можете выполнить поиск по вашему каталогу и вывести результаты на страницу
});
