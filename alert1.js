'use strict'

var plusButton = document.getElementById('plus'),
    op1 = document.getElementById('op1'),
    op2 = document.getElementById('op2'),
    result = document.getElementById('result');


function onPlusClick() {
   result.innerHTML = +op1.value + +op2.value;

}

plusButton.onclick = onPlusClick;