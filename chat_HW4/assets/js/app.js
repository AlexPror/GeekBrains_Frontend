const nameField = document.getElementById('name')
const messageField = document.getElementById('message')

// Функция для очистки значений полей
const clearFields = () => {
  nameField.innerText = ''
  messageField.innerText = ''
}

// Функция для отправки сообщения
const send = async () => {
  const nameValue = nameField.value
  const messageValue = messageField.value
  await fetch(`chat.php?message=${messageValue}&name=${nameValue}`)
}

// Функция для получения и вывода сообщений, которых хранятся в текстовом файле
// текстовый файл - это наша маленькая база данных
const get = async () => {
  const result = await fetch("chat.php");
  const text = await result.text()
  document.getElementById("messages").innerText = text
}

get()
setInterval(get, 2000)