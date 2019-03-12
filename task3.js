'use strict;';

let a = prompt('введите логин');
let b;

if (a === null) {
    alert('Вход отменён');
} else if (a !== 'Админ'){
    alert('Я вас не знаю');
} else  {
    b = prompt('Введите пароль');
    if (b==='Чёрный властелин'){
        alert('Добро пожаловать');
    } else if (b !== null) {
        alert ('Неверный пароль');
    } else {
        alert('Вход отменён');
    }
}