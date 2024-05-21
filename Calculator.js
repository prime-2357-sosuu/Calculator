let result = document.getElementById("result");

function appendToResult(value) {
  result.value += value;
}

function calculateResult() {
  result.value = eval(result.value);
}

function clearResult() {
  result.value = "";
}
