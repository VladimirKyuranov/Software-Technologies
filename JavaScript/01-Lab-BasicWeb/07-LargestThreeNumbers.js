function solve(numbers) {
    numbers = numbers.sort((a,b) => b - a);

    return numbers.slice(0, 3).join('\n');
}

console.log(solve(['10', '30', '15', '20', '50', '5']));