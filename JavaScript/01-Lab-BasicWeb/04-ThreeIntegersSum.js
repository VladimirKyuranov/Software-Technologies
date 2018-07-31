function solve(input) {
    let [a, b, c] = input[0].split(' ').map(Number).sort((x, y) => x - y);
    let result = 'No';

    if (a + b === c) {
        result = `${a} + ${b} = ${c}`
    }

    if (b + c === a) {
        result = `${b} + ${c} = ${a}`
    }

    if (a + c === b){
        result = `${a} + ${c} = ${b}`;
    }



    return result;
}

console.log(solve(['90 100 -10']));