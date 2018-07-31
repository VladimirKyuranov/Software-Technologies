function solve(input) {
    let obj = {};

    for (let line of input) {
        let [key, value] = line.split(' -> ');

        if (value == +value){
            value = +value
        }

        obj[key] = value;
    }

    return JSON.stringify(obj);
}

console.log(solve([
    'name -> Angel',
    'surname -> Georgiev',
    'age -> 20',
    'grade -> 6.00',
    'date -> 23/05/1995',
    'town -> Sofia'
]));