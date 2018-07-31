function solve(input) {
    let objects = [];

    for (let line of input) {
        let [name, age, grade] = line.split(' -> ');
        let obj = {Name:name, Age:age, Grade:grade};
        let objStr = `Name: ${obj.Name}\nAge: ${obj.Age}\nGrade: ${obj.Grade}`
        objects.push(objStr);
    }

    return objects.join('\n');
}

console.log(solve([
    'Pesho -> 13 -> 6.00',
    'Ivan -> 12 -> 5.57',
    'Toni -> 13 -> 4.90'
]));