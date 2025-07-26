let zero = document.getElementById("btn0");
let one = document.getElementById("btn1");
let CLR = document.getElementById("btnClr");
let Equal = document.getElementById("btnEql");

let Sum = document.getElementById("btnSum");
let Sub = document.getElementById("btnSub");
let Mul = document.getElementById("btnMul");
let Div = document.getElementById("btnDiv");

let res = document.getElementById("res");

zero.addEventListener("click", () => {
    res.innerHTML += "0";
});
one.addEventListener("click", () => {
    res.innerHTML += "1";
});
CLR.addEventListener("click", () => {
    res.innerHTML = "";
});
Equal.addEventListener("click", () => {
    let result;
    const match = res.innerHTML.match(/^([01]+)([\+\-\*\/])([01]+)$/);
    const operand1 = parseInt(match[1], 2);
    const operator = match[2];
    const operand2 = parseInt(match[3], 2);
    switch (operator) {
        case '+': result = operand1 + operand2; break;
        case '-': result = operand1 - operand2; break;
        case '*': result = operand1 * operand2; break;
        case '/': result = Math.floor(operand1 / operand2); break;
    }
    res.innerHTML = result.toString(2);
});
Sum.addEventListener("click", () => {
    res.innerHTML += "+";
});
Sub.addEventListener("click", () => {
    res.innerHTML += "-";
});
Mul.addEventListener("click", () => {
    res.innerHTML += "*";
});
Div.addEventListener("click", () => {
    res.innerHTML += "/";
});
