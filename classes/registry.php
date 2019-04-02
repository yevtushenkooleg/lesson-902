<?php


class registry
{

    /**
     * @var Registry
     */

    private static  $instance;

    private $formElementClass;

    private function __construct()
    {
    }


    static public function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new registry();
        }

        return self::$instance;

    }
    /**
 * @return mixed
 */
public function getFormElementClass()
{
    return $this->formElementClass;
}/**
 * @param mixed $formElementClass
 */
public function setFormElementClass($formElementClass): void
{
    $this->formElementClass = $formElementClass;
}



}