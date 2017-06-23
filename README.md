# Lumen Commands
Adds some core Laravel commands back into Lumen for convenience.

The package follows the FIG standards PSR-1, PSR-2, and PSR-4 to ensure a high level of interoperability between shared PHP code.

## Installation

Begin by installing the package through Composer:

```
composer require efellemedia/lumen-commands
```

Once this operation is complete, simply register the package within Lumen in your project's `bootstrap\app.php` file.

```
$app->register(Efelle\LumenCommands\LumenCommandsServiceProvider::class);
```
