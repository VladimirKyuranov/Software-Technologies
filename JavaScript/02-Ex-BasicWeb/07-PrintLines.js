function solve(input) {
    for (let line of input) {
        if (line === 'Stop') {
            break;
        }

        console.log(line);
    }
}

solve([
    'Line 1',
    'Line 2',
    'Line 3',
    'Stop'
])