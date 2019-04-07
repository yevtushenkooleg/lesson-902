<?php


class EmptyValidator implements ValidationInterface
{


    public function validate(string $value): bool
    {
       return !empty($value);
    }

    public function getMessage(): string
    {
        return 'значение не может быть пустым';
    }
}