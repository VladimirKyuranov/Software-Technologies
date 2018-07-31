function solve(input) {
    let number = Number(input[0]);
    let result = [];

    for (let i = 1; i <= number; i++) {
        if (isSymmetric(i)) {
            result.push(i);
        }
    }

    return result.join(' ');

    function isSymmetric(num) {
        let numStr = num.toString();

        for (let i = 0; i < numStr.length / 2; i++) {
            if (numStr[i] !== numStr[numStr.length - 1 - i]) {
                return false;
            }
        }

        return true;
    }
}

console.log(solve(['1001']));