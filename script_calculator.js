// Functions to interact with the calculator

let display = document.getElementById("display");

function appendToDisplay(value) {
    display.value += value;
}

function clearDisplay() {
    display.value = "";
}

function calculateResult() {
    try {
        display.value = eval(display.value);
    } catch (error) {
        display.value = "Error";
    }
}

function calculateSqrt() {
    display.value = Math.sqrt(parseFloat(display.value));
}

function calculatePower() {
    display.value = Math.pow(parseFloat(display.value), 2);
}

function calculateSin() {
    display.value = Math.sin(parseFloat(display.value));
}

function calculateCos() {
    display.value = Math.cos(parseFloat(display.value));
}

function calculateTan() {
    display.value = Math.tan(parseFloat(display.value));
}