<?php
namespace Wandu\DI\Exception;

use Interop\Container\Exception\ContainerException;
use Psr\Container\ContainerExceptionInterface;
use RuntimeException;

class CannotInjectException extends RuntimeException implements ContainerExceptionInterface, ContainerException 
{
    /** @var string */
    protected $class;

    /** @var string */
    protected $property;
    
    /**
     * @param string $class
     * @param string $property
     */
    public function __construct($class, $property)
    {
        $this->class = $class;
        $this->property = $property;
        $this->message = "It cannot be injected; {$class}::\${$property}";
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }
    
    /**
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }
}
