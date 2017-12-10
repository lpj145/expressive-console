#### Expressive Console

Developers for developers, this lib have service provider for ServiceManager zend.

##### How use it:
```
composer require marcosadantas/expressive-console
``` 
##### Define Command:
```
class MigrationCommand extende ExpressiveConsole\BaseCommand
{
}
```


##### Configuration
```
// On service provider, or config file
[
    'commands' => [
        'migration:create' => MigrationCommand::class,
    ]
]
```

When install package service manage try to config it. if not can, add this array to configuration file providers:
```
ExpressiveConsole\ConfigProvider
```
