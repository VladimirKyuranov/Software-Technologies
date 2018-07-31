function solve(input) {
    return input
        .join(' ')
        .split(/\W+/)
        .filter(w => w != '' && w.length > 0 && w === w.toUpperCase())
        .join(', ');
}

console.log(solve([
    'We start by HTML, CSS, JavaScript, JSON and REST.',
    'Later we touch some PHP, MySQL and SQL.',
    'Later we play with C#, EF, SQL Server and ASP.NET MVC.',
    'Finally, we touch some Java, Hibernate and Spring.MVC.'
]));