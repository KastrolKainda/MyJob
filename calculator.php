<!DOCTYPE html>
<html>
    <title>//Simple Calculator.com </title>
<head>
<style>
html{
    /*background: #222;*/
    background: #222;
    /*background-color: #000;*/
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.calculator {
    border: 2px solid blue;
    width: 500px;
    height: 500px;
    padding: 15px;
    border-radius: 10px;
}

input[type="text"] {
    width: 100%;
    height: 60px;
    margin-bottom: 10px;
    font-size: 28px;
}

.buttons {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 5px;
}

button {
    width: 100%;
    height: 40px;
    font-size: 16px;
    cursor: pointer;
}
#bttn {
/*background-color: rgb(214, 137, 137);*/
background-color: #ff5722;
color: #fff;
font-size: 20px;
height: 42px;
}

h3{
    /*font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-family:sans-serif
    color: rgb(0, 0, 0);*/
    color: rgb(0, 0, 0);
    background-color: rgb(214, 137, 137);
    font-size: 20px;
    text-align: center;
    font-size: 22px;
    border-radius: 5px;
    
}
    </style>
</head>
<body>

    <div class="calculator">
        <h3>ABRASHIMI CALCULATOR</h3><br><br>
        <input type="text" id="display" disabled><br><br>
        <div class="buttons">
            <button onclick="clearDisplay()" id="bttn">C</button>
            <button onclick="appendToDisplay('1')">1</button>
            <button onclick="appendToDisplay('2')">2</button>
            <button onclick="appendToDisplay('3')">3</button>
            <button onclick="appendToDisplay('+')">+</button>
            <button onclick="appendToDisplay('4')">4</button>
            <button onclick="appendToDisplay('5')">5</button>
            <button onclick="appendToDisplay('6')">6</button>
            <button onclick="appendToDisplay('-')">-</button>
            <button onclick="appendToDisplay('7')">7</button>
            <button onclick="appendToDisplay('8')">8</button>
            <button onclick="appendToDisplay('9')">9</button>
            <button onclick="appendToDisplay('*')">*</button>
            <button onclick="appendToDisplay('.')">.</button>
            <button onclick="appendToDisplay('0')">0</button>
            <button onclick="calculateTan()">(</button>
            <button onclick="appendToDisplay('/')">/</button>
            <button onclick="calculateSqrt()">√</button>
            <button onclick="calculatePower()">^</button>
            <button onclick="calculateTan()">)</button>
            <button onclick="calculateSin()">sin</button>
            <button onclick="calculateCos()">cos</button>
            <button onclick="calculateTan()">tan</button>
            <button onclick="calculateResult()" id="bttn">=</button>
            
        </div>
    </div>
    <script src="script_calculator.js"></script>
</body>
</html>