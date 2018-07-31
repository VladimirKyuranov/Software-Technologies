function solve(input) {
    let length = +input.shift();

    let arr = [];

    for (let i = 0; i < length; i++) {
        arr[i] = 0;
    }

    for (let el of input) {
        let [ind, num] = el.split(' - ').map(Number);
        arr[ind] = num;
    }

    return arr.join('\n');
}

console.log(solve([
    '3',
    '0 - 5',
    '1 - 6',
    '2 - 7'
]));