function solve(input) {
    let wantedKey = input.pop();

    let kvps = {};

    for (let line of input) {
        let [key, value] = line.split(' ');

        if (key in kvps) {
            kvps[key].push(value);
        }else{
            kvps[key] = [value];
        }
    }

    return wantedKey in kvps ? kvps[wantedKey].join('\n') : 'None';
}

console.log(solve([
    'key value',
    'key eulav',
    'test tset',
    'key'
]));

console.log(solve([
    '3 bla',
    '3 alb',
    '2'
]));