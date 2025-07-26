const btn = document.getElementById("btn");
btn.addEventListener("click", function () {
    btn.innerHTML = Number(btn.innerHTML) + 1;
});