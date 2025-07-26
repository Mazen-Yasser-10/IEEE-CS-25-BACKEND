const btn5 = document.getElementById("btn5");

btn5.addEventListener("click", () => {
    const labels = [
        document.getElementById("btn1").innerHTML,
        document.getElementById("btn2").innerHTML,
        document.getElementById("btn3").innerHTML,
        document.getElementById("btn4").innerHTML,
        document.getElementById("btn6").innerHTML,
        document.getElementById("btn7").innerHTML,
        document.getElementById("btn8").innerHTML,
        document.getElementById("btn9").innerHTML,
    ];

    const rotated = [
        labels[0],
        labels[1],
        labels[2],
        labels[3],
        labels[4],
        labels[5],
        labels[6],
        labels[7],
    ];

    document.getElementById("btn1").innerHTML = rotated[3];
    document.getElementById("btn2").innerHTML = rotated[0];
    document.getElementById("btn3").innerHTML = rotated[1];
    document.getElementById("btn4").innerHTML = rotated[5];
    document.getElementById("btn6").innerHTML = rotated[2];
    document.getElementById("btn7").innerHTML = rotated[6];
    document.getElementById("btn8").innerHTML = rotated[7];
    document.getElementById("btn9").innerHTML = rotated[4];
});
