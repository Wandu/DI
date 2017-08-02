<?php
namespace Wandu\DI\Contracts;

interface ContainerFluent
{
    /**
     * @param string $paramName
     * @param string|array $target
     * @return \Wandu\DI\Contracts\ContainerFluent
     */
    public function assign(string $paramName, $target): ContainerFluent;

    /**
     * @param array $params
     * @return \Wandu\DI\Contracts\ContainerFluent
     */
    public function assignMany(array $params = []): ContainerFluent;
    
    /**
     * @param string $propertyName
     * @param string|array $target
     * @return \Wandu\DI\Contracts\ContainerFluent
     */
    public function wire(string $propertyName, $target): ContainerFluent;

    /**
     * @param array $properties
     * @return \Wandu\DI\Contracts\ContainerFluent
     */
    public function wireMany(array $properties): ContainerFluent;

    /**
     * @return \Wandu\DI\Contracts\ContainerFluent
     */
    public function freeze(): ContainerFluent;

    /**
     * @return \Wandu\DI\Contracts\ContainerFluent
     */
    public function factory(): ContainerFluent;
    
    /**
     * @param callable $handler
     * @return \Wandu\DI\Contracts\ContainerFluent
     */
    public function after(callable $handler): ContainerFluent;
}
