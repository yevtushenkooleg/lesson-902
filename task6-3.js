'use strict';

let menu = {
    width:200,
    height:300,
    title: "My menu"
};

multiplyNumeric(menu);
console.log(menu);

function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n)
}

function multiplyNumeric(obj)
{
    for (let prop in obj) {
        if (isNumeric(obj[prop])) {
            obj[prop] *=2;
        }
    }
}
