function solve(input) {
    let towns = {};

    for (let line of input) {
        let townInfo = JSON.parse(line);

        let currTown = townInfo.town;
        let currIncome = townInfo.income;

        if (towns.hasOwnProperty(currTown) === false){
            towns[currTown] = 0;
        }

        towns[currTown] += currIncome;
    }

    let keys = Array.from(Object.keys(towns)).sort();

    for (let key of keys) {
        console.log(`${key} -> ${towns[key]}`)
    }
}

solve([
    '{"town":"Sofia","income":200}',
    '{"town":"Varna","income":120}',
    '{"town":"Pleven","income":60}',
    '{"town":"Varna","income":70}'
])