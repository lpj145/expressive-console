<?php
namespace ExpressiveConsole;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExposeCommands extends BaseCommand
{
    protected function description()
    {
        $this
            ->setDescription('Expose all configurations on container');
    }

    protected function process(InputInterface $input, OutputInterface $output)
    {
        foreach ($this->container->get('config') as $configName => $config) {

            if (is_array($config)) {
                $output->writeln($configName.':'.print_r($config, true));
                continue;
            }

            $output->writeln($configName.':'.$config);
        }
    }
}
