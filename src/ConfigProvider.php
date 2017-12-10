<?php
namespace ExpressiveConsole;

use Symfony\Component\Console\CommandLoader\CommandLoaderInterface;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'dependencies' => [
                'factories' => [
                    Console::class => ConsoleFactory::class
                ],
                'aliases' => [
                    CommandLoaderInterface::class => Console::class
                ]
            ],
            'commands' => [
                'config:show' => ExposeCommands::class
            ]
        ];
    }
}
