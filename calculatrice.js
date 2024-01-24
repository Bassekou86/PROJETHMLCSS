document.getElementById("myButton").onclick = function() {
    let nombre1 = parseInt(document.getElementById('firstNumber').value);
    let nombre2 = parseInt(document.getElementById('secondNumber').value);
    let myOperation = document.getElementById('myOperation').value
    let myResult;
    if (myOperation === '-') {
        myResult = nombre1 - nombre2;
    }
    else if (myOperation === '+') {
        myResult = nombre1 + nombre2;
    }
    else if (myOperation === '*') {
        myResult = nombre1 * nombre2;
    }
    else if (myOperation === '/') {
        myResult = nombre1 / nombre2;
    }
    document.getElementById("myCalcul").value = myResult;
    console.log (myResult);
};