<?php


interface ValidationInterface
{

    public function validate(string $value): bool;

    public function getMessage(): string;

}