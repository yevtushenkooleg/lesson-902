<?php


class EmailValidator implements ValidationInterface
{

    public function validate(string $value): bool
    {
        return mb_strpos('@',$value) !== false;
    }

    public function getMessage(): string
    {
        // TODO: Implement getMessage() method.
    }
}