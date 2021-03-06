<?php
namespace ExpressiveConsole;

use Symfony\Component\Console\CommandLoader\CommandLoaderInterface;
use Psr\Container\ContainerInterface;

class Console implements CommandLoaderInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;
    /**
     * @var array
     */
    private $commands;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->commands = $container->get('config')['commands'] ?? [];
    }

    public function get($name)
    {
        return new $this->commands[$name]($name, $this->container);
    }

    public function has($name)
    {
        return isset($this->commands[$name]);
    }

    public function getNames()
    {
        return array_keys($this->commands);
    }

}
