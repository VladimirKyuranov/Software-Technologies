function sumNumbers() {
    let num1 = document.getElementById('num1').value;
    let num2 = document.getElementById('num2').value;

    let sum = Number(num1) + Number(num2);

    console.log(sum);

    document.getElementById('result').innerHTML = sum;
}