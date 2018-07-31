function solve(input) {
    let objects = [];

    for (let line of input) {
        let obj = JSON.parse(line);

        let keys = Object.keys(obj);
        let objStr = keys.map(k => `${k[0].toUpperCase()}${k.slice(1)}: ${obj[k]}`).join('\n');

        objects.push(objStr);
    }

    return objects.join('\n');
}

console.log(solve([
    '{"name":"Gosho","age":10,"date":"19/06/2005"}',
    '{"name":"Tosho","grade":11,"date":"04/04/2005"}'
]));