'use strict;';


let a = prompt('введите логин');
let b;

switch (a) {
    case 'Админ':
        b = prompt('Введите пароль');

        switch (b) {
            case 'Чёрный властелин':
                alert('Добро пожаловать');
                break;
            case null:
                alert('Вход отменён');
                break;
            default:
                alert('Пароль неверен');
        }

        break;
    case null:
        alert('Вход отменён');
        break;
    default:
        alert('я вас не знаю');
}