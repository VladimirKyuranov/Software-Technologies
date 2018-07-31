function solve(input) {
    let result = [];

    for (let line of input) {
        let[command, number] = line.split(' ');

        switch (command){
            case 'add':
                result.push(+number);
                break;
            case 'remove':
                result.splice(+number, 1);
                break;
        }
    }

    return result.join('\n');
}

console.log(solve([
    'add 3',
    'add 5',
    'remove 1',
    'add 2'
]));