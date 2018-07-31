function solve(numbers){

    for (let number of numbers) {
        if (number == 0)
            return 'Positive';
    }

    return numbers.map(Number)
        .filter(n => n < 0)
        .length % 2 == 0 ? 'Positive' : 'Negative';
}

console.log(solve(['2', '-1', '-1']));