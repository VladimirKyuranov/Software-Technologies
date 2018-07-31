function solve(numbers) {
    let num1 = +numbers[0];
    let num2 = +numbers[1];
    return num1 <= num2 ? num1 * num2 : num1 / num2;
}