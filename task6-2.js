"use strict";

let salaries= {
    'a': 100,
    's': 300,
    'd': 250
};

let summ = Infinity;
let maxName;

for(let name in salaries) {
    if (salaries[name] > summ) {
        summ = salaries[name];
        maxName=name;
    }
}

if (!maxName) {
    alert('нет сотрудников');
} else {
    alert(maxName);
}