//Chat

function askName() {
  let name = document.getElementById("name").value;

  if (name == "") {
    document.getElementById("error").innerText = "Ошибка. Введите имя";
    return;
  }

  let message = document.getElementById("message").value;

  let user = `${name}: ${message}`;

  document.getElementById("result").innerText = user;
  document.getElementById("message").value = "";
}

//Calculator

function calc(operation) {
  let firstNum = +document.getElementById("firstNum").value;
  let secondNum = +document.getElementById("secondNum").value;

  switch (operation) {
    case "+":
      result = add(firstNum, secondNum);
      break;
    case "-":
      result = sub(firstNum, secondNum);
      break;
    case "/":
      result = divide(firstNum, secondNum);
      break;
    case "*":
      result = mult(firstNum, secondNum);
      break;
    case "=":
      result.innerText = eval(result.innerText);
      break;
  }
}

function add(firstNum, number) {
  result = firstNum + number;
  document.getElementById("resNum").value = result;
  return result;
}

function sub(firstNum, secondNum) {
  result = firstNum - secondNum;
  document.getElementById("resNum").value = result;
  return result;
}

function divide(firstNum, secondNum) {
  result = firstNum / secondNum;
  if (secondNum == 0) {
    document.getElementById("resNum").value = "Ошибка деления на нуль";
    return;
  }
  document.getElementById("resNum").value = result;

  return result;
}

function mult(firstNum, secondNum) {
  result = firstNum * secondNum;
  document.getElementById("resNum").value = result;
  return result;
}
