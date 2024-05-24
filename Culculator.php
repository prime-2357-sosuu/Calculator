<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>電卓</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: white;
      margin: 0;
    }
    .calculator {
      border: 1px solid white;
      background-color: #bfd6ff;
      border-radius: 5px;
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    }
    .display {
      padding: 10px;
      text-align: right;
      border-bottom: 1px solid black;
      background-color: #dff4f5;
    }
    .display input {
      width: 100%;
      height: 40px;
      padding-right: 10px;
      font-size: 30px;
      outline: none;
      border: none;
      background: none;
    }
    .keypad {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 5px;
      padding: 10px;
    }
    button {
      background-color: black;
      color: white;
      padding: 10px 20px;
      font-size: 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
    }
    button:hover {
      background-color: #4f4f4f;
      color: white;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <div class="display">
      <input type="text" id="result" placeholder="0" disabled>
    </div>
    <div class="keypad">
      <button onclick="clearResult()">AC</button>
      <button onclick="appendToResult('/')">÷</button>
      <button onclick="appendToResult('*')">✕</button>
      <button onclick="appendToResult('-')">－</button>
      <button onclick="appendToResult('7')">７</button>
      <button onclick="appendToResult('8')">８</button>
      <button onclick="appendToResult('9')">９</button>
      <button onclick="appendToResult('+')">＋</button>
      <button onclick="appendToResult('4')">４</button>
      <button onclick="appendToResult('5')">５</button>
      <button onclick="appendToResult('6')">６</button>
      <button onclick="calculateResult()">=</button>
      <button onclick="appendToResult('1')">１</button>
      <button onclick="appendToResult('2')">２</button>
      <button onclick="appendToResult('3')">３</button>
      <button onclick="appendToResult('0')">０</button>
      <button onclick="appendToResult('.')">.</button>
    </div>
  </div>
  <script>
    const result = document.getElementById("result");

    const appendToResult = value => result.value += value;
    const calculateResult = () => result.value = eval(result.value);
    const clearResult = () => result.value = "";
  </script>
</body>
</html>